<?php

## ******************UseCases of Movie*********************************

//abstract class created-it should contain abstract method as well concrete method
abstract class Movie
{

    public $movieName;

    public function __construct($movieName) //constructor

    {
        $this->movieName = $movieName;
    }
    public function __construct1($movieYear, $language) //constructor overloading

    {
        $this->movieYear = $movieYear;
        $this->language = $language;
    }
    //abstract function created
    abstract public function paymentForTicket($member, $amout);
}

//traits used as multiple inheritance
trait movieDetails
{

    public $movieYear;
    public function __construct($movieName, $movieYear, $language) //constructor
    //overriding done in comedy and holywood class

    {
        parent::__construct($movieName); //call constructor from parent class
        parent::__construct1($movieYear, $language);
    }
    public function displayMovieName() // displayMovieName can be override

    {
        echo " Movie Name is => " . $this->movieName . "\n";
        echo " Movie Year is => " . $this->movieYear . "\n";
        echo " Movie language is => " . $this->language . "\n";
    }
}

final class Comedy extends Movie
{ //final class is there so we can not extend it
    use movieDetails;
    public $member;
    public function paymentForTicket($member, $comAmount)
    { //overloading of payment for ticket method
        $total = $member * $comAmount;
        echo "You are going to book **comedy**  \n";
        echo "Total Payment is -" . $total;
    }
    //static method is there to jus show the superhit movies
    public static function superhitMovie2021()
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
        echo "You are going to book **holywood** movie you need \n\n";
        echo "Total Payment is -" . $total;
    }
}
class InvalidYear extends Exception
{
    public function __construct($errMessage)
    {
        $this->errMessage = $errMessage;
    }
    public function displayError()
    {
        echo " Year should be less than 2021 \n";
    }
}
echo "You are going to store comedy movies details \n";
echo ".................................................\n";
$movieCount = readline('how many movie you want to store');
echo "\nYou are going to store  **comedy**  movies \n";
//create array of object of comedy class
for ($i = 0; $i < $movieCount; $i++) {
    $movieName = readline('Enter movie Name => ');
    $movieYear = readline('Enter movie year => ');
    $language = readline('Enter movie language => ');

    try {
        if ($movieYear > 2021) {
            throw new InvalidYear(" Invalid ");
        }
        $comedyObj[$i] = new Comedy($movieName, $movieYear, $language);
    } catch (InvalidYear $e) {
        echo $e->displayError();
        $movieYear = readline('Enter movie year => ');
        $comedyObj[$i] = new Comedy($movieName, $movieYear, $language);
    } finally {
        echo "You can continue further \n";
    }
}

echo "You are going to store  **Holywood**  movies \n";
//create array of object of holywood class
for ($i = 0; $i < $movieCount; $i++) {
    $movieName = readline('Enter movie Name => ');
    $movieYear = readline('Enter movie year => ');
    $language = readline('Enter movie language => ');

    try {
        if ($movieYear > 2021) {
            throw new InvalidYear(" Invalid ");
        } //try catch and finally  block is used to handle exception
        $holywoodObj[$i] = new holywood($movieName, $movieYear, $language);
    } catch (InvalidYear $e) {
        echo $e->displayError();
        $movieYear = readline('Enter movie year => ');
        $holywoodObj[$i] = new holywood($movieName, $movieYear, $language);
    } finally {
        echo "You can continue further.....\n";
    }

}

//function to search movie
function search($movieCount, $comedyObj, $holywoodObj)
{
//firct we check weather the string is entered or it is null
    function stringNullException($searchMovie)
    {
        if (!$searchMovie) {
            throw new Exception("String is null");
        }
    }

    echo "\n";
    $cnt = 0;
    $searchMovie = readline('Enter movie name to search - ');
    for ($i = 0; $i < $movieCount; $i++) {
        try { //try catch and finally block is used to handle exception

            stringNullException($searchMovie);
        } catch (Exception $e) //catch block catch the error thrown by try
        {
            echo "string should be there \n";
            break;
        }
//check the occurance of movie in comedy
        if ($comedyObj[$i]->movieName == $searchMovie) {
            echo " Movie found in Comedy \n";
            break;
            //check occurance of movie in hollywood
        } else if ($holywoodObj[$i]->movieName == $searchMovie) {
            echo " Movie found in Holywood \n";
            break;
        } else {
            $cnt++;
            //print this if movie not present in both
            echo " Try to find the movie ## wait\n\n";
        }
    }
    echo "\n";
    if ($cnt == $movieCount) {
        echo "Movie not found in Comedy and Holywood \n";
    }
}
//function to search the movie and book tickets

function ticketPayment($movieCount, $comedyObj, $holywoodObj)
{
    $cnt = 0;
    static $comAmount = 100; //ticket amount should be static
    static $holyAmount = 150;
    $member = readline('Enter Total member for booking - ');
    $movieN = readline('Enter movie to book ticket - ');
    echo "\n";
    for ($i = 0; $i < $movieCount; $i++) {
        if ($comedyObj[$i]->movieName == $movieN) {
            $comedyObj1 = new Comedy(' ', 0, ' ');
            //call the abstract method in comedy
            $comedyObj1->paymentForTicket($member, $comAmount);
            break;

        } else if ($holywoodObj[$i]->movieName == $movieN) {
            $holyObj1 = new holywood(' ', 0, ' ');
            //call the abstract method in hollywood
            $holyObj1->paymentForTicket($member, $holyAmount);
            break;

        } else {
            $cnt++;
            echo "Try to find movie ## wait\n\n";
        }
    }
    if ($cnt == $movieCount) {
        echo "Movie not found in Comedy and Holywood \n";
    }
}

//function if you want to edit movie name
function updateMovieName($movieCount, $comedyObj, $holywoodObj)
{
    $cnt = 0;
    $newMovieName = readline('Enter new movie name - ');
    $oldMovieName = readline('Enter movie name which you want to change - ');
    for ($i = 0; $i < $movieCount; $i++) {
        if ($comedyObj[$i]->movieName == $oldMovieName) {
            //check name occurance in comedy class
            $comedyObj[$i]->movieName = $newMovieName;
            echo "Successfully updated!!!!!!!!!!!!! \n";
            echo "Updated movie Name is =>" . $comedyObj[$i]->movieName;
            //check name occurance in hollywood class
        } else if ($holywoodObj[$i]->movieName == $oldMovieName) {
            $holywoodObj[$i]->movieName = $newMovieName;
            echo "Successfully updated!!!!!!!!!!!!!";
        } else {
            $cnt++;
            echo "Try to find movie ## wait\n\n";
        }
    }
    if ($cnt == $movieCount) {
        echo "Movie not found in Comedy and Holywood \n";
    }
}

echo "1]Searching Movie" . "\n" . "2]Booking ticket" . "\n";
echo "3]Update Movie Name " . "\n" . "4]SuperHitMovies" . "\n";

do {
    $choice = readline('Enter the choice-');
    switch ($choice) {
        case 1:echo "***********search movie name***************\n";
            echo search($movieCount, $comedyObj, $holywoodObj);
            break;

        case 2:echo "********************Book ticket and Make payment**********\n";
            echo ticketPayment($movieCount, $comedyObj, $holywoodObj);
            break;

        case 3:echo "*****************Update Movie Name****************\n";
            echo updateMovieName($movieCount, $comedyObj, $holywoodObj);
            break;

        case 4:echo "***************You want to see Superhit movie***************\n";
            $comedy = new Comedy('', 0, '');
            echo $comedy::superhitMovie2021();

        default:echo "*********You successfylly reach to end of program********\n";

    }
    echo "\nIf you want continue \n";
    $value = readline('Enter yes or else no');
} while ($value == 'yes');
