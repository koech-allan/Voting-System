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
	<script src="../js/main.js"></script>
</head>
<body id="bd">
<?php require_once 'admnav.html'; ?>
<center>
<div id="fdday">
	<h3>SELECT THE ELECTION DAY</h3>
	<form method="POST" action="start.php">
		<label>Election Date</label>
		<br>
		<input type="date" name="dday" id="dday" required>
		<br>
		<button id="btn">Submit</button>
	</form>
</div>
</center>

</body>
</html>