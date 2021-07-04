<?php
class InvalidYear extends Exception{
    public function __construct($errMessage)
    {
        $this->errMessage=$errMessage;
    }
    public function displayError()
    {
        echo " Year should be less than 2021 =>
        ". $this->errMessage . "\n";
    }
   } 

   $movieYear=readline('enter year');
   try{                                                   //try catch and finally  block is used to handle exception
    
    if($movieYear>2021)
         {
         throw new InvalidYear(" Invalid Year");
         }     
    echo "correct";
    }
    
    catch(InvalidYear $e)
    {
    echo $e->displayError();
    }
    finally{
        echo "You can continue further \n";
    }
class sample{
    
    function __construct()
    {
        echo "Constructor overloading \n";
        $args=func_get_args();
        $num_args=func_num_args();
        if($num_args>0)
        {
            $func='__construct' . $num_args;
            if(method_exists($this,$fun=$func))
            {
                call_user_func_array(array($this,$fun),$args);
            }
        }
        
    }

    function __construct1($val1)
    {
        echo "consturctor 1 \n";
        echo "$val1 \n";
    }
    function __construct2($val1,$val2)
    {
        echo "constructor 2\n";
        echo "$val1   $val2 \n";
    }
}



//$obj=new sample();
//$obj=new sample('first');
//$obj=new sample('second');
//$obj=new sample('third','fourth');




?>