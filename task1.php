<html>
<head>
<title>BASIC PHP</title>
<style>
h2,p{
	font-family:Viner Hand ITC;
	color:white;
}
input{
	border-radius:2%;
}
</style>
<div style="background-color:powderblue;margin-left:10%;margin-right:10%;margin-top:10%">
<fieldset>
<legend style="text-align:center;"><h2>Login Form</h2></legend>

<form method="POST" action="task2.php" style="text-align:center;">
<p>USER NAME:<input type="text" name="ne"><br>
PASSWORD:<input type="password" name="pass"><br>
Select Vehicle Type:<select name="vname">
								<option value="" disabled selected hidden>Select Your Car</option>
								<option value="Swift">Swift Dzire</option>
								<option value="Etios">Etios</option>
								<option value="G-class">G-class</option>
								<option value="C">Audi Q6</option>
								<option value="Maserati Levantae">Maserati</option>
								<option value="Audi A8">Audi A8</option>
							</select><br>
				Pickup Location	:		<input  type="text" name="pno" placeholder="Location"><br>
				Drop Location :			<input  type="text" name="dno" placeholder="Location"><br>
				Total Members :					<input  type="number" name="members" placeholder="Total members"><br>
				Name:			    	<input  type="text" name="name" placeholder="Your name"><br>
				Email:			    	<input  type="email" name="email" placeholder="Email address"><br>
				Phone Number:			    	<input  type="tel" name="phone" placeholder="Phone number"><br>										
<input type="submit" value="Conform Booking" name="insert"></p>

</form>

 </fieldset>
</div>
</head>

</html>
