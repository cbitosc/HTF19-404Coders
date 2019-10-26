<?php

print_r($_POST);
$arr=array_keys($_POST);
$rid=$arr[1];
$conn = new mysqli("localhost","root","","student");
 if($_POST['request']=='approve')
 {
     $sql = "UPDATE `pass` SET `Approval`='yes' WHERE passid='$rid'";
     $result = $conn->query($sql);
     //echo " request is approved";
     
 }
else{
    $sql = "UPDATE `pass` SET `Approval`=\'no\' WHERE passid='$rid'";
    //echo $conn->error();
    $result = $conn->query($sql);
echo "request is denied";}
header('Location:hodapprove1.php');
?>