
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
                    <form style="padding: 10px;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Account(or User ) Name:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Keep me Logged In.
                            </label>
                        </div>
                        <a href="home.php"><button type="button" class="btn btn-primary">SignIn</button></a>
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

                                    <form style="padding: 10px;">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Middle Name:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last( or Sur) Name:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date of Birth:</label>
                                            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email Address:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mobile Phone Number:</label>
                                            <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Account(or User ) Name">
                                        </div>

                                        <div class="radio">
                                            <label for="exampleInputEmail1"><b>Gender :</b></label>
                                            <label>
                                                <input type="radio"> Male
                                            </label>
                                            <label>
                                                <input type="radio"> Female
                                            </label>
                                            <label>
                                                <input type="radio"> Others

                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Keep me Signed In.
                                            </label>
                                        </div>
                                      

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><b>Close</b></button>
                                    <a href="welcome.php"><button type="button" class="btn btn-primary">SignUp</button></a>
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

