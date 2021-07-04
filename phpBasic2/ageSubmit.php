<?php
if(isset($_GET['submit']))
{
    $uname=$_GET['name'];
    $pattern="/([a-z0-9A-Z])$/";
    if(preg_match($pattern,$uname))
    {
        echo "Valid username";
    }
      else 
      {
        echo "Invalid username";
      }
}
?>

<html>
<head><title>cheak Age submit </title></head>
<body>
<form action="" method="GET">
UserName:<input type="text" name="name">
Password:<input type="text" name="pass">
<input type="Submit" name="submit">
</form>
</body>
</html>