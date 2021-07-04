<?php

$infofile=fopen('myfile.txt','a+');
echo fread($infofile,filesize('myfile.txt'));
$newtxt=" and  ";
$newinfo=fwrite($infofile,$newtxt);
//$infofile1=fopen($newinfo,'r+');
//echo fread($infofile1,filesize('myfile.txt'));

?>