<?php

/*$employee=array(
    1=>array("pall","pune",1000,"php"),
    2=>array(),
    3=>array()
);*/
$i=0;
$j=0;
for($i=1;$i<2;$i++)
{
$id_value=readline('enter id value-');
for($j=0;$j<3;$j++)
{
$value=readline('enter inedx $j value-');   
$employee['$id_value'][$j]=$value;
echo $employee['$id_value'][$j];
}
}

$search=readline('enter value to search');
if(in_array($search,$employee['1']))
{
 $idx=array_key_exists($search,$employee['1']);
// echo "Student name is $student['name'][$idx]" . "\n";
 echo "index of $search is $idx" . "\n";
 echo "student ID is =>" . $employee['1'][$idx] . "\n";
 //echo "student subject is =>" . $student['subject'][$idx] . "\n";
}
else
{
    echo "NOt present";
}

?>