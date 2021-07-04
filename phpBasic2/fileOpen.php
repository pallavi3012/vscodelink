<?php

$name=fopen('myfile.txt','r');
//echo fread($name,filesize('myfile.txt'));
//echo fgets($name);
while(!feof($name))
{
    echo fgetc($name);
    echo " ";
}
?>
