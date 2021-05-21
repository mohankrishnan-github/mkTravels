 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$name=$_POST['name'];
$pass=$_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT uname, password FROM adminlogin";
$result = $conn->query($sql);
$f=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($row["uname"] == $name && $row["password"] == $pass)
		{
			$f=1;
		}
		else
			$f=0;
    }
} else {
    echo "0 results";
}

if($f == 1)
	echo "Welcome Admin";
$conn->close();

$conn = null;
?>
<html>
<head>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  font-family:Viner Hand ITC;
	color:white;
	text-align:center;
	margin-left:25%;
}

td, th {
  border: 1px solid white;
  text-align: left;
  padding: 8px;
  text-align:center
}
p {
  
  font-family:Viner Hand ITC;
	color:white;
	text-align:center;

}



</style>
</head>
<body>
<p><fieldset>
<legend style="text-align:center;"><h2>Customer Details</h2></legend>
<div style="background-color:powderblue;text-align:center">
<p><?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";


$conn = new mysqli($servername, $username, $password, $dbname);


$dis = "SELECT sno,src,des,ad,ch,email,phone FROM book";
$result = $conn->query($dis);
if ($result->num_rows > 0) {
	echo "<table>
	<tr>
<th>USER ID</th>		
<th>Source</th>
<th>Destination</th>
<th>No of Adult</th>
<th>No of children</th>
<th>Email</th>
<th>Phone</th>
</tr>";
while($row = mysqli_fetch_array($result)) {  
  echo "<tr>";
  echo "<td>" . $row['sno'] . "</td>";
  echo "<td>" . $row['src'] . "</td>";
  echo "<td>" . $row['des'] . "</td>";
  echo "<td>" . $row['ad'] . "</td>";
  echo "<td>" . $row['ch'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "</tr>";

    }
	echo "</table>";
} else {
    echo "0 results";
}
?>
</div></fieldset><p>
</form>
</body>
</html>
