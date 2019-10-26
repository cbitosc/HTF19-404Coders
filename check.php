<?php $conn = new mysqli("localhost","root","","student");
$id=$_POST["id"];
         $sql = "SELECT * from pass where Rollnum='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color:#0AF3F0;
  font-size:20px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 5px;
  font-size:20px;
}

</style>

<body style="background-color:#afeeee">
	<title>Security Login</title>
	<center>
		<img src="cbit.jpg" alt="CBIT LOGO" width="100" length="100" align="left">
		<h1 style="background-color:DodgerBlue ; font-size:45px; padding:20px; border:10px solid gray; margin :0; width:850px">Chaitanya Bharathi Institute of Technology</h1>
		<hr>
		<div align="right"><a href="">Logout</a></div>
		<h3 style="background-color:#0AF3F0 ; font-size:35px; padding:10px; border:10px solid gray; margin :0; width:400px">Today's Responces</font></h3>
		<br><br>
		<table>
  			<tr>
    			<th>Roll number</th>
    			<th>Approval</th>
    			<th>Time</th>
  			</tr>

  			<tr>
    			<td><?php echo "" . $row["Rollnum"]?></td>
    			<td><?php echo "".$row["Approval"]?></td>
    			<td><?php echo "". $row["Time"]?></td>
  			</tr>

	</center>
</body>
</head>

</html>

 
