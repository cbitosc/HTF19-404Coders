<?php
session_start();
$uname=$_SESSION["uname"];
$conn = new mysqli("localhost","root","","student");
         $sql = "SELECT * FROM `pass` WHERE pass.Branch='$uname'AND pass.Approval<>'yes' AND pass.Approval<>'no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "id: " . $row["Reason"]. " - Name: " . $row["Date"]. " " . $row["Time"]. "<br>";
        echo "<html>";
        $rid=$row["passid"];
            echo"<form action='hodapprove.php' method='post'>";
       echo'<input type="radio" name="request" value="approve">approve';
        echo'<input type="radio" name="request" value="deny">deny';
        //$_SESSION["rid"]=$rid;
        ////echo $rid;
        echo"<input type='submit' name='$rid' value='done'/>";
        echo"</form>";
        echo"</html>";
    }
} else {
    echo "0 results";
}
?>
