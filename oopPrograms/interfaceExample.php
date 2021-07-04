<?php

interface account
{
    public function savingAccount($name, $balance);
    function withdrawAmount($amount);
}

class SBI implements account
{
    public $name;
    public $amount;
    public $balance;
    function savingAccount($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
        echo " SBI saving account created for " . $this->name . "\n";
        echo "SBI saving account balance is  " . $this->balance . "\n";
    }
    function withdrawAmount($amount)
    {
        $this->amount = $amount;
        echo "you want to withdraw " . $this->amount . "\n";
        echo "------------------------------\n";
        $this->amount = $this->balance - $this->amount;
        echo "current account balace is" . $this->amount;
        echo " SBI withdraw successfuly...\n";
        echo "-------------------------------\n";
    }
}

class HDFC implements account
{
    public $name;
    public $amount;
    public $balance;
    public function savingAccount($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
        echo "HDFC saving account created " . $this->name . "\n";
        echo "HDFC saving account balance is  " . $this->balance . "\n";
    }
    public function withdrawAmount($amount)
    {
        $this->amount = $amount;
        echo "you want to withdraw " . $this->amount . "\n";
        echo "------------------------------\n";
        $this->amount = $this->balance - $this->amount;
        echo "current account balace is " . $this->amount;
        echo " HDFC withdraw successfuly...\n";
        echo "-------------------------------\n";
    }
}
echo "you want to do fro which 1:SBI 2:HDFC";
$choice = readline('Enter choice-');
if ($choice == 1) {
    $obj = new SBI();
    echo $obj->savingAccount('pallavi', 3000);
    echo $obj->withdrawAmount(1000);
} else if ($choice == 2) {
    $obj2 = new HDFC('pallavi', 2000);
    echo $obj2->savingAccount('neha', 1000);
    echo $obj2->withdrawAmount(3000);
} else {
    echo "you entered wrong input ....";
}
