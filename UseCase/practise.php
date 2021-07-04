<?php

$name=array(
    "1"=>array("name"=>'pallavi', "loc"=>"pune"),
    "2"=>array("name"=>'shreya',"loc"=>'pune')
);

//echo $name["1"];
foreach($name as $deet=>$det)
{
    $details="";
    foreach($det as $key=>$val)
    {
        $details .=  "key is " . $key . " and value is " . $val . "\n";
    }
    echo "$deet=>$details" . "\n";  
}
$input=readline('enter input string');
$pattern="/^[0-9]{2}$/";
if(preg_match($pattern,$input,$matches))
{
    echo "true";
}
else
{
    echo "false";
}

class samp
{
     public $val=10;
     function getval($val)
    {
        echo $val;
    }
}
class sam2 extends samp
{
    function getval($val,$val)
    {
        echo self::$val;
    }
}
$obj=new samp();
echo $obj->getval();