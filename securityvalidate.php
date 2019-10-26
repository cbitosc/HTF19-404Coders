<?php
session_start();
$pin=$_POST["pin"];
if($pin=='2263')
{
echo"<html>";
echo'<form action="check.php" method="post">';
echo'id:<input type="text" name="id">';
echo'<button type="submit">submit</button>';
echo"</form>";
echo"</html>";
}
?>