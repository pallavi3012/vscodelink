<?php

/*$employee=array(
    "emp_is"=>1;
    "emp_name"=>"pallavi";
    "emp_loc"=>"pune";
    "emp_sal"=>"1000";
    "emp_team"=>"php";
);*/

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

echo "\n";

echo "Employee id  is => " . $employee['emp_id'] . "\n";
echo "Employee name is => " . $employee['emp_name'] . "\n";
echo "Employee salary is => " . $employee['emp_sal'] . "\n";
echo "Employee location is => " . $employee['emp_loc'] . "\n";
echo "Employee team name is => " . $employee['emp_team'] . "\n";

/*echo "Following arethe employee details ......\n";
foreach($emp_details as $detail => $empdet)
{
    $infodetails="";
foreach($empdet as $key => $value)
{
    $infodetails .= $key . " is " . $value . "\n";
}
echo " $detail => $infodetails \n";
}*/


?>