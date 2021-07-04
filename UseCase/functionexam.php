<?php
$variable=3;
function addfunction($num1,$num2)
{
    $answer=$num1+$num2;
    return $answer;
}
$num1=10;
$num2=20;
while($variable!=0)
{
$result=addfunction($num1-1,$num2-1);
echo "result is <br> $result";
$variable--;
}
?>