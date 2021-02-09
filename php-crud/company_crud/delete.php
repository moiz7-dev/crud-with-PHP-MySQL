<?php
require_once('../../session.php');
include_once("connection.php");
include("header.php");

if ($_GET) {
    $id = $_GET['id'];
    $company = $_GET['company'];
    echo $company;
    $sql = "DELETE FROM `companydata` WHERE id=$id";
    mysqli_query($conn, $sql) or die("Delete query Failed");
    
    $sql1 = "DROP TABLE `$company"."_emp`";
    mysqli_query($conn, $sql1) or die("Delete query Failed");
    
    header('location: http://localhost/myphp/Login%20system/php-crud/company_crud/index.php');
}
?>