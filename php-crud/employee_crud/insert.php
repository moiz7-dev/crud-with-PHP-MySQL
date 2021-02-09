<?php
include_once("connection.php");

$data = "";
if (isset($_POST['submit'])) {
$company = $_GET['company'];

$id = '';
$name = $_POST['username'];
$email = $_POST['emailid'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "INSERT INTO `$company"."_emp` (`name`, `email`, `age`, `gender`) VALUES ('$name', '$email', '$age', '$gender')";
mysqli_query($conn, $sql) or die('Insert query failed');
}

?>