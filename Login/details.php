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
<legend style="text-align:center;"><h2>PLANED TRIPS</h2></legend>
<div style="background-color:powderblue;text-align:center">


<?php

$conn = new mysqli("localhost", "root", "" ,"travel");
$dis = "SELECT sno, name, email, phone, message FROM plan_trip";
$result = $conn->query($dis);
if ($result->num_rows > 0) {
	echo "<table>
	<tr>
<th>User ID</th>		
<th>User Name</th>
<th>User Email</th>
<th>Phone No</th>
<th>Trip To</th>
</tr>";
while($row = mysqli_fetch_array($result)) {  
  echo "<tr>";
  echo "<td>" . $row['sno'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "</tr>";

    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();


?>
</div>
</fieldset>
</p>
<p><legend style="text-align:center;"><h2>FeedBack</h2></legend>
<div style="background-color:powderblue;text-align:center">
<?php

$conn = new mysqli("localhost", "root", "" ,"travel");
$dis = "SELECT sno, name, email, subject, message FROM feedback";
$result = $conn->query($dis);
if ($result->num_rows > 0) {
	echo "<table>
	<tr>
<th>User ID</th>		
<th>User Name</th>
<th>User Email</th>
<th>Subject</th>
<th>Messages</th>
</tr>";
while($row = mysqli_fetch_array($result)) {  
  echo "<tr>";
  echo "<td>" . $row['sno'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['subject'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "</tr>";

    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
 ?>
</div>
</fieldset></p>
</body>
</html>