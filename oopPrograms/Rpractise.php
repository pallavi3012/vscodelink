<?php
require 'abstractclass.php';
//use pkg\abc;
class samp1 extends abc {
    public function index(Request $request )
    {

    }
}



class sample {
    function __construct(){
        echo "constructor overloading \n";

        $args=func_get_args();
        $num_args=func_num_args();
        echo "number of argument passed is $num_args";
        foreach($args as $value)
        {
            echo "value is $value";
        }
        if($num_args>0)
        {
            $func= '__construct' . $num_args;
            if(method_exists($this,$fun=$func))
            {
                call_user_func_array(array($this,$fun),$args);
            }
        }
       
    }
    static $num=10;
    static function valid()
    {
        echo self::$num;
        echo "good";
    }
    function __construct1($val1)
    {
        echo $val1 . "\n";
    }
    function __construct2($val1,$val2)
    {
        echo $val1 . "   " . $val2;
    }
    
}
class invalidnum extends Exception{
    function __construct($error)
    {
        $this->error=$error;
    }
    function display(){
        echo "Error is ::" . $this->error;
    }
}

try{
    $num=readline('enter number');
    if($num>6)
    {
        throw new invalidnum("Invalid number");
    }
    else{
        echo "Number is correct \n";
    }
}
catch(invalidnum $num){
    echo $num->display();
}

final class numcheck{
    function __construct()
    {
        echo "Pune \n mumbai \n nashik";     
    }
    function addition()
    {
        echo "addition calculate";
    }
}
class samp extends numcheck
{
    function __construct()
    {
        
    }
}
$objj=new numcheck();
echo $objj->addition();
echo sample::$num;
$ob=new sample();
echo $ob->valid();
$obj=new sample();
$obj=new sample('one');
$obj=new sample('one','two');




?>