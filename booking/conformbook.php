
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$src = $_POST['source'];
$des = $_POST['Des'];
$ad = $_POST['Adult'];
$ch= $_POST['Child'];	
$email = $_POST['email'];
$phone = $_POST['phone'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql ="INSERT INTO book (src,des,ad,ch,email,phone) VALUES ('$src','$des',$ad,$ch,'$email','$phone')";
    // use exec() because no results are returned
    $conn->exec($sql);
	echo '<script>';
  echo 'alert(Booked Successfully)';
  echo '</script>';
	header('Location: home.html');
	exit;
    echo "Booked successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 