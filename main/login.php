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
		<h3>Login To VOTE</h3>
		<form method="POST" action="server.php" enctype="" id="lform">
			<table>
				<tr>
					<td>Username</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="adm" placeholder="inf/027/2016" id="adm" required>
						<p onclick="showPassword()">show</p>
						<span id="admerror"></span>
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
						<button id="lbtn" name="lbtn">Login</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</center>
</body>
</html>