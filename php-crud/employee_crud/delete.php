<?php
require_once('../../session.php');
include_once("connection.php");
include("header.php");

if ($_GET) {
    $id = $_GET['id'];
    $company = $_GET['company'];
    $sql = "DELETE FROM `".$company."_emp` WHERE id=$id";
    echo $sql;
    mysqli_query($conn, $sql) or die("Delete query Failed");

    header("location: http://localhost/myphp/Login%20system/php-crud/employee_crud/index.php?id=$id&company=$company");
}
