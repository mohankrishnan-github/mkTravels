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
	echo "Welcome";
$conn->close();

$conn = null;
?> 