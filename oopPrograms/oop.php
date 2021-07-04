<?php

 class parent{
    static $id;
    function __construct($name)
    {
        $this->name=$name;
    }
}

$obj=new parent($name);
echo $obj;
echo $obj;

?>