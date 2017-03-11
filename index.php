<!DOCTYPE html>
<html>
 <head>
  <title>PHP Test</title>
  <style>
    body{
      background-color: lightgrey;
    }
  </style>
 </head>
 <body>

 <?php

//include('./functions.php');
include './functions.php';
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

// $data = [

// "MetaAction1" => "1",
// "MetaAction2" => "2",
// "MetaAction3" => "3",
// "MetaAction4" => "4",
// "MetaAction5" => "5"

// ];

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
  [
 'Views' => 1,
 'WebpaceId' => 3062,
 'Myros'  => 20,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '848'
              ]
 ],
  [
 'Views' => 1,
 'WebpaceId' => 3047,
 'Myros'  => 14,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '850'
              ]
 ],
[
 'Views' => 2,
 'Myros'  => 20,
 'WebpaceId' => 3047,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '852'
              ]
 ],

[
 'Views' => 2,
 'Clicks' => 1,
 'Myros'  => 22,
 'WebpaceId' => 3062,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 17,
 'WebpaceId' => 3062,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3047,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3040,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '852'
              ]
 ],
[
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3041,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction1',
                 'siteId' => '852'
              ]
 ],
];
/* MetaAction 2*/

$dataMeta2 = [

 [
 'Views' => 12,
 'Clicks' => 5,
 'Myros'  => 10,
 'WebpaceId' => 3022,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '855'
              ]
 ],
  [
 'Views' => 1,
 'Clicks' => 5,
 'Myros'  => 10,
 'WebpaceId' => 3060,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '860'
              ]
 ],
  [
 'Views' => 1,
 'WebpaceId' => 3000,
 'Myros'  => 20,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '848'
              ]
 ],
  [
 'Views' => 1,
 'WebpaceId' => 3022,
 'Myros'  => 14,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '850'
              ]
 ],
[
 'Views' => 2,
 'Myros'  => 20,
 'WebpaceId' => 3047,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '852'
              ]
 ],

[
 'Views' => 2,
 'Clicks' => 1,
 'Myros'  => 22,
 'WebpaceId' => 3062,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 17,
 'WebpaceId' => 3062,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3047,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3040,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '852'
              ]
 ],
[
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3041,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction2',
                 'siteId' => '852'
              ]
 ],
];

/* MetaAction 3*/

$dataMeta3= [

 [
 'Views' => 12,
 'Clicks' => 5,
 'Myros'  => 10,
 'WebpaceId' => 3022,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '855'
              ]
 ],
  [
 'Views' => 1,
 'Clicks' => 5,
 'Myros'  => 10,
 'WebpaceId' => 3060,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '860'
              ]
 ],
  [
 'Views' => 1,
 'WebpaceId' => 3000,
 'Myros'  => 20,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '848'
              ]
 ],
  [
 'Views' => 1,
 'WebpaceId' => 3022,
 'Myros'  => 14,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '850'
              ]
 ],
[
 'Views' => 2,
 'Myros'  => 20,
 'WebpaceId' => 3047,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '852'
              ]
 ],

[
 'Views' => 2,
 'Clicks' => 1,
 'Myros'  => 22,
 'WebpaceId' => 3062,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 17,
 'WebpaceId' => 3062,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3047,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '852'
              ]
 ],
 [
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3040,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '852'
              ]
 ],
[
 'Views' => 1,
 'Clicks' => 1,
 'Myros'  => 1,
 'WebpaceId' => 3041,
 'SiteInfo' => [
                'Metadescr'=>'MetaAction3',
                 'siteId' => '852'
              ]
 ],
];

$data = [
'MetaAction1' => $dataMeta1, 
'MetaAction2' => $dataMeta2, 
'MetaAction3' => $dataMeta3
];

$executeOneLevelDeeper = 0;
//echo '<pre>'; print_r($data); echo '</pre>';


/*arg1: data, arg2: propertytoGroup, arg3: property1 where we add values, arg4:property2 where we add values*/
if(!$executeOneLevelDeeper){
  mergeArrayListByProPerty($dataMeta1,'WebpaceId','Views','Clicks');
}
else{

$temp = [];
foreach($data as $dataMetaK => $dataMetaV){

  $temp = mergeArrayListByProPerty($dataMetaV,'WebpaceId','Views','Clicks');

  //unset $data[$dataMetaK] -- delete element
  unset($data[$dataMetaK]);
  //save in the previous position the new merged - grouped data
  $data[$dataMetaK] = $temp;

}

echo '<pre>'; print_r($data); echo '</pre>';

}

 ?> 
 </body>
</html>