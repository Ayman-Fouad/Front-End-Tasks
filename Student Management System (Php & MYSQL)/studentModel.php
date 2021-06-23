<?php

class StudentsModel{
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = 'user';

    public function __construct(){
        try{
            $this->conn = new mysqli($this->server , $this->username , $this->password , $this->dbName);
        }catch(Exception $err){
            echo "Connection Failed " . $err->getMessage();
        }
    }

    public function addStudents(){
        if(isset($_POST['submit'])){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile'])&& isset($_POST['address'])&& isset($_POST['degree'])){
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile'])&& !empty($_POST['address'])&& !empty($_POST['degree'])){
                    $name = mysqli_real_escape_string($this->conn , $_POST['name']);
                    $email = mysqli_real_escape_string($this->conn , $_POST['email']);
                    $mobile = mysqli_real_escape_string($this->conn , $_POST['mobile']);
                    $address = mysqli_real_escape_string($this->conn , $_POST['address']);
                    $degree = mysqli_real_escape_string($this->conn , $_POST['degree']);
                    
                    $query = "INSERT INTO students (name , email , mobile , address , degree) VALUES('$name' , '$email' , '$mobile' , '$address' , '$degree')";
                    if($sql = $this->conn->query($query)){
                        echo "<script> alert('Student Added Successfully'); </script>";
                        echo "<script>window.location.href='admin.php';</script>";
                    }else{
                        echo "<script> alert('Something Wrong!'); </script>";
                        echo "<script>window.location.href='admin.php';</script>";
                    }
                }else{
                    echo "<script> alert('All Inputs Required , Please Fill All Inputs !'); </script>";
                    echo "<script>window.location.href='admin.php';</script>";
                }
            }
        }
    }

    // Add Student
    public function getStudents(){
        $studentsData = null;
        $query = "SELECT * FROM students";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $studentsData[] = $row;
            }
        }
        return $studentsData;
    }

    // Delete Student 
    public function deleteStudent($id){
        $query = "DELETE FROM students WHERE id='$id'";
        if($this->conn->query($query)){
            return true;
        }
        return false;
    }

    // Edit & Update Student
    public function edit($id){
        $data = null;
        $query = "SELECT * FROM students WHERE id='$id'";
        if($sql = $this->conn->query($query)){
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){
        $query = "UPDATE students SET name='$data[name]' , email='$data[email]' , mobile='$data[mobile]' , address='$data[address]', degree='$data[degree]'";
        if($this->conn->query($query)){
            return true;
        }else{
            return false;
        }
    }    
}