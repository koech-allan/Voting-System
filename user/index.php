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
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>

	<div id="img">
		<!--<img src="../images/open.gif" id="gif">-->
	</div>
	<div id="vote">
		<?php

		$sql1="SELECT * FROM `VOTERS` WHERE `userId`='$_SESSION[login]'";
		$ranq1=$connection->query($sql1);
		$result=$ranq1->fetch_assoc();
		$uname=strtolower($result['school']);
		$sql2="SELECT * FROM `CANDIDATES` WHERE `school`='$uname'";
		$ranq2=$connection->query($sql2);
		

		$sql3="SELECT * FROM `CANDIDATES` WHERE `position`='general'";
		$ranq3=$connection->query($sql3);
		


		?>
	<form method="POST" action="vote_controller.php" id="sch">

<div id="sch">
	<h2>GENERAL REPRESENTATIVES</h2>
	<h4>Governor Aspirants</h4>
	<table id="ut">
		<thead id="ut">
			<tr id="ut">
				<th id="ut">Photo</th>
				<th id="ut">Full Name</th>
				<th id="ut">Vote</th>
			</tr>
		</thead >
		<tbody id="ut">
			<?php
			while ($result3=$ranq3->fetch_assoc()) {
				$imgurl="../uploads/$result3[profilephoto]";
			?>

<tr id="ut">
	<td id="ut"><img src="<?php echo($imgurl);?> " id="cimg"></td>
	<td id="ut"><?php echo $result3['firstname']." ".$result3['lastname'];  ?></td>
	<td id="ut"><input required id="vbtn" type="radio" name="governor" value="<?php echo($result3['userId']); ?>"></td>
</tr>
		<?php  } ?>
		</tbody>
	</table>


</div>


<div id="sch">
	<h2>SCHOOL REPRESENTATIVES</h2>
	<h4>General School Representatives</h4>
	<table id="ut">
		<thead id="ut">
			<tr id="ut">
				<th id="ut">Photo</th>
				<th id="ut">Full Name</th>
				<th id="ut">Post</th>
				<th id="ut">Vote</th>

			</tr>
		</thead >
		<tbody id="ut">
			<?php
			while ($result1=$ranq2->fetch_assoc()) {
				if ($result1['post']==='school rep'){
				$imgurl="../uploads/$result1[profilephoto]";
			?>

<tr id="ut">
	<td id="ut"><img src="<?php echo($imgurl);?> " id="cimg"></td>
	<td id="ut"><?php echo $result1['firstname']." ".$result1['lastname'];  ?></td>
	<td id="ut"><?php echo $result1['post']; ?></td>
	<td id="ut"><input required id="vbtn" type="radio" name="school" value="<?php echo($result1['userId']); ?>"></td>
</tr>
		<?php  }} ?>
		</tbody>
	</table>


</div>
<div id="sch">
	<h4>Academic  Representatives</h4>
	<table id="ut">
		<thead id="ut">
			<tr id="ut">
				<th id="ut">Photo</th>
				<th id="ut">Full Name</th>
				<th id="ut">Post</th>
				<th id="ut">Vote</th>

			</tr>
		</thead >
		<tbody id="ut">
	<?php
		$sql4="SELECT * FROM `CANDIDATES` WHERE `school`='$uname'";
		$ranq4=$connection->query($sql4); 
	while ($result4=$ranq4->fetch_assoc()) {
				if ($result4['post']==='academic rep'){
				$imgurl="../uploads/$result4[profilephoto]";
	?>
<tr id="ut">
	<td id="ut"><img src="<?php echo($imgurl);?> " id="cimg"></td>
	<td id="ut"><?php echo $result4['firstname']." ".$result4['lastname'];  ?></td>
	<td id="ut"><?php echo $result4['post']; ?></td>
	<td id="ut"><input id="vbtn" type="radio" name="academic" value="<?php echo($result4['userId']); ?>" required></td>
</tr>
		<?php  }} ?>
		</tbody>
	</table>
</div>


<div id="sch">
	<h4>Ladies  Representatives</h4>
	<table id="ut">
		<thead id="ut">
			<tr id="ut">
				<th id="ut">Photo</th>
				<th id="ut">Full Name</th>
				<th id="ut">Post</th>
				<th id="ut">Vote</th>

			</tr>
		</thead >
		<tbody id="ut">
	<?php
		$sql5="SELECT * FROM `CANDIDATES` WHERE `school`='$uname'";
		$ranq5=$connection->query($sql5); 
	while ($result5=$ranq5->fetch_assoc()) {
				if ($result5['post']==='ladies rep'){
				$imgurl="../uploads/$result5[profilephoto]";
	?>
<tr id="ut">
	<td id="ut"><img src="<?php echo($imgurl);?> " id="cimg"></td>
	<td id="ut"><?php echo $result5['firstname']." ".$result5['lastname'];  ?></td>
	<td id="ut"><?php echo $result5['post']; ?></td>
	<td id="ut"><input required id="vbtn" type="radio" name="ladies" value="<?php echo($result5['userId']); ?>"></td>
</tr>
		<?php  }} ?>
		</tbody>
	</table>
</div>
<div id="sch" class="vbtn1">
	<br>
	<button id="vbtn1" name="vote">VOTE</button>
	<br><br>
</div>
	</form>	
	</div>
</body>
</html>
<?php 
session_unset();
$connection->close();
 ?>