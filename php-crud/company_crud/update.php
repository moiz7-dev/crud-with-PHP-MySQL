<?php
require_once('../../session.php');
include_once("connection.php");
$id = $_POST['sid'];
$name = $_POST['username'];
$email = $_POST['emailid'];
$location = $_POST['location'];

$sql = "UPDATE `companydata` SET `name` = '$name', `email` = '$email', `location` = '$location' WHERE `id` = $id";
mysqli_query($conn, $sql) or die('Insert query failed');

header('location: http://localhost/myphp/Login%20system/php-crud/company_crud/index.php');

?>