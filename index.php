
<?php
// put your code here
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOgin Page </title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/styles.css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/f.txt"></script>

        <title>Login Page</title>
    </head>
    <style>

        body{
            background-image: url('images/interview.jpg');
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container" style="padding-top: 200px; padding-right: 300px;padding-left: 300px;">
            <div class="panel panel-primary">
                <div class="panel-body" style="">
                    <form style="padding: 10px;" action="login.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Account(or User ) Name:</label>
                            <input type="text" class="form-control" title="Please Enter your user name" id="exampleInputEmail1" required="" placeholder="Account(or User ) Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" title="Please enter your password" required=""id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Keep me Logged In.
                            </label>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">SignIn</button>
                    </form>
                    <br>
                    <p align='center' style="font-size: 20px; "><b>OR <a href="#" data-toggle="modal" data-target="#signUp"><i>Sign Up</i></a></b></p>

                    <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><b>Welcome to Our site.</b></h4>
                                </div>
                                <div class="modal-body">

                                    <form style="padding: 10px;" action="sign_up_action.php" method="post" enctype="form-data/multipart">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name:</label>
                                            <input type="text" required="" class="form-control" name="first_name" pattern="[a-z]{3,20}"id="exampleInputEmail1" title="Your first name should contain at least three (3) letters. (ONLY LETTERS ARE ALLOWED)" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Middle Name:</label>
                                            <input type="text" required=""class="form-control" name="middle_name" pattern="[a-z]{3,20}" id="exampleInputEmail1"title="Your middle name should contain at least three (3) letters. (ONLY LETTERS ARE ALLOWED)" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last( or Sur) Name:</label>
                                            <input type="text" required=""class="form-control" name="last_name" pattern="[a-z]{3,}" id="exampleInputEmail1" title="Your last name should contain at least three (3) letters. (ONLY LETTERS ARE ALLOWED)"placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date of Birth:</label>
                                            <input type="date" required=""class="form-control" title="PLease enter your date of birth."name="birth_date" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email Address:</label>
                                            <input type="email" required=""class="form-control" title="Please Enter your Email address."name="email" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mobile Phone Number:</label>
                                            <input type="text" required=""class="form-control" pattern="[0-9]{10,10}"title="Please enter your mobile number."name="phone_number"id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>

                                        <div class="radio">
                                            <label for="exampleInputEmail1"><b>Gender :</b></label>
                                            <label>
                                                <input type="radio" required=""name="gender"> Male
                                            </label>
                                            <label>
                                                <input type="radio" required=""name="gender"> Female
                                            </label>
                                            <label>
                                                <input type="radio" required=""name="gender"> Others

                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" >Password</label>
                                            <input type="password" required="" title="Please fill your password. Your password should be atleast 8 characters."name="password"class="form-control" pattern="{8,25}"id="exampleInputPassword1" placeholder="Password">
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" title="Please confirm your password. Your confirm password should match the password." required=""class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <a href="#">Privacy Terms and Policies</a><br>
                                                <input type="checkbox" required="" name="checkbox" title="Please check this."> I agree
                                            </label>
                                        </div>
                                      

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><b>Close</b></button>
                                    <button type="submit" name="sign_up" class="btn btn-primary">SignUp</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

