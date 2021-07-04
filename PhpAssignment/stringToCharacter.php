<?php
#take input string from user
$inputString=readline('Enter the string =');

#calculate length of input string
$lengthOfString=strlen($inputString);

#function to seperate string into character
function seperateString($inputString,$lengthOfString)
{
for($i=0;$i<$lengthOfString;$i++)
{
    echo $inputString[$i] . " ";
}
}

#call the function
seperateString($inputString,$lengthOfString);

?>