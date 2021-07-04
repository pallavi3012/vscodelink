<?php

//$string="php is programing language";

//if(preg_match("/^php/",$string,$matches))
//{
  //  print_r($matches);
//}

echo "--------------------------------------------------\n";
#function to check string and pattern
function check_String($inputPattern,$inputString)
{
    if(preg_match("/${inputPattern}/",$inputString))
    {
        echo "$inputPattern == $inputString == Matching Satisfised \n";
    }
    else{
        echo "$inputPattern == $inputString == Matching Not Satisfied \n";
    }
}

# take string input from user
$inputString=readline('Enter the input string - ');
check_String("^php",$inputString);

# ^ for satrt,$ for end
# [] range of character () group of character
check_String("^[a-z](1-5)",$inputString);


echo "-----------------------------------------------------\n";

check_String("[0-9]{10}",$inputString);

echo "-----------------------------------------------------\n";

check_String("[a-z0-9A-Z.]+@+[a-z]*[.][a-z]{2,3}",$inputString);

echo "-----------------------------------------------------\n";

# negation 
check_String("^a[0-9]b",$inputString);
check_String("^a[^0-9]b",$inputString);

echo "-----------------------------------------------------\n";

check_String("a..b",$inputString);
check_String("a.b",$inputString);
check_String("a.*b",$inputString);
check_String("php.*script",$inputString);
check_String("php.+script",$inputString);

echo "-----------------------------------------------------\n";

check_String("^a[0-9]b",$inputString);
check_String("^a\db",$inputString);

check_String("^[a-z0-9A-Z]",$inputString);
check_String("^[\w]",$inputString);

?>