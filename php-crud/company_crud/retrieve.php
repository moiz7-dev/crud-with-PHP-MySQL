<?php
require_once('../../session.php');
include_once("connection.php");

$sql = "select * from `companydata`";
$result = mysqli_query($conn, $sql) or die('Query failed');
$sno = 0;
$id = '';
$company = '';
while ($row = mysqli_fetch_assoc($result)) {
    $sno += 1;
    $id = $row['id'];
    $company = $row['name'];
    echo "<tr><th scope='row'>" . $sno . "</th><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td>
        <td>" . $row['location'] . "</td><td style='padding: 8px;'><a href='edit.php?id=$id'<button type='submit' class='btn btn-primary btn-sm' style='margin-right:3px;'>Edit</button></a><a <button type='button' onclick='deleteData()' class='btn btn-danger btn-sm' style='color: white;'>Delete</button></a><a href='checkTable.php?id=$id&company=$company'<button type='submit' class='btn btn-primary btn-sm' style='margin-left:3px;margin-top:3px;'>Show Employees</button></a></td></tr>";
}
$url = "delete.php?id=$id&company=$company";

?>

<script>
    function deleteData() {
        var ask = window.confirm("Are you sure you want to delete this post?");
        if (ask) {
            window.location.replace("<?= $url; ?>");
        }
    }
</script>