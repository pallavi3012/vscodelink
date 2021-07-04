<?php
#Consider the below columns of table ‘employee’ for Questions (5 to 11):
//Note: Q5 to Q11 should be done in single “php” script.
//emp_id	emp_name	emp_loc	emp_sal	emp_team

#take user input from user to insert in associative array
for($i=1;$i<3;$i++)
{
    $id_value=readline('Enter value emp id -');
    $employee['emp_id'][$i]=$id_value;
    $name_value=readline('Enter value emp name -');
    $employee['emp_name'][$i]=$name_value;
    $name_value=readline('Enter value emp location -');
    $employee['emp_loc'][$i]=$name_value;
    $name_value=readline('Enter value emp salary -');
    $employee['emp_sal'][$i]=$name_value;
    $name_value=readline('Enter value emp team name -');
    $employee['emp_team'][$i]=$name_value;
    
    
}
#store array input into the associative array of associative array
$emp_details=array(
    $employee['emp_id'][1]=>array(
        'emp_name'=>$employee['emp_name'][1],
        'emp_loc'=>$employee['emp_loc'][1],
        'emp_sal'=>$employee['emp_sal'][1],
        'emp_team'=>$employee['emp_team'][1]
    ),
    $employee['emp_id'][2]=>array(
        'emp_name'=>$employee['emp_name'][2],
        'emp_loc'=>$employee['emp_loc'][2],
        'emp_sal'=>$employee['emp_sal'][2],
        'emp_team'=>$employee['emp_team'][2]
    )
    );
#display the array values
foreach($emp_details as $eid => $det)
{
    $details="";
    foreach($det as $key => $value)
    {
        $details .= $key . " is " . $value . "\n";
    }
    echo "$eid => $details";
}

#take  empid from user to search 
$eid=readline('Enter the employee id to search first information = > ');
$eid1=readline('Enter the employee id to search second information = > ');

#function to display associative array values as given formate
function get_employee_id1($eid,$employee)
{
    if(array_search($eid,$employee['emp_id']))
    {
        $idx=array_search($eid,$employee['emp_id']);
       return  $employee['emp_name'][$idx] . " from location " . $employee['emp_loc'][$idx] . " works in team ". $employee['emp_team'][$idx] . " earns RS " . $employee['emp_sal'][$idx];
    }
    else{
        echo "Employee id is not present in array";
    }
}

#function to display associative array of associative as given formate
function get_employee_id2($eid1,$emp_details)
{
    if(array_key_exists($eid1,$emp_details))
    {
    return $emp_details[$eid1]['emp_name'] . " from location " . $emp_details[$eid1]['emp_loc'] . " works in team " . $emp_details[$eid1]['emp_team'] . " earns Rs " . $emp_details[$eid1]['emp_sal'];
    }
    else{
        echo "Employee id is not present in array";
    }
}
#call the function to dispalya associative arr information
$details1=get_employee_id1($eid,$employee);
#call the function to dispalya associative array of associative array information
$details2=get_employee_id2($eid1,$emp_details);

echo "--------------------------------------------------\n";
$lengthOfdetails1=strlen($details1);      //calculate the length of details1
echo "Length of details 1 is :: " . $lengthOfdetails1 . "\n";

$lengthOfdetails2=strlen($details2);      //calculate the length of details2
echo "Length of details 2 is :: " . $lengthOfdetails2 . "\n";

echo "---------------------------------------------------\n";

#below code display the salary in first information
$text_Array = explode(" ", $details1); // create array of all words in $details1
foreach ($text_Array as $newText) // loop through array
{
    if(array_search($eid,$employee['emp_id']))
    {
    $idx=array_search($eid,$employee['emp_id']);
    if ($newText==$employee['emp_sal'][$idx]) // if match is found display
    { 
    echo "Salary in the Details1 is::" . $newText . "\n"; 
    break;
    }
}
}

#below code display salary in second information
$text_Array2 = explode(" ", $details2); // create array of all words in $details2
foreach ($text_Array2 as $newText2) // loop through array
{
    if ($newText2==$emp_details[$eid1]['emp_sal']) // if match is found display it
    { 
    echo "Salary in the Details2 is::" . $newText2 . "\n"; 
    break;
    }
}

echo "-----------------------------------------------------\n";
$combineString=$details1.$details2;  //concatinatethe details1 and details2
echo $combineString . "\n";

echo "-------------------------------------------------------\n";
$detailsArray=array(                  //store details1 and details2 in associative array
   "Detail"=>$details1,
    "Details"=>$details2
);

echo "details 1st associative array \n" . $detailsArray['Details'] . "\n";       //display that associative array
echo "details 2nd associative array of associative array \n" . $detailsArray['Details'] . "\n";
echo "--------------------------------------------------------\n";


?>