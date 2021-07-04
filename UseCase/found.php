<?php

$movie='comedy.txt';
$searchfor='name';

$content=file_get_contents($movie);
$pattern=preg_quote($searchfor,'/');
$pattern="/^.*$pattern.*$/";
if(preg_match_all($pattern,$content,$matches))
{
    echo "foundmatches";
    echo implode("\n",$matches[0]);
}
else{
    echo "not found";
}


?>