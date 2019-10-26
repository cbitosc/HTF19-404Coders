
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$uname=$_POST['uname'];
$pw=$_POST['pw'];
$uid=$_POST['uid'];
$branch=$_POST['branch'];
$year=$_POST['year'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student1 (Name,Password,Rollnum,Branch,Year)
VALUES ('$uname','$pw','$uid','$branch','$year')";

if ($conn->query($sql) === TRUE) {
    header('Location:login.html');
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>