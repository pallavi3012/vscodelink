<?php
namespace pkg;
interface bank
{
    public function newsavingAccount();
    function withdraw($amount);
}
class HDFC implements bank
{
    function __construct($balance)
    {
        $this->balance = $balance;
    }

    function newsavingAccount()
    {
        return "Saving account balance is =>" . $this->balance . "\n";
    }
    function withdraw($amount)
    {

        $this->balance = $this->balance - $amount;
        return "After withdrawing $amount account balance is $this->balance \n";

    }
}
class ICI implements bank
{
    public function __construct($balance)
    {
        $this->balance = $balance;
    }
    public function newsavingAccount()
    {
        return "Saving account balance is =>" . $this->balance . "\n";
    }
    public function withdraw($amount)
    {
        $this->balance = $this->balance - $amount;
        return "After withdrawing $amount account balance is $this->balance \n";
    }
}

class factory
{
    public function allMethods()
    {
        //echo "1]Check account balance in HDFC" . "\n" . "2]withdraw amount from HDFC Acc" . "\n" . "3]chek acc balance in ICI bank" . "\n" . "4]withrraw amount in ICI \n";

        $cho = readline('enter the choice');
        if ($cho == 1) {
            $obj = new HDFC(1000);
            $output = $obj->newsavingAccount();
            echo $output .= $obj->withdraw(200);
        } else {
            $obj1 = new ICI(2000);
            $output = $obj1->newsavingAccount();
            $output .= $obj1->withdraw(500);
            return $output;

        }
    }
}
class emp
{

}
$factObj = new factory();
echo $factObj->allMethods();
