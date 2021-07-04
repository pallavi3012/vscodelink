<?php
#4.	Get a number ‘n’ from the user. Calculate the factorial of the given number in two different approaches:
//a.	Using recursive function
//b.	Using the loops

#function to calculage factorial of number
function factorialUsingForLoop($number)
{
$fact=1;
for($i=1;$i<=$number;$i++)
{
    $fact=$fact*$i;
}

return $fact;
}

function factorialusingrecursion ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * factorialusingrecursion($n - 1);  
    }  
}  
  

#take input from user

$number=readline('Enter the number =');
echo "----------------------------------------------------------\n";
echo "Factorial using for loop is " .factorialUsingForLoop($number) . "\n";
echo "------------------------------------------------------------\n";
echo "Factorial using recursion is " .factorialusingrecursion($number) . "\n";
echo "-------------------------------------------------------------\n";
?>