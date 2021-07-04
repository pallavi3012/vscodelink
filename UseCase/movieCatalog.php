<?php

class movieDe{
    function __construct($movie_Name)
    {
        echo "you are going to find" . $movie_Name ;
    }
    
}
trait available{
    public $movie_Name;
    function checkMovieAvailable($movie_Name)
    {
    $movie='comedy.txt';
    $content=file_get_contents($movie);
    $pattern=preg_quote($movie_Name,'/');
    $pattern="/^.*$pattern.*$/i";
    if(preg_match_all($pattern,$content,$matches))
    {
    echo "foundmatches";
    }
    else{
    echo "not found";
    }
    }
} 



class movie_search {
use available;
}
    
    $movie_Name=readline('Enter movie name - ');
    $obj1=new movieDe($movie_Name);
    $obj=new movie_search();
    echo "There are four types movies are available \n";
    echo "1=> Comedy " . "2=>horror ";
    $type=readline('Enter type of movie - ');
    if($type=='comedy')
    {
    if(file_exists('\xampp\htdocs\UseCase\$type'))
    {
        echo $obj->checkMovieAvailable('Dhamal');
    }
    else{
        echo " file does not exit";
    }
}
    else
    {
        echo "does not exit";
    }


?>