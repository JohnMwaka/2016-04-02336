<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$con = NEW mysqli("localhost", "root", "", "john");
$query = "SELECT * FROM employ";
$query_data = mysqli_query($con, $query);

echo "<h1><b>Employee's Data</b></h1>";

while ($row = mysqli_fetch_array($query_data, MYSQLI_ASSOC)) {

    $number  = $row['number'];
    $name = $row['name'];
    $department = $row['department'];
    $salary = $row['salary'];
    $location = $row['location'];

    echo $number."  ".$name."   ".$department."   ".$salary."   ".$location."<br>";
    
}
