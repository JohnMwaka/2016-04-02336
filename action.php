<?php

if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $age = $_POST['age'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['sex'];
    $check = $_POST['check'];
    $date = $_POST['date'];
    
    $con = NEW mysqli("localhost", "root", "", "users");
    $query  = "INSERT INTO users_table VALUES ('','$first_name','$last_name','$age','$email','$password','$gender','$check','$date')";
    $query_data = mysqli_query($con, $query);
    
    if($query_data){
        echo "<script>alert('DATA INPUT SUCCESSFUL')</script>";
        echo "<script>window.open('index.php')</script>";
    } else {
        echo "<script>alert('DATA INPUT FAILED')</script>";
    }
    
    
}

