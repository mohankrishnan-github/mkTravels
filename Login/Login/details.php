<html>
<head>
<title>Details</title>
<style>
.flex-container {
  display: flex;
  flex-direction: column;
  background-color: white;
  margin:350px;
}
</style>
</head>

<body style="background-image:url('bg-01.jpg'); background-size:cover;">
<div class="flex-container">
  <div style="margin:50px;margin-left:350px">
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sno, name, email,phone,message FROM plan_trip";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>SNO</th><th>Name</th><th>email</th><th>phone</th><th>message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["sno"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["message"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 
  </div>
</div>

</body>
</html>