<?php

class UsersModel{
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

    public function addUsers(){
        if(isset($_POST['submit'])){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
                    $name = mysqli_real_escape_string($this->conn , $_POST['name']);
                    $email = mysqli_real_escape_string($this->conn , $_POST['email']);
                    $password = mysqli_real_escape_string($this->conn , $_POST['password']);
                    
                    $query = "INSERT INTO users (name , email , password) VALUES('$name' , '$email' , '$password')";
                    if($sql = $this->conn->query($query)){
                        echo "<script> alert('User Added Successfully'); </script>";
                        echo "<script>window.location.href='login.php';</script>";
                    }else{
                        echo "<script> alert('Something Wrong!'); </script>";
                        echo "<script>window.location.href='signup.php';</script>";
                    }
                }else{
                    echo "<script> alert('All Inputs Required , Please Fill All Inputs !'); </script>";
                    echo "<script>window.location.href='signup.php';</script>";
                }
            }
        }
    }

    public function getUsers(){
        $usersData = null;
        $query = "SELECT * FROM users";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $usersData[] = $row;
            }
        }
        return $usersData;
    }
}