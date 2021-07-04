<?php

abstract class Movie
{
    public $movieName;

    public function __construct1($movieName) //constructor

    {
        $this->movieName = $movieName;
        echo " Movie Name is => " . $this->movieName . "\n";
    }
    public function __construct2($movieYear, $language) //constructor overloading

    {
        $this->movieYear = $movieYear;
        echo " Movie Year is => " . $this->movieYear . "\n";
        $this->language = $language;
        echo " Movie language is => " . $this->language . "\n";
    }
    abstract public function paymentForTicket($member, $amout); //abstract function created
}

//traits used as multiple inheritance
trait movieDetails
{
    public $movieYear;
    public function __construct() //constructor overriding done in comedy and holywood class

    {
        $args = func_get_args();
        $num_args = func_num_args();
        if ($num_args > 0) {
            $func = '__construct' . $num_args;
            if (method_exists($this, $fun = $func)) {
                call_user_func_array(array($this, $fun), $args);
            }
        }
    }
    /*function displayMovieName()                         // displayMovieName can be override
{
echo " Movie Name is => " . $this->movieName . "\n";
echo " Movie Year is => " . $this->movieYear . "\n";
echo " Movie language is => " . $this->language . "\n";
} */
}

final class Comedy extends Movie
{ //final class is there so we can not extend it
    use movieDetails;
    public $member;
    public function paymentForTicket($member, $comAmount)
    { //overloading of payment for ticket method
        $total = $member * $comAmount;
        echo "for comedy movie you need to pay 100 for each \n";
        echo "Total Payment is -" . $total;
    }
    public static function superhitMovie2021() //static method is there to jus show the superhit movies

    {
        echo " => Dhamal \n => golmal \n => baghi \n => welcome \n  ";
    }
}
final class holywood extends Movie
{ //final class is there so we can not extend it
    use movieDetails;
    public $member;
    public function paymentForTicket($member, $holyAmount)
    { //overloading
        $total = $member * $holyAmount;
        echo "for comedy movie you need to pay 150 for each\n";
        echo "Total Payment is -" . $total;
    }
}
$comObj = new Comedy('dhamal');
$comObj =
$comObj = new Comedy(2000, 'hindi');

/*class sam{
function display()
{
echo "GGGGGGGGGGGGGG";
}
}
$num=readline('Enter number');
if($num>3)
{
$obj=new sam();
}
if($obj==null)
{
echo "wrong";
}
class movie{
function __construct($movieYear)
{
$this->movieYear=$movieYear;
}
function display(){
echo "movie year is" . $this->movieYear;
}
}

class InvalidYear extends Exception{
public function __construct($errMessage)
{
$this->errMessage=$errMessage;
}
public function displayError()
{
echo " Year should be less than 2021 \n";

}
}
for($i=0;$i<2;$i++)
{
$movieYear=readline('enter');

try{
if($movieYear>2021)
{
throw new InvalidYear(" Invalid ");

}
$obj[$i]=new movie($movieYear);                                           //try catch and finally  block is used to handle exception
//$holywoodObj[$i]=new holywood($movieName,$movieYear,$language);
}

catch(InvalidYear $e)
{
echo $e->displayError();
$movieYear=readline('enter');
$obj[$i]=new movie($movieYear);

}
finally{
echo "You can continue further.....\n";
}
}

for($i=0;$i<2;$i++)
{
echo $obj[$i]->display();
}*/
