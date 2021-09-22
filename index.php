<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script src="./js/main.js"></script>
	<script src="./js/jquery.js"></script>
</head>
<body>
<?php require_once "nav.html";?>
<div id="sch">
	<table>
			<?php  
			require './database/connection.php';
			$sql9="SELECT * FROM `system`";
			$runq9=$connection->query($sql9);
			$results9=$runq9->fetch_assoc();
			?>
			<tr>
				<td>Starting Time</td>
				<td><?php echo($results9['stime']); ?></td>
			</tr>
		<tr>
			<td>Current Time</td>
			<td><p id="time"></p></td>
		</tr>
		<tr>
			<td>Stop Time</td>
			<td><?php echo($results9['etime']); ?></td>
		</tr>
	</table>
</div>
<br>
<div class="flebox"> 
	<div id="sch" class="g1">
			<h3>GOVERNORS VOTING PROGRESS</h3>
			<div id="votesCount">

			</div>

	</div>
	<!--
	<div id="chart" class="g2">
	    <iframe src="./main/john.php" height="300px" width="500px"></iframe>
	</div>-->
</div>
<script>
	setInterval(showUpdate,5000);
function showUpdate(){
	//location.assign('http://localhost/htmldocs/index.php');
	$("#votesCount").load("./main/votes.php");
}
setInterval(showtime,1000);
function showtime(){
	let div=document.getElementById('time');
	let thold=Date();
		div.innerHTML=thold;
}
</script>
</body>
</html>