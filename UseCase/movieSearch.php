<?php

$type=readline('enter -');
if($type=='comedy')
{
if(file_exists('/xampp/htdocs/UseCase/comedy.txt'))
{
    echo "yes";
}

else{
 echo "no";
}
}
else{
    echo "no no";
}
?>