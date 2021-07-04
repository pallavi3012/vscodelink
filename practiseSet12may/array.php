<?php

$num=array(1,2,3,4,5);
for($i=0;$i<count($num);$i++)
{
    echo " $num[$i]";
}

echo "-------------------------------------------------\n";

$loc_array=array("pune","mumbai","karnataka");
foreach($loc_array as $loc)
{
    echo "location=>$loc\n";
}
$location=readline('Enter the location:');
echo "user enter location=> $location";
echo "-------------------------------------------------------\n";

$location_arr=array("pune","mumbai");
$location="pune";
if(in_array($location,$location_arr))
{
    echo "location $location is present in the array";
}
else
{
    echo "Location is not present";
}

?>