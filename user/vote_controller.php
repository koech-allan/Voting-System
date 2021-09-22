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
if (isset($_POST['vote'])) {
	$governor=data($_POST['governor']);
	$school=data($_POST['school']);
	$ladies=data($_POST['ladies']);
	$academics=data($_POST['academic']);

	$sql1="SELECT currentVotes FROM `CANDIDATES` WHERE `userId`='$governor' ";
	$runq1=$connection->query($sql1);
	$result1=$runq1->fetch_assoc();
	$votes=1;
	foreach ($result1 as $key => $value) {
		if ($key='currentVotes') {
			$value=$value+$votes;
			$query1="UPDATE `CANDIDATES` SET `currentVotes`='$value' WHERE `userId`='$governor' ";
			$runquery1=$connection->query($query1);
			if ($runquery1) {
				echo "inserted";
			}else{
				echo "not inserted";
			}
			echo "<br>";
		}


	}
	
	$sql2="SELECT currentVotes FROM `CANDIDATES` WHERE `userId`='$school' ";
	$runq2=$connection->query($sql2);
	$result2=$runq2->fetch_assoc();
		foreach ($result2 as $key => $value) {
		if ($key='currentVotes') {
			$value=$value+$votes;
			$query2="UPDATE `CANDIDATES` SET `currentVotes`='$value' WHERE `userId`='$school' ";
			$runquery2=$connection->query($query2);
			if ($runquery2) {
				echo "inserted";
			}else{
				echo "not inserted";
			}
			//echo($votes+$votes);
			echo "<br>";
		}


	}

	$sql3="SELECT currentVotes FROM `CANDIDATES` WHERE `userId`='$ladies' ";
	$runq3=$connection->query($sql3);
	$result3=$runq3->fetch_assoc();
		foreach ($result3 as $key => $value) {
		if ($key='currentVotes') {
			$value=$value+$votes;
			$query3="UPDATE `CANDIDATES` SET `currentVotes`='$value' WHERE `userId`='$ladies' ";
			$runquery3=$connection->query($query3);
			if ($runquery3) {
				echo "inserted";
			}else{
				echo "not inserted";
			}
			//echo($votes+$votes);
			echo "<br>";
		}


	}

	$sql4="SELECT currentVotes FROM `CANDIDATES` WHERE `userId`='$academics' ";
	$runq4=$connection->query($sql4);
	$result4=$runq4->fetch_assoc();
		foreach ($result4 as $key => $value) {
		if ($key='currentVotes') {
			$value=$value+$votes;
			$query4="UPDATE `CANDIDATES` SET `currentVotes`='$value' WHERE `userId`='$academics' ";
			$runquery4=$connection->query($query4);
			if ($runquery4) {
				echo "inserted";
			}else{
				echo "not inserted";
			}
			//echo($votes+$votes);
			echo "<br>";
		}


	}
header("location: ../main/message.php");
}else{
	header("location: ../index.php");
}
$connection->close();
?>