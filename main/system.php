<?php
require '../database/connection.php';
function valid()
{
$sql="SELECT * FROM `sytem`";
$runq=$connection->query($sql);
$result=$runq->fetch_assoc();

$stime=$result['stime'];
$etime=$result['etime'];
$ctime=date("h:i:sa");
$cd=date('Y-m-d');
$dd=$result['dday'];
if ($cd==$dd) {
	if ($ctime>=$stime && $ctime<=$etime) {
		//header('location: ../main/server.php');
	}else{
		echo "<script>
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
?>