<?php

$num=5;
$result=($num>8)?"yes":"No";
echo " resllt is \"$result\" ";
echo 'result is $result' . "\n";

echo "___________________________________________\n";
if($num>8):
    echo "1 \n ";
else:
    echo "2 \n";
endif;   

echo "_____________________________________________________\n";

$var_bool=false;
$var_int=4;
$var_string="pallavi";

echo "var_bool having => " . gettype($var_bool) . " datatype \n";
echo "var_int having => " . gettype($var_int) . " datatype \n";
echo "var_string having => " . gettype($var_string) . " datatype \n";

echo "_______________________________________________________________\n";
if(is_int($var_int)):
echo "$var_int is an integer value";
else:
    echo "$var_int is an integer value";
endif;    

echo "___________________________________________________________________\n";
$ip="my name is ";
$ip_arr=explode(' ',$ip); 
print_r($ip_arr);
echo "$ip_arr[0] - $ip_arr[1] - $ip_arr[2] \n";

echo "________________________________________________________________________\n";

#anonymous function => function without name
$movieDetails=function($mName,$myear){
    echo "movie name is $mName and movie year is $myear \n";
};

echo $movieDetails('dhamal',2000);

echo "________________________________________________________________________\n";
#using variable in anonymous function
$num1=10;
$num2=20;
$addition=function() use ($num1,$num2){
    return $num1+$num2 . "\n";
};

echo $addition();

echo "________________________________________________________________________\n";
#complex callable
class movie1{
     public $lang;
    static function name()
    {
        echo "movie name is dhamal \n";
    }
    function year()
    {
        echo "movie year is 2000 \n";
    }
    function language($lang)
    {
        echo "language is $lang \n";
    }
}
movie1::name();
$obj=new movie1;
$obj->year();
$obj->language('hindi');
echo "________________________________________________________________________\n";
#call using another method
$func=array("movie1","name");
$func();

$fun=array(new movie1(),"year");
$fun();

call_user_func_array(array(new movie1,"language"),array('hindi'));
call_user_func_array(array(new movie1,"language"),['hindi']);

echo "________________________________________________________________________\n";

$name=array('one','two','three');
foreach($name as $val)
{
    echo "value => $val \n";
}
echo "________________________________________________________________________\n";
$ref=&$name;
print_r($ref);

array_push($name,'four');
print_r($ref);
print_r($name);

array_push($name,'five');
print_r($ref);
print_r($name);

echo "________________________________________________________________________\n";
$fname='pallavi';
$lname='shinde';
function fullName()
{
    global $fname,$lname;
    echo $fname . $lname;
}
echo fullName();

echo "________________________________________________________________________\n";
$num1=5;
$num2=10;
function add()
{
    return $GLOBALS['num1']+$GLOBALS['num2'];
}
echo add();
echo "________________________________________________________________________\n";

const num=10;
echo "constant number is => " . num;

define("name",['one','two','three']);
print_r(name);
echo "constant array is =>" . name[0];
echo "________________________________________________________________________\n";

$name='pallavi';

function get_ref()
{
    echo $GLOBALS['name'] . "\n";
}
echo "________________________________________________________________________\n";
$new_ref=get_ref();
print($new_ref);

function sum($num1,$num2)
{
    return $num1+$num2 . "\n";
}
echo sum(10,20);
echo "________________________________________________________________________\n";
function addition($num1,$num2) : ?int
{
    if($num1 && $num2):
        return $num1 + $num2;
    else:
        return 1.2;  
    endif;      
}

echo "Addition is =>" . addition(10,30) . "\n";
echo "Addition is =>" . addition('','') . "\n";
echo "________________________________________________________________________\n";

$funct="addition";
echo "addition of two num is =>" . $funct(5,3);
echo "________________________________________________________________________\n";

function newAdd($fun)
{
    echo "Sum is =>". $fun(10,20) . "\n";
}
newAdd("sum");
newAdd("addition");
newAdd($funct);
newAdd($GLOBALS['funct']);


?>