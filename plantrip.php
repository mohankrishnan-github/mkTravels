 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$message=$_POST['message'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO plan_trip (name, email, phone, message)
    VALUES ('$name', '$email', '$phno', '$message')";
    // use exec() because no results are returned
    $conn->exec($sql);
	header('Location: index.php');
	exit;
    echo "Booked successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 