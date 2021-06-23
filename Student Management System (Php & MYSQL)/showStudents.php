<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <header class="container text-center">
        <h1 class="mx-auto"> Students Informations </h1>
    </header>
    <section class="students-data container">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <table class="table table-bordered table-hovered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                            <th>Degree</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once('studentModel.php');
                            $std = new StudentsModel();
                            $data = $std->getStudents();
                            if(!empty($data)){
                                foreach($data as $info){
                        ?>
                        <tr>
                            <td><?php echo $info['id']; ?></td>
                            <td><?php echo $info['name']; ?> </td>
                            <td><?php echo $info['email']; ?></td>
                            <td><?php echo $info['mobile']; ?></td>
                            <td><?php echo $info['address']; ?> </td>
                            <td><?php echo $info['degree']; ?> </td>
                            <td>
                                <a href="updateStudent.php?id=<?php echo $info['id']; ?>" class="btn btn-success btn-sm">Update</a>
                                <a href="deleteStudent.php?id=<?php echo $info['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                    }else{
                        echo "<div class='alert alert-warning'>No Students Yet To Display</div>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="jumbotron text-black conatiner mt-4 p-3 text-center">
        <div>
            <h3>To Return To Admin Page </h3><a href="admin.php" class="btn btn-outline-secondary">Click Here</a>
        </div>
    </section>

</body>
</html>