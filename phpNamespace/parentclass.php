<?php

namespace pkg;

class parentclass
{

    public function __construct($name, $loc)
    {
        echo $name . " from " . $loc . "\n";

    }
}

class childclass extends parentclass
{
    public function __construct($name, $loc, $team)
    {
        parent::__construct($name, $loc);
        echo " works in  " . $team . "\n";
    }

    public function details($name, $age)
    {
        echo $name . " age is " . $age . "\n";
    }
}
