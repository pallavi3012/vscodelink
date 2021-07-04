<?php
/*function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// Continue execution
echo "Hello World\n";*/
/*set_error_handler(function () {
    throw new Exception('Ach!');
});
try
{

$result=4/0;
}
catch(Exception $e)
{
    echo " GGGGGGGGGgggg" .PHP_EOL;
    $result=0;
}
restore_error_handler();*/
set_error_handler(function () {
    throw new Exception('Ach!');
});
try {
    $result= 1/0;
} catch(Exception $e){
    echo "got $e" .PHP_EOL;
    $result=0;
}
restore_error_handler();




?>