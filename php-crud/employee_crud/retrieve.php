<?php
require_once('../../session.php');
include_once("connection.php");

$co_id = $_GET['id'];
$company = $_GET['company'];
$sql = "select * from `" . $company . "_emp`";
$result = mysqli_query($conn, $sql) or die('Query failed');
$sno = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $sno += 1;
    $id = $row['id'];
    echo "<tr><th scope='row'>" . $sno . "</th><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td>
        <td>" . $row['age'] . "</td><td>" . $row['gender'] . "</td>
        <td><a href='edit.php?id=$id&company=$company'<button type='submit' class='btn btn-primary btn-sm' style='margin-right:5px;'>Edit</button></a><a href='delete.php?id=$id&company=$company'<button type='button' class='btn btn-danger btn-sm'>Delete</button></a></td></tr>";
}


?>

<script>
    // function deleteData() {
    //     var ask = window.confirm("Are you sure you want to delete this post?");
    //     if (ask) {
    //         window.location.replace("delete.php?id=" + <?= $id; ?> + "&company" + <?= $company; ?> + "");

    //     }
    // }
</script>