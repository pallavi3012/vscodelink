<?php

$location=array("pune","mumbai","nashik");
$enterLocation=readline('enter location -');
if(in_array($enterLocation,$location))
{
    echo "location $enterLocation is present in array......\n";
    $idx=array_search($enterLocation,$location);
    echo "$enterLocation is present at $idx index";
}
else{
    echo  "$enterLocation is not present in array....";
}

?>