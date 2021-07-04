<?php

$student=array(
    "Ram"=>30,
    "Raj"=>40,
    "Sita"=>60,
);
echo "-----------------------------------------\n";
echo "Ram marks is " .  $student['Ram'] . "\n";
echo "-----------------------------------------\n";

foreach($student as $name=>$marks)
{
    echo "$name  marks is $marks \n";
}

echo "-----------------------------------------\n";

$enterName=readline('Enter the name of student - ');
if(array_key_exists($enterName,$student))
{
    echo "$enterName is present and marks is $student[$enterName]";
}
else{
  echo "$enterName is not existed";
}

echo "-----------------------------------------\n";

?>