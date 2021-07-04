<?php

class Student
{
    public $id;
    public $subject;

    public function __construct($id,$subject)
    {
        $this->id =$id;
        $this->subject =$subject;
    }

    public function getDetails()
    {
        echo " student Id =>" . $this->id . "\n";
        echo " student subject =>" . $this->subject;
        echo " student name =>" . $this->name;
    }

}

class Teacher extends Student
{
    public $name;
    function __construct($id,$subject,$name)
    {
    parent::__construct($id,$subject);
    $this->name = $name;
    }
}

$obj=new Teacher(10,'php','pallavi');
echo $obj->getDetails();

?>