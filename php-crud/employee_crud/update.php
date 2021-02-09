<?php
require_once('../../session.php');
include_once("connection.php");
$id = $_POST['sid'];
$company = $_POST['scompany'];
$name = $_POST['username'];
$email = $_POST['emailid'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "UPDATE `".$company."_emp` SET `name` = '$name', `email` = '$email', `age` = '$age', `gender` = '$gender' WHERE `id` = $id";
mysqli_query($conn, $sql) or die('Insert query failed');

header("location: http://localhost/myphp/Login%20system/php-crud/employee_crud/index.php?id=$id&company=$company");

?>