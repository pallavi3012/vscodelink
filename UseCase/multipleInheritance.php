<?php

class sample
{
    public function __construct()
    {
        echo "A";
    }
}
class sample2 extends sample
{
    function __construct()
    {
        parent::__construct();
        echo "\n B \n";
        $args=func_get_args();
        $num_args=func_num_args();
        echo "Number of argument passed is $num_args\n";
        foreach($args as $val)
        {
            echo "value => $val";
        }

        if($num_args>0)
        {
            $fname='__construct' . $num_args;
        
            if(method_exists($this,$func=$fname))
            {
            call_user_func_array(array($this,$func),$args);
            }
        }
    }
    function __construct2($s1)
    {
        echo $s1;
    }
    function __construct3($s1,$s2)
    {
        echo $s1 . $s2;
    }

}

$obj2=new sample2();
//$obj2=new childclass();
$obj2=new sample2('p1');
$obj2=new sample2('p1','p2');

?>