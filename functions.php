<?php 
/*
Description:
This function is useful in data grouping. 

---------Structure Of Data-----------
$dataMeta1 = [

 [
 'Views' => 1,
 'Clicks' => 5,
 'Myros'  => 10,
 'WebpaceId' => 3061,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '855'
              ]
 ],
  [
 'Views' => 1,
 'Clicks' => 5,
 'Myros'  => 10,
 'WebpaceId' => 3061,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '860'
              ]
 ],
 .
 .
 .


 ]
---------Arguments-----------

$dataMeta : The data to be ordered
$propertyToGroup: This property will be used in order to scan the array list, 
group and add the values  with common $propertyToGroup of data structure. Has to be present in all data structure
$property1ToAdd, $property2ToAdd: these properties are the sums of all common values

*/

function mergeArrayListByProPerty($dataMeta, $propertyToGroup, $property1ToAdd, $property2ToAdd ) {

    $printFlag = 1;
    $printJson = 0;
    if($printFlag){
		echo "------------Input Data------------ <br>";
		echo '<pre>'; print_r($dataMeta); echo '</pre>';
		
	}

	if($printJson){
		echo "------------Input Data------------ <br>";
		echo json_encode($dataMeta)."<br>";
	}

	//Step 1
	//get list of webspace ids
	$wbIds = [];
	for($c=0; $c<sizeof($dataMeta);$c++){
	  
	  $dataMeta[$c] = validateStructure($dataMeta[$c], $propertyToGroup, $property1ToAdd, $property2ToAdd);
	  //collect webspace ids
	 // echo '<pre>'; print_r(); echo '</pre>';
	  $wbIds[] = $dataMeta[$c][$propertyToGroup];
  	//get keys of input
	$arProp = [$propertyToGroup, $property1ToAdd, $property2ToAdd];
    $keys = array_keys($dataMeta[$c]);
    $restOfKeys = array_diff($keys, $arProp);
	    
	}

	//Step 2
	//create frequencies of elementes in $wbIds
	$freq = array_count_values($wbIds);

	//find the elements in array with frequency bigger than 1
	$elDup = [];
	$elOnlyOnce = [];

	foreach($freq as $freqK => $freqV){

	  if($freqV>1){
	    $elDup[] = $freqK;
	  } else{
	  	/* elements which occurs only once*/
	  	
	  	$elOnlyOnce[] = $freqK;
	  }

	}
	if($printFlag){
		echo '<pre>Rest Of Keys<br>'; print_r($restOfKeys); echo '</pre>';
		echo '<pre>Single<br>'; print_r($elOnlyOnce); echo '</pre>';
	}

	//Step 3
	//search for these elements in the initial data 
	$groupsOfData = [];
	$tempar = [];
	for($c=0; $c<sizeof($dataMeta);$c++){
	  $tempar = [];
	  foreach($elDup as $elV) {

	    if($dataMeta[$c][$propertyToGroup] == $elV){
	     
	      if (!isset($groupsOfData[$elV])) {
	      	  //initializations
	          $groupsOfData[$elV] = [];
	          $groupsOfData[$elV] = [$c];
	      } else {
	         array_push($groupsOfData[$elV], $c);
	      }
	    }

	  }

	}

	//Step 4
	//search for the elements in the initial data that occurs only once  and save position

	$singleData = [];
	$tempar = [];
	for($c=0; $c<sizeof($dataMeta);$c++){
	  $tempar = [];
	  foreach($elOnlyOnce as $elV) {

	    if($dataMeta[$c][$propertyToGroup] == $elV){
	      //echo '<pre>'; print_r($elV); echo '</pre>';
	      //array_push($singleData[$elV], $c);
	      if (!isset($singleData[$elV])) {
	      	  //initialization - save area
	          //$singleData[$elV] = [];
	          $singleData[$elV] = $c;
	      } else {
	         //array_push($singleData[$elV], $c);
	      }
	    }

	  }

	}

	if($printFlag){
		echo "<br>Groups Of Data By Position:"."<br>";

		echo '<pre>'; print_r($groupsOfData ); echo '</pre>';
	}

	//echo "<br>Single Of Data By Position:"."<br>";

	//echo '<pre>'; print_r($singleData ); echo '</pre>';

	if($printFlag){
		echo "preparing to merge data from groups data...." ."<br>";
	}

	$res = [];
	$tempStr = [];

	//Step 5
	//merge data due to position in group data in the initial data
	//same properties are added 

	foreach($groupsOfData as $gcDK => $gcDV){
	 
	 //initialization structure of temp Array
	 $tempAr = [
	 'Views' => 0,
	 'Clicks' => 0,
	 'Myros'  => 0,
	 'WebpaceId' => "temp_WebpaceId",
	 'SiteInfo' => [
	                'Metadescr'=>'temp_MetaAction1',
	                 'siteId' => 'temp_852'
	              ]
	 ];
	
	  //echo '<pre>asd'; print_r($dataMeta[0]); echo '</pre>';
	  /*initialization - check the structure of the first elements accordingly to the properties to add	
	  If one of these values does not exist then it is added to $dataMeta[0] */

	  //$tempStr = validateStructure($dataMeta[0],$propertyToGroup, $property1ToAdd, $property2ToAdd);
	  

	  //$tempStr = $dataMeta[0];
	  //echo '<pre>'; print_r($tempStr); echo '</pre>';

	  foreach($gcDV as $posK => $posV){

	  	//echo "var:". "temp Values ".$tempStr[$property1ToAdd]." $posV $property1ToAdd $property2ToAdd".$dataMeta[$posV][$property1ToAdd]."<br>";

	    $tempAr[$property1ToAdd] = $tempAr[$property1ToAdd] + $dataMeta[$posV][$property1ToAdd];
	    
	    $tempAr[$property2ToAdd] = $tempAr[$property2ToAdd] + $dataMeta[$posV][$property2ToAdd] ;
	    
	    $tempAr[$propertyToGroup] = $dataMeta[$posV][$propertyToGroup];
	    $tempAr[$propertyToGroup] = $dataMeta[$posV][$propertyToGroup];

	    /*take care of the rest properties*/

	   	foreach($restOfKeys as $restKK => $restKV){
		    $tempAr[$restKV] = $dataMeta[$posV][$restKV];
 			//$tempAr['WebpaceId'] = $dataMeta[$posV]['WebpaceId'];   		
	   	}



	  }
	  //push tempStr in res
	  array_push($res,$tempAr);
	  //reset
	  $tempStr = [];

	}
	//Step 6
	//append single data due to output
	if($printFlag){
		echo "preparing to append data from single data to output...." ."<br>";
	}

	foreach($singleData as $sDK => $sDV){
		array_push($res, $dataMeta[$sDV]);
	}

	if($printFlag){
		echo "------------Output-----------------" ."<br>";
		echo '<pre>'; print_r($res); echo '</pre>';
	}


	if($printJson){
		echo "------------Output-----------------" ."<br>";
		echo "<br>".json_encode($res)."<br>";
	}

	return $res;
}

/*Check the structure of ar accordingly to the properties to group and to add 	
If one of these values does not exist then it is added to $dataMeta[0] -- used in initialization */
function validateStructure($ar, $propertyToGroup, $property1ToAdd, $property2ToAdd){
	$resV = [];

	//initialization
	$resV = $ar;
	foreach($ar as $arK => $arV){

		if(!isset($ar[$propertyToGroup])){
			die('Fatal error------Property to Group has to exist in all tables!!');
			//$res[$propertyToGroup] = 0;
		} 
		else if (!isset($ar[$property1ToAdd])){
			$resV[$property1ToAdd] = 0;
		}
		else if (!isset($ar[$property2ToAdd])){
			$resV[$property2ToAdd] = 0;
		}
	}

	return $resV;
}

?>