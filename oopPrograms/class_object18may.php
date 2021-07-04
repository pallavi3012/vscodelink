<?php

class Parent1{
    public $id;
    public $name;
    public $salary;

    function __construct($id,$name,$salary)
    {
        $this->id=$id;
        $this->name=$name;
        $this->salary=$salary;

    }

    function __toString()
    {
        return $this->name . " having employee id " . $this->id . " earns Rs" . $this->salary . "\n";
    }

    function getDetails()
    {
        echo "employee name is " . $this->name;
    }
}

class child1 extends parent1{
    function __construct($id,$name,$salary,$team)
    {
        parent::__construct($id,$name,$salary);
        $this->team=$team;
    }
}
echo "parent class details......";
$obj=new Parent1(10,'pallavi',10000);
echo $obj;
echo "child class details.......";
$obj2=new child1(11,'neha',2000,'php');
echo $obj2;
echo "display the details by assessing parent class method";
echo $obj2->getDetails();
echo $obj->id;

?>