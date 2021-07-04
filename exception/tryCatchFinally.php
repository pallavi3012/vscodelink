<?php

function divide($num1,$num2)
{
    if($num2==0)
    {
        throw new Exception(" ");
    }
    echo "\n" . $result=$num1/$num2;
}

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

?>