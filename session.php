<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['username'])) {
header('Location: http://localhost/myphp/Login%20system/login.php');
exit;
}

?>