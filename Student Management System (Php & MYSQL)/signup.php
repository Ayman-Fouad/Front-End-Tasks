<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        session_destroy();
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <header class="container text-center">
            <h2>Please Fill This Form</h2>
    </header>

    <section class="container form-section">
        <div class="row p-3">
            <div class="col-sm-8 mx-auto">
            <?php
                require_once('usersModel.php');
                $emp = new UsersModel();
                $emp->addUsers();
            ?>
                <form action="" method="post">
                    <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                    <label for="mobile">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Sign Up" class="mt-2 btn btn-primary btn-md">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>