<?php

trait details1
{
    public $id;
    public $name;
    public function Sdetails($name,$id)
    {
        $this->name=$name;
        $this->id=$id;
    }
    public function display1()
    {
        echo "student id is::" . $this->name . "\n";
        echo "student name is::" . $this->id . "\n";
    }
}

trait details2
{
    public $id1;
    public $name1;
    public function tdetails($name1,$id1)
    {
        $this->name1=$name1;
        $this->id1=$id1;
    }
    public function display2()
    {
        echo "teacher id is::" . $this->name1 . "\n";
        echo "teacher name is::" . $this->id1 . "\n";
    }
}

class student{
    use details1;
}

class Teacher
{
    use details2;
}

$obj=new student();
$obj->Sdetails(10,'pallavi');
echo $obj->display1();
echo "------------------------------------------------\n";
$obj1=new teacher();
$obj1->tdetails(11,'neha');
echo $obj1->display2();

?>