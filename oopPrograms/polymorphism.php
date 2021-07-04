<?php
interface bank
{
    function withdraw($ammount);
}
class ICICI implements bank
{
    function withdraw($amount)
    {
        $balance=1000;
        echo "Balance is ::" . $balance . "\n";
        $balance=$balance-$amount;
        echo "the amount after withdraw " . $balance . "\n";
    }
}

class SBI implements bank
{
    function withdraw($amount)
    {
        $balance=2000;
        echo "Balance is ::" . $balance . "\n";
        $balance=$balance-$amount;
        echo "the amount after withdraw " . $balance . "\n";
    }
}
$choice=readline('Enter choice - ');
if($choice==1)
{
$obj=new ICICI();
echo $obj->withdraw(200);
}
else if($choice==2)
{
$obj2=new SBI();
echo $obj2->withdraw(500);
}
else{
    echo "You entered wrong choice.......";
}

?>