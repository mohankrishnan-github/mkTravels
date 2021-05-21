<html>
<head>
<style>
body  {
  background-image: url("img/jk.jpg");
  background-size:cover;
 
}
</style>
</head>
</head>
<body>
<?php
if(isset($_POST["submit"]))
{
$name = $_POST["name"];
$mail = $_POST["email"];
$phone= $_POST["phone"];
$vnmae= $_POST["vname"];
$pdt = $_POST["pdt"];
$ddt= $_POST["ddt"];
$conn=new mysqli("localhost","root","","general");
$sql="Insert into mk (name,mail,phno,vname,pdt,ddt) values ('$name','$mail',$phone,'$vnmae','$pdt','$ddt')";
if ($conn->query($sql) === TRUE) {
    echo "<center>Your booking has been placed!<center>";
} else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

$conn=new mysqli("localhost","root","","general");
$sql= "SELECT name,mail,vname,pdt,ddt FROM mk";
$result = $conn->query($sql);
if($result->num_rows>0) {
	echo "<center><h1>Booking </h1></center>";
    echo "<center><table border=1px solid black;><tr><th>NAME</th><th>MAIL</th><th>Vechicle Name</th><th>Pick up date</th><th>Drop date</th></tr><center>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["mail"]."</td><td> ".$row["vname"]."</td><td>".$row["pdt"]."</td><td>".$row["ddt"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Currently no booking is available!";
}

echo "<h1>To book a vechicle!!!</h1>";

$conn->close();
?>
<div><button type="button"><a href="index.html">Click Here</a></button></div>
<?php
echo "<h1>To cancel the booking:</h1>";
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
Name:<input type="text" name="nme">
<input type="submit" value="submit" name="delete">
</form>
<?php 
if(isset($_POST["delete"]))
{
$us=$_POST["nme"];
$conn=new mysqli("localhost","root","","general");
$s="delete from mk where name='$us'";
if($conn->query($s) === TRUE){
	echo "Deleting the booking record !!!!";
	header("Refresh,0");
} else {
    echo "No booking in name of ",$name;
}$conn->close();
}
?>
<?php
echo "<h1>To updtae the drop date</h1>";
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
Enter the user name to be updtaed:<input type="text" name="ui" align="center"><br>
Enter the mail id to update:<input type="date" name="ml" align="center">
<input type="submit" value="submit" name="update">
</form>
<?php 

if(isset($_POST["update"]))
{
$ui=$_POST["ui"];
$ml=$_POST["ml"];
$conn=new mysqli("localhost","root","","general");
$sl="update mk set ddt='$ml' where  name='$ui'";
if($conn->query($sl) === TRUE){
	echo "Upated the booking record !!!!";
	header("Refresh,0");
} else {
    echo "NO booking in the user name",$ui;
}$conn->close();
}
?>
</body>
</html>