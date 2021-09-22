<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
<?php require_once "nav.html"; ?>
<center>
	<div id="lform1">
		<h3>Login To Dashboard</h3>
		<form method="POST" action="server.php" enctype="" id="lform">
			<table>
				<tr>
					<td>Username</td>
				</tr>
				<tr>
					<td>
						<input type="email" name="admin" placeholder="email" id="admin" required>
						<span id="adminerror"></span>
					</td>
				</tr>
				<tr>
					<td>Password</td>
				</tr>
				<tr>
					<td>
						<input type="Password" name="Password" id="Password" required>
						<span id="passerror"></span>
					</td>
				</tr>
				<tr>
					<td>
						<button id="lbtn" name="abtn">Login</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</center>
</body>
</html>