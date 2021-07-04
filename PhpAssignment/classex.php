<?php

//class sample{

//}
trait detail1{
    function moviename()
    {
        echo " Traits 1 :dhamal \n";
    }
    function newmovieName()
    {
        echo "Traits 1:welcome \n";
    }

}
trait detail2{
    function newmovieName()
    {
        echo "Traits 2 :bagho \n";
    }
    function moviename()
    {
        echo "Traits 2: golmal\n";
    }

}
class sample2
{
    use detail1,detail2{
        detail1::moviename insteadOf detail2;
        detail2::newmovieName insteadOf detail1;
    }
}

$obj=new sample2;
echo $obj->moviename();
echo $obj->newmovieName();

?>