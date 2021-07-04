<?Php

/*class sample{

    function __construct()
    {
        $this->name='pallavi';
    }
    function display()
    {
        echo $this->name;
    }
}
$obj=new sample('pallavi');
echo $obj->display();*/
class example
{

    public $name;

    public function __construct()
    {
        $this->name="first";
    }

    public function test1($inputName)
    {
        if(!empty($inputName))
        {
            $this->name=$inputName;
        }
        echo "The name is ".$this->name."\r\n";
    }

}

$ex=new example();
$ex->test1(" "); // prints first.
$ex->test1("Bobby"); // prints Bobby
$ex->test1($_POST["name"]); // works as you expected it to.

?>