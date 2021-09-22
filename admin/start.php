<?php
require_once '../database/connection.php';
$start=$_POST['dday'];
$query="UPDATE `system` SET `dday`='$start' WHERE `id`=1";
$runq=$connection->query($query);
header('location: ./index.php');
$connection->close();
?>