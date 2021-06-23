<?php

require_once('studentModel.php');

$std = new StudentsModel();
$id=$_REQUEST['id'];
$delete = $std->deleteStudent($id);

if($delete){
    echo "<script>alert('Student Deleted Successfully !'); </script>";
    echo "<script> window.location.href='showStudents.php'; </script>";
}