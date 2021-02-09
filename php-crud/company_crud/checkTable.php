<?php
require_once('../../nav.php');
require_once('../../session.php');
include_once("connection.php");
include("header.php");

if($_GET){
    $company = $_GET['company'];    
    $id = $_GET['id'];
    
    $chk = "select 1 from `".$company."_emp` LIMIT 1";
    $val = mysqli_query($conn, $chk);
    

    
    if (!$val) {
        $sql = "CREATE TABLE `userdb`.`$company"."_emp` ( `id` INT(2) NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(30) NOT NULL ,  `email` VARCHAR(30) NOT NULL ,  `age` INT(2) NOT NULL ,  `gender` VARCHAR(20) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;";
        $val = mysqli_query($conn, $sql) or die("Table not created");

        header("location: http://localhost/myphp/Login%20system/php-crud/employee_crud/index.php?id=$id&company=$company");

    } else {
        header("location: http://localhost/myphp/Login%20system/php-crud/employee_crud/index.php?id=$id&company=$company");

    }


    $sql = "select * from `companydata` where id=$id";

}









?>