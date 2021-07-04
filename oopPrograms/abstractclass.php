<?php

abstract class student
{
    protected $id;
    protected $subject;

    public $name;

    protected function details1($id, $subject)
    {
       
        $this->subject = $subject;

    }

    abstract public function getDetails();

}

class Teacher extends Student
{


    public $name;
    public function details($id, $subject, $name)
    {
        Student::details1($id, $subject);
        $this->name = $name;
    }
    public function getDetails()
    {
        echo " student Id =>" . $this->id . "\n";
        echo " student subject =>" . $this->subject . "\n";
        echo " student name =>" . $this->name . "\n";
    }

}

class Principal extends Teacher
{

    public function __construct($id, $subject, $name, $marks)
    {
        Teacher::details($id, $subject, $name);
        $this->marks = $marks;
    }
    public function getDetails()
    {
        echo " student Id =>" . $this->id . "\n";
        echo " student subject =>" . $this->subject . "\n";
        echo " student name =>" . $this->name . "\n";
        echo " student marks =>" . $this->marks . "\n";
    }

}

$obj1 = new Teacher(11, 'java', 'neha');
echo $obj1->getDetails();
$obj = new Principal(10, 'php', 'pallavi', 70);
echo $obj->getDetails();
