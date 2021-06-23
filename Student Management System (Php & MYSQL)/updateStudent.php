<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <header class="container text-center">
        <h1 class="mx-auto"> Update Student </h1>
    </header>
    <section class="form-section">
        <div class="row p-3">
            <div class="col-sm-8 mx-auto">
            <?php
                require_once('studentModel.php');
                $emp = new StudentsModel();
                $id = $_REQUEST['id'];
                $row = $std->edit($id);
                if(isset($_POST['update'])){
                        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])&& isset($_POST['degree'])){
                            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])&& !empty($_POST['degree'])){
                            $row['id'] = $id;
                            $row['name'] = $_POST['name'];
                            $row['email'] = $_POST['email'];
                            $row['mobile'] = $_POST['mobile'];
                            $row['address']=$_POST['address'];
                            $row['degree']=$_POST['degree'];

                            $update = $std->update($row);

                            if($update){
                                echo "<script>alert('Student Info Updated Successfully !');</script>";
                                echo "<script>window.location.href='showStudents.php';</script>";
                            }else{
                                echo "<script>alert('Student Info Update Failed !');</script>";
                                echo "<script>window.location.href='showStudents.php';</script>";
                            }
                        }else{
                            echo "<script>alert('Inputs Required , Please Fill All Inputs !');</script>";
                            header("location:updateStudent.php?id=$id");    
                        }
                    }
                }
            ?>
                <form action="" method="post">
                    <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-group">
                    <label for="email">Student Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" class="form-control" name="mobile" id="mobile" value="<?php echo $row['mobile']; ?>">
                    </div>
                    <div class="form-group">
                    <label for="address">Student Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['address']; ?>">
                    </div>
                    <div class="form-group">
                    <label for="salary">Student Degree</label>
                    <input type="number" class="form-control" name="degree" id="degree" value="<?php echo $row['degree']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" value="Update Student" class="mt-2 btn btn-success btn-md">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>