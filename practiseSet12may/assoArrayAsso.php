<?php

$student=array(
    "name"=>array("Ram","Raj","Sita"),
    "ID"=>array(11,22,33),
    "subject"=>array("php","java","dotnet")
);

$enterName=readline('Enter name');
echo "Name is $enterName" . "\n";

echo var_dump($student['name'][0]);

#chech for the existence of student name in name

echo "-------------------------------------------------\n";

if(array_search($enterName,$student['ID']))
{
 $idx=array_key_exists($enterName,$student['ID']);
// echo "Student name is $student['name'][$idx]" . "\n";
 echo "index of $enterName is $idx" . "\n";
 echo "student ID is =>" . $student['ID'][$idx] . "\n";
 echo "student subject is =>" . $student['subject'][$idx] . "\n";
}
else
{
    echo "NOt present";
}

echo " ---------------------------------------------------\n";



?>