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

    <section class="form-section">
        <div class="row p-3">
            <div class="col-sm-8 mx-auto">
            <?php

                require_once('studentModel.php');
                $emp = new StudentsModel();
                $emp->addStudents();
                
            ?>
                <form action="" method="post">
                    <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                    <label for="email">Student Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" class="form-control" name="mobile" id="mobile">
                    </div>
                    <div class="form-group">
                    <label for="address">Student Address</label>
                    <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <div class="form-group">
                    <label for="dept">Student Degree</label>
                    <input type="number" class="form-control" id="degree" name="degree">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Add Student" class="mt-2 btn btn-primary btn-md">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="jumbotron text-black conatiner mt-4 p-3 text-center">
        <div>
            <h3>To View All Students </h3><a href="showStudents.php" class="btn btn-outline-secondary">Click Here</a>
        </div>
    </section>
</body>
</html>