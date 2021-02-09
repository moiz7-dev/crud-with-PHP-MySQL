<?php
require_once('../../nav.php');
require_once('../../session.php');
include_once("connection.php");
include("header.php");

if($_GET){
    $id = $_GET['id'];
    $company = $_GET['company'];
    $sql = "select * from `".$company."_emp` where id=$id";
    $result = mysqli_query($conn, $sql) or die('Query failed');
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="container">
        <form action="update.php" method="post">
  <div class="form-group">
                        <label for="username">Employee Name*</label>
                        <input type="hidden" class="form-control" id="sid" value='.$company. ' name="scompany" placeholder="Enter Employee" autocomplete="off" required />
                        <input type="hidden" class="form-control" id="sid" value='.$row['id']. ' name="sid" placeholder="Enter Employee" autocomplete="off" required />
                        <input type="text" class="form-control" id="username" value="'.$row['name']. '" name="username" placeholder="Enter Employee" autocomplete="off" required />
                    </div>

                    <div class="form-group">
                        <label for="emailid">Email ID*</label>
                        <input type="email" class="form-control" id="emailid" value="' . $row['email'] . '" name="emailid" placeholder="Enter email" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" value="' . $row['age'] . '" name="age" placeholder="Enter Age" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" value="' . $row['gender'] . '" name="gender" placeholder="Enter Gender" autocomplete="off" required />
                    </div>
  <button type="submit" class="btn btn-primary" value="update">Update</button>
</form>
</div>';
    }
}



