<?php
session_start();

if(isset($_POST['submit'])){
    
    $user_id = $_POST['id'];
    $_SESSION['id'] = $_POST['id'];
          
    $con = NEW mysqli("localhost", "root", "", "users");
    $query  = "SELECT * FROM users_table WHERE id = '$user_id'";
    $query_data = mysqli_query($con, $query);
    
    if($query_data){
        echo "<script>alert('SEARCH SUCCESSFUL')</script>";
        echo "<script>window.open('edit.php')</script>";
    } else {
        echo "<script>alert('DATA INPUT FAILED')</script>";
        echo "<script>window.open('index.php')</script>";
    }
    
    
}

