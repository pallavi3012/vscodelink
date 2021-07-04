<?php
$string="pallavi@gmail.com";
$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/";
echo preg_match($pattern, $string);
?>