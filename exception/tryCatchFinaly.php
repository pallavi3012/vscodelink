<?php

//namespace pkg;

function divide($num1,$num2)
{
    if($num2==0)
    {
        throw new Exception(" Yes ");
    }
    echo "\n" . $result=$num1/$num2;
}

 $result1=2000;

try{
    divide(10,0);
}
catch(Exception $e)
{
    echo "Divide by zero exception ";
}
finally{
    echo "End of the program";
}

function funcexception($rating)
{
    if($rating>5)
    {
        throw new Exception(" invalid");
    }
}
try{
    $rating=readline('Enter rating');
    funcexception($rating);
}
catch(exception $e)
{
    echo "Invalid";
}

?>