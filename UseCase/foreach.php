<?php
$name=array(1=>"one",2=>"two",3=>"three");
foreach($name as $num)
{
    if($num=="two")
    {
    echo "final number is: $num </br>";
    }
    else{
        continue;
    }
}
?>