<?php
$logout_btn = "";
$sign_btn = '';
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $logout_btn = '
                <li class="nav-item active">
                    <a class="nav-link" href="php-crud\company_crud\index.php">Company CRUD</a>
                </li></ul><a class="nav-link" id="logout" href="\myphp\Login system\logout.php">Hey, ' . $_SESSION["username"] . '.. Logout</a>';
    $sign_btn = '';
} else {
    $sign_btn = '<li class="nav-item asd active">
                    <a class="nav-link" href="\myphp\Login system\sign up.php">Sign Up</a>
                </li>
                <li class="nav-item asd active">
                    <a class="nav-link" href="\myphp\Login system\login.php">Login</a>
                </li>
            </ul>';
}

?>
<!doctype html>
<html lang="en">

<head>
</head>
<style>
    #logout {
        color: whitesmoke;
    }
</style>

<body>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP-CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item asd active">
                    <a class="nav-link" href="http://localhost/myphp/Login%20system/index.php">Home <span class="sr-only">(current)</span></a>
                </li>


                <?php echo $sign_btn ?>

                <?php echo $logout_btn ?>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>