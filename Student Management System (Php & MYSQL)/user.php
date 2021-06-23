<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body>
<header class="container text-center">
        <form action="" method="post">
            <h2>
                <?php
                    session_start();

                    if(empty($_SESSION['email'])){
                        header('login.php');
                    }else{
                        echo "Welcome " . $_SESSION['email'];
                    }

                    if($_SERVER['REQUEST_METHOD'] === "POST"){
                        session_destroy();
                        header('location:login.php');
                    }
                ?>
            </h2>
            <button class="btn btn-outline-secondary"> Logout </button>
        </form>
    </header>
</body>
</html>