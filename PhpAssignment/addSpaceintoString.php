<?php
//3.	Get a string from the user. Separate the strings using ‘ ‘ (space) as 
//the character and print it in the form of an array.

#take input string from user
$inputString=readline('Enter the string =');
//print the output array
print_r(explode(' ',$inputString));




?>