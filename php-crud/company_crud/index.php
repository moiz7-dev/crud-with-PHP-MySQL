<?php
require_once('../../nav.php');
require_once('../../session.php');
include('insert.php');
?>

<!doctype html>
<html lang="en">

<head>
    <?php
    require('header.php');
    ?>
</head>

<body>
    <div class="container mt-5">
        <h1 class="heading">Company CRUD</h1>
        <div class="row">
            <form class="col-sm-5" id="myForm" method="post">
                <div class="container d-flex align-items-start flex-column p-2 mx-1 font-weight-bold col-md-4">
                    <div class="form-group">
                        <label for="coname">Company Name*</label>
                        <input type="text" class="form-control" id="coname" name="coname" placeholder="Enter Company " autocomplete="off" required />
                    </div>

                    <div class="form-group">
                        <label for="coemail">Email ID*</label>
                        <input type="email" class="form-control" id="coemail" name="coemail" placeholder="Enter email" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="colocation">Location</label>
                        <input type="text" class="form-control" id="colocation" name="colocation" placeholder="Enter location" autocomplete="off" />
                    </div>

                    <button type="submit" class="btn btn-primary" id="submitBtn" name="submit">Submit</button>
                </div>
            </form>
            <div class="col-sm-7 text-center tab">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Location</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php require('retrieve.php'); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>