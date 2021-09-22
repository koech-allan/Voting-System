<?php
require_once '../database/connection.php';
require_once './session.php';
function valid($connection)
{
$sql1="SELECT * FROM `system`";
$runq1=$connection->query($sql1);
$result1=$runq1->fetch_assoc();

$stime=$result1['stime'];
$etime=$result1['etime'];
$ctime=date("H:i:s");
$cd=date('Y-m-d');
$dd=$result1['dday'];
if ($cd==$dd) {
	if ($ctime>=$stime && $ctime<=$etime) {
	$username=data($_POST['adm']);
	$password=data($_POST['Password']);
	$sql="SELECT * FROM `VOTERS`";
	$runq=$connection->query($sql);
	while (	$result=$runq->fetch_assoc()) {
	if ($result['userId']===$username && $result['password']===$password) {
		$_SESSION['login']=$username;
		header("location: ../user/index.php");
	}else{
		echo "<script>
		alert('invalid login credentials');

		</script>";
		echo "<script>
		window.location.assign('./login.php');

		</script>";
		/*echo($username);
		echo "<br>";
		echo($password);
		echo "<br>";
		print_r($result);*/
	}
	
}	

	}else{
		echo /*$ctime;*/"<script>
			alert('Dear voter, This is not voting time.Please check the calender');
		</script>";
	echo "<script>
window.location.assign('../index.php');
	</script>";
	}
}else{
		echo "<script>
			alert('Dear voter, this is not a voting day. Please check the calender');
		</script>";
	echo "<script>
window.location.assign('../index.php');
	</script>";
}
}
if (isset($_POST['lbtn'])) {
$istrue=valid($connection);
}
function data($var){
	$var=stripslashes($var);
	$var=htmlentities($var);
	$var=trim($var);
	$var=htmlspecialchars($var);
	return $var;
}


if(isset($_POST['abtn'])){
	$username=data($_POST['admin']);
	$password=data($_POST['Password']);
	$sql="SELECT * FROM `admin`";
	$runq=$connection->query($sql);
	$result=$runq->fetch_assoc();
	if ($result['username']===$username && $result['password']===$password) {
		$_SESSION['login']=$username;
		header('location: ../admin/index.php');
	}else{
		echo "<script>
		alert('invalid login credentials');

		</script>";
		echo "<script>
		window.location.assign('./adminl.php');

		</script>";
	}
	
}
$connection->close();

?>