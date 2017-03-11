# mergeArrayList

##Description

mergeArrayListByProPerty($dataMetaV,'WebpaceId','Views','Clicks');

This function is useful in data grouping. 

##Structure Of Data
```sh
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
```
##Arguments

- $dataMeta : The data to be ordered
- $propertyToGroup: This property will be used in order to scan the array list, 
group and add the values  with common $propertyToGroup of data structure. Has to be present in all data structure
- $property1ToAdd, $property2ToAdd: these properties are the sums of all common $propertyToGroup
