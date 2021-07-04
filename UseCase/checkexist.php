<?php

$type=readline('enter -');
$path='/xampp/htdocs/UseCase/.$type.txt';
if(file_exists($path))
{
    echo "yes";
}
else{
 echo "no";
}
?>