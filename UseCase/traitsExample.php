<?php

class parentclass{
    public function display_details1($name,$loc)
    {
        echo $name . " from " . $loc . "\n";
    }
}

trait display{
    public function dis()
    {
        echo " Work from development \n";

    }
    public function det()
    {
        echo " " ;
    }
}

trait welcome{
    public function dis()
    {
        echo "  ";
    }
    public function det()
    {
        echo " Work from development \n";

    }
}

class childclass extends parentclass{
    use display,welcome{
       
    }
}

$obj=new parentclass();
echo $obj->display_details1('pallavi','pune');
$obj2=new childclass();
echo $obj2->dis();
echo $obj2->details('neha','mumbai');



?>