<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$hname=$_POST["hname"];
$reason=$_POST['reason'];
$uid=$_POST['uid'];
$date=$_POST['date'];
$time=$_POST['time'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pass (Rollnum,Reason,Date,Time,Branch)
VALUES ('$uid','$reason','$date','$time','$hname')";

if ($conn->query($sql) === TRUE) {
    header('Location:request.html');
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>