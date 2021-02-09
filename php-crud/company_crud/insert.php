<?php
include_once("connection.php");

$data = "";
if (isset($_POST['submit'])) {
$id = '';
$name = $_POST['coname'];
$email = $_POST['coemail'];
$location = $_POST['colocation'];

$sql = "INSERT INTO `companydata` (`name`, `email`, `location`) VALUES ('$name', '$email', '$location')";
mysqli_query($conn, $sql) or die('Insert query failed');

$sql = "select * from `companydata`";
$result = mysqli_query($conn, $sql) or die('retrieve query failed');
while ($row = mysqli_fetch_assoc($result)) {
$data .= "<tr>
    <th scope='row'>" . $row['id'] . "</th>
    <td>" . $row['name'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['location'] . "</td>
</tr>";
}
}

?>