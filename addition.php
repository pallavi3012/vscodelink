<?php

class addition{
    function add($a,$b)
    {
        return $this->a+$this->b;
    }
}

$obj=new addition(4,5);
echo $obj;

?>