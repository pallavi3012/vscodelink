<?php
#associative array of employee by taking input from user
echo "Enter employee details ............. \n\n";
$id_value=readline('enter emp id -');    
$employee['emp_id']=$id_value;
$name_value=readline('enter emp Name -');    
$employee['emp_name']=$name_value;
$loc_value=readline('enter emp location -');    
$employee['emp_loc']=$loc_value;
$sal_value=readline('enter emp salary -');    
$employee['emp_sal']=$sal_value;
$team_value=readline('enter emp team name -');    
$employee['emp_team']=$team_value;

echo "---------------------------------------------------------\n";
#associative  array of associative array take value from $employee associative array
echo "employee array copied into another  Associative array  \n";
$emp_details['emp_id']['emp_name']=$name_value;
$emp_details['emp_id']['emp_loc']=$loc_value;
$emp_details['emp_id']['emp_sal']=$sal_value;
$emp_details['emp_id']['emp_team']=$team_value;


#take  empid from user to search 
$eid=readline('Enter the employee id to search information = > ');

#function to display associative array values
function get_employee_id1($eid,$employee)
{
    if(array_key_exists($eid,$employee))
    {
    return $employee['emp_name'] . " from location " . $employee['emp_loc'] . " works in team ". $employee['emp_team'] . " earns RS " . $employee['emp_sal'];
    }
    else{
        echo "not";
    }
}

#function to display associative array of associative  
function get_employee_id2($eid,$emp_details)
{
    if(array_key_exists($eid,$emp_details))
    {
    return $emp_details['emp_id']['emp_name'] . " from location " . $emp_details['emp_id']['emp_loc'] . " works in team " . $emp_details['emp_id']['emp_team'] . " earns Rs " . $emp_details['emp_id']['emp_sal'];
    }
    else{
        echo "not";
    }
}

#call the function to dispalya associative arr information
$details1=get_employee_id1($eid,$employee);
#call the function to dispalya associative arr of associative array information
$details2=get_employee_id2($eid,$emp_details);

echo "--------------------------------------------------\n";
$lengthOfdetails1=strlen($details1);
echo "Length of details 1 is :: " . $lengthOfdetails1 . "\n";

$lengthOfdetails2=strlen($details2);
echo "Length of details 2 is :: " . $lengthOfdetails2 . "\n";

echo "---------------------------------------------------\n";
$text_Array = explode(" ", $details1); // create array of all words in $details
foreach ($text_Array as $newText) // loop through array
{
    if ($newText==$employee['emp_sal']) // if match is found display
    { 
    echo "Salary in the Details1 is::" . $newText . "\n"; 
    break;
    }
}

$text_Array2 = explode(" ", $details2); // create array of all words in $details
foreach ($text_Array2 as $newText2) // loop through array
{
    if ($newText2==$emp_details['emp_id']['emp_sal']) // if match is found display it
    { 
    echo "Salary in the Details2 is::" . $newText2 . "\n"; 
    break;
    }
}
echo "-----------------------------------------------------\n";
$combineString=$details1.$details2;
echo $combineString . "\n";

echo "-------------------------------------------------------\n";
$detailsArray=array(
   "Detail"=>$details1,
    "Details"=>$details2
);

echo "details 1st associative array \n" . $detailsArray['Details'] . "\n";
echo "details 2nd associative array of associative array \n" . $detailsArray['Details'] . "\n";
echo "--------------------------------------------------------\n";


?>