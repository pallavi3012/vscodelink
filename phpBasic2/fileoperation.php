<?php

$name=$_GET['name'];
if(!empty($name))
{
    $read=file('list.txt');
    foreach($read as $newread)
     echo $newread;
}
else{
    echo "file is empty:";
}

?>

<html>
<head><title>fiel inpit output operation</title>
</head>
<body>
<form action="" method="GET">
Name:<input type="text" name="Name">
Submit:<input type="submit" name="submit">
</form>
</body>
</html>