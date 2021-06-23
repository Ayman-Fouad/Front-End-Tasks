<?php

    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email == 'test@mail.com' and $password == '123'){
            $_SESSION['email'] = $email;
            header('location:user.php');
        }elseif($email == 'admin@mail.com' and $password == '456'){
            $_SESSION['email'] = $email;
            header('location:admin.php');
        }else{
            header('location:login.php?error=Invalid Email Or Password');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card my-auto shadow" style="width: 16rem">
                <div class="card-header text-center bg-primary text-white">
                    <h2>Login Form</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password"/>
                        </div>
                        <input type="submit" class="btn btn-primary mt-2 w-100" value="Login" name="">
                        <a href="signup.php" class="btn btn-warning mt-2 w-100">Sign Up</a>
                    </form>
                </div>
                <div class="card-footer">
                    <small>&copy; Signature</small>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>