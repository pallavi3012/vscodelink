<?php
interface name
{
    public function getName();
}
class studentInfo implements name
{
    var $name;

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
}

$var1 = new studentInfo();
$var1->setName("pallavi");
$result = $var1->getName();
echo $result;
