<?php
exec('which php',$a);
var_dump($a);
abstract class parentclass
{
    function __construct($name,$loc)
    {
        echo $name . " from " . $loc . "\n";
    }

    abstract function display_details2();
}

class childclass extends parentclass{
    function __construct($name,$loc,$desig)
    {
        parent::__construct($name,$loc);
        echo " works as " . $desig;
    }

    function display_details2(){
        echo "Employee from development ";
    }

    function __construct1($name)
    {
        echo "name is $name";
    }
}

$obj=new childclass('pallavi','pune','php');
$obj->display_details2();

?>