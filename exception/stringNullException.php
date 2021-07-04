<?php
function printstring($string)
{
    if(!$string)
    {
        throw new Exception("String null exception");
    }
    return $string;
}
try{
    //echo printstring("pallavi");
    echo printstring('pallavi');
}
catch(Exception $e)
{
    echo "caught exception:", $e->getMessage();
}
?>