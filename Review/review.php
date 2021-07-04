<?php



class sample{
     
    function diiplayMovieName()
    {
        echo "Dhamal " . "\n" .  "Golmal";
    }

    final function getName()
    {
        echo "You are creating final method";
    }
} 
class sample2 extends sample {
    function getName()
    {

    }
}
 
$obj=new sample();
echo $obj->getName();




?>