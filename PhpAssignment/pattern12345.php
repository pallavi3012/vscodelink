<?php
/*2.	Get a number as an input from the user. Display the below patterns.

If 5 is entered as an input, display the below patterns:

1
2 2
3 3 3
4 4 4 4
5 5 5 5 5

1
1 2
1 2 3
1 2 3 4 
1 2 3 4 5*/
$number=readline('enter the number to find pattern');
echo "Your first pattern is:::::::::::::\n\n";
for($i=1;$i<=$number;$i++)  // first pattern check
{
    for($j=1;$j<=$i;$j++)
    {
        echo " " . $i;
    }
    echo "\n";
    
}
echo "Your second pattern is ::::::::::::::\n\n";
for($i=1;$i<=$number;$i++) //second pattern check
{
    for($j=1;$j<=$i;$j++)
    {
        echo " " . $j;
    }
    echo "\n";
}

?>