<?php

for($j=0;$j<2;$j++)
{    
$value=readline('enter inedx value-');  
$employee['1'][$j]=$value . "\n";
echo $employee['1'][$j];
}

for($j=0;$j<2;$j++)
{    
$value=readline('enter inedx value-');  
$employee['2'][$j]=$value . "\n";
echo $employee['2'][$j];
}

$search_value=readline('enter inedx value-');  
if(array_search($search_value,$student['1']))
{
 $idx=array_key_exists($search_value,$student['1']);
// echo "Student name is $student['name'][$idx]" . "\n";
 echo "index of $search_value is $idx" . "\n";
 echo "student ID is =>" . $student['1'][$idx] . "\n";
 //echo "student subject is =>" . $student['subject'][$idx] . "\n";
}
else
{
    echo "NOt present";
}

?>
