<?php
require('nav.php');
require('connection.php');
$error_msg = "";
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "select * from `users` where user='$username'";
    $result = mysqli_query($conn, $sql);
    $error_msg = "";

    if (mysqli_num_rows($result) > 0) {
        $error_msg = '<div class="alert alert-danger my-3" role="alert">Username already exist.</div>';
    } else {
        if ($password == $cpassword) {
            $pass_hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user`, `password`) VALUES ('$username', '$pass_hash')";
            $result = mysqli_query($conn, $sql) or die("Query failed");
            header('Location: login.php');
            exit;
        } else {
            $error_msg = '<div class="alert alert-danger my-3" role="alert">Passowrd does not match.</div>';
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Signup form</title>
</head>

<body>
    <div class="container">
        <?php echo ($error_msg); ?>
        <h1>Signup form</h1>
        <form action="sign up.php" method="post">
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" minlength="6" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
                <label for="cpassword">Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary mx-3">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>