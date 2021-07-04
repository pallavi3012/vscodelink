<?php
/*12.	Write the script to input the string from the user and validate whether the string is any one of following:
a.	Mobile Number
b.	PAN Card Number
c.	Aadhar Card Number
d.	Credit Card Number
e.	An email*/

# function to chech input string and pattern
function check_String($inputPattern,$inputString)
{
    if(preg_match("/{$inputPattern}$/",$inputString)) //condition matches the input and output string
    {
        return true;
    }
    else{
        return false;
    }
}

$inputString=readline('Enter the input string - ');
$lengthOfString=strlen($inputString);
if(check_String("^[0-9]{10}",$inputString)) //mobile number is 10 digit
{
    echo " String is MOBILE number";
}
else if(check_String("^[A-Z]{5}[0-9]{4}[A-Z]{1}",$inputString))//pan card number contains first 5 Capital letter
{                                                             //+4 digits+ 1 Capital letter
    echo "String is PAN CARD number";
}
else if(check_String("^[2-9]{1}[0-9]{3}\\s[0-9]{4}\\s[0-9]{4}",$inputString))//adhar  number is only 12 digit
{
    echo "String is ADHAR  number";
}
else if(check_String("^4[0-9]{12}(?:[0-9]{3})?",$inputString))//credit card number conatins 15 or 16 digits only
{
    echo "String is CREDIT CARD NUMBER number";
}
else if(check_String("[a-z0-9A-Z.]+@+[a-z]*[.][a-z]{2,3}",$inputString))//mail Id having Alphanumeric+@+alphabets+.+alphabets
{
    echo "String is mail ID";
}
else{
    echo "You entered wrong string................";//when not following any condition 
}


?>