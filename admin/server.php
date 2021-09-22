<?php
require_once '../database/connection.php';
require_once '../main/session.php';
function data($var){
	$var=stripslashes($var);
	$var=htmlentities($var);
	$var=trim($var);
	$var=htmlspecialchars($var);
	return $var;
}
if (isset($_POST['user'])) {
	$fname=data($_POST['fname']);
	$lname=data($_POST['lname']);
	$adm=data($_POST['adm']);
	$sch=data($_POST['sch']);
	$gen=data($_POST['gen']);
	$image=$_FILES['image']['name'];
	$email=data($_POST['email']);
	$password=data($_POST['password']);

	$taget_dir="../uploads/";
	$path=$taget_dir.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $path);

	$sql="INSERT INTO `VOTERS` (`userId`,`firstname`,`lastname`,`school`,`gender`,`profilephoto`,`email`,`password`,`status`) 
	VALUES ('$adm','$fname','$lname','$sch','$gen','$image','$email','$password','notVoted')";
	$runq=$connection->query($sql);
		if ($runq) {
		echo "<script>
		alert('successfully Registered');
		</script>";
		echo "<script>
		window.location.assign('./register_user.php');
		</script>";
	}else{
		echo "<script>
			alert('Voter already Registered');

		</script>";
		echo "<script>
		window.location.assign('./register_candidates.php');

		</script>";
	}
}
if (isset($_POST['Candidates'])) {
	$fname=data($_POST['fname']);
	$lname=data($_POST['lname']);
	$adm=data($_POST['adm']);
	$sch=data($_POST['sch']);
	$gen=data($_POST['gen']);
	$image=$_FILES['image']['name'];
	$email=data($_POST['email']);
	$password=data($_POST['password']);
	$post=data($_POST['post']);
	$position=data($_POST['position']);
	$taget_dir="../uploads/";
	$path=$taget_dir.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $path);
	$sql="INSERT INTO `CANDIDATES` (`userId`,`firstname`,`lastname`,`school`,`gender`,`profilephoto`,`email`,`password`,`post`,`position`,`currentVotes`) 
	VALUES ('$adm','$fname','$lname','$sch','$gen','$image','$email','$password','$post','$position',0)";
	$runq=$connection->query($sql);
	//header("location: ./register_user.php");
	if ($runq) {
		echo "<script>
		alert('successfully Registered');
		</script>";
		echo "<script>
		window.location.assign('./register_candidates.php');
		</script>";
	}else{
		echo "<script>
			alert('Candidate already Registered');

		</script>";
		echo "<script>
		window.location.assign('./register_candidates.php');

		</script>";
	}
}
$connection->close();
?>