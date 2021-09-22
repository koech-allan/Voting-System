<?php
require_once '../database/connection.php';
session_start();
session_unset();
header("location: ../index.php")

?>