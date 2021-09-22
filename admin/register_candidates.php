<?php
require_once '../database/connection.php';
require_once '../main/session.php';
if(isset($_SESSION['login'])){
}else{
	header('location: ../main/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="../css/admin.css">

</head>
<body>
	<?php require_once 'admnav.html'; ?>
	<center>
<div id="myForm">
	<h3>Candidates Registration</h3>
<form method="POST" action="server.php" enctype="multipart/form-data">
<table>
	<tr>
		<td>First Name</td>
		<td>Last Name</td>
	</tr>
	<tr>
		<td><input type="text" name="fname" required id="fname"></td>
		<td><input type="text" name="lname" required id="lname"></td>
	</tr>
	<tr>
		<td>Admission Number</td>
		<td>School</td>
	</tr>
	<tr>
		<td> <input type="text" name="adm" required id="adm"></td>
		<td><select name="sch">
			<option value=""></option>
			<option value="infocoms">INFOCOMS</option>
			<option value="science">SCIENCE</option>
			<option value="education">EDUCATION</option>
			<option value="agriculture">AGRICULTURE</option>
			<option value="business">BUSINESS</option>
			<option value="engineering">ENGINEERING</option>
		</select></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>Profile Photo</td>
	</tr>
	<tr>
		<td>
			<select name="gen">
				<option value=""></option>
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
			</select>
		</td>
		<td><input type="file" name="image" required id="img"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>Password</td>
	</tr>
	<tr>
		<td><input type="Email" name="email" required id="mail" placeholder="joe@gmail.com"></td>
		<td><input type="Password" name="password" required id="pass"></td>
	</tr>
	<tr>
		<td>Post</td>
		<td>Positon</td>
	</tr>
	<tr>
		<td>
			<select name="post">
				<option value="governor">governor</option>
				<option value="school rep">school rep</option>
				<option value="academic rep">academic rep</option>
				<option value="ladies rep">ladies rep</option>
			</select>
		</td>
		<td>
			<select name="position" >
			<option value="school">SCHOOL</option>
			<option value="general">GENERAL</option>	
			</select>

		</td>
	</tr>
	<tr>
		<td><button name="Candidates">REGISTER</button></td>
	</tr>
</table>	

</form>
</div>
</center>
</body>
</html>