<?php
require_once('../../nav.php');
require_once('../../session.php');
include_once("connection.php");
include("header.php");

if($_GET){
    $id = $_GET['id'];
    $sql = "select * from `companydata` where id=$id";
    $result = mysqli_query($conn, $sql) or die('Query failed');
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="container">
        <form action="update.php" method="post">
  <div class="form-group">
                        <label for="username">Company Name*</label>
                        <input type="hidden" class="form-control" id="sid" value="'.$row['id']. '" name="sid" placeholder="Enter Company" autocomplete="off" required />
                        <input type="text" class="form-control" id="username" value="'.$row['name']. '" name="username" placeholder="Enter Company" autocomplete="off" required />
                    </div>

                    <div class="form-group">
                        <label for="emailid">Email ID*</label>
                        <input type="email" class="form-control" id="emailid" value="' . $row['email'] . '" name="emailid" placeholder="Enter email" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="location">location</label>
                        <input type="text" class="form-control" id="location" value="' . $row['location'] . '" name="location" placeholder="Enter Age" autocomplete="off" required />
                    </div>
  <button type="submit" class="btn btn-primary" value="update">Update</button>
</form>
</div>';
    }
}



