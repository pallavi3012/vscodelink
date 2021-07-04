<?php
exec('which php',$a);
var_dump($a);
class studentInfo{

    var $name;
    function _construct($name)
    {
        $this->name=$name;
    }
    function getName()
    {
        return $this->name;
    }

}

$studentobj=new studentInfo("pallavi");
$studentobj->getName();

?>