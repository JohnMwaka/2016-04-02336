<?php
session_start();

$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['sex'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    
    
    $con = NEW mysqli("localhost", "root", "", "users");
    $query  = "UPDATE users_table SET id='$id',first_name='$first_name',last_name='$last_name',age='$age',email='$email',password='$password',gender='$gender',status='$status',date='$date' WHERE id='$id';";
    $query_data = mysqli_query($con, $query);
    
    
    if($query_data){
        echo "<script>alert('DATA UPDATE SUCCESSFUL')</script>";
        echo "<script>window.open('index.php')</script>";
    } else {
        echo "<script>alert('DATA UPDATE FAILED')</script>";
        echo "<script>window.open('index.php')</script>";
    }
    
}

    