<?php

//1.	Input a string from the user. Check whether the inputted string is palindrome or not.
  //function to check string is palindrome or not  
 function check_palindrome($inputString)
 {
    //calculate length of string
    $lenngthOfString=strlen($inputString);

     $flag=0;
    for($i=0;$i<$lenngthOfString;$i++)
    {
        if($inputString[$i]!=$inputString[$lenngthOfString-$i-1])
        {
            $flag=1;
            break;
        }
    }

    if ($flag==1)
    {
        echo "\n";
        echo "String is not palindrome....";
    }
    else
    {
        echo "\n";
        echo "String is palindrome ....";
    }

} 

    //take the string from user
    $inputString=readline('Enter the string =');
    echo "Your input string is :: $inputString";
    #call the function to check string palindrome
    check_palindrome($inputString);
 

?>