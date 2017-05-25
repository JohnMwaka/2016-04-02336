
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
        <title>Home page</title>


        <link href="http://localhost/WebAssignment/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://localhost/WebAssignment/bootstrap/css/styles.css" rel="stylesheet">
        <script type="text/javascript" src="http://localhost/WebAssignment/bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://localhost/WebAssignment/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://localhost/WebAssignment/bootstrap/js/f.txt"></script>

        <title>Home Page</title>

    </head>
    <style>
        body{

        }
    </style>
    <body>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active" style="width: 25%;"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><b style="font-size: 20px;">Home</b></a></li>
                <li role="presentation" style="width: 25%;"><a href="#updates" aria-controls="updates" role="tab" data-toggle="tab"><b style="font-size: 20px;">Updates </b></a></li>
                <li role="presentation" style="width: 25%;"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><b style="font-size: 20px;">Messages <span class="badge"><b style="font-size: 20px;">5</b></span></b></a></li>
                <li class="dropdown" style="width: 25%;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="font-size: 20px;">Settings
                            <span class="caret" style=""></span></b></a>
                    <ul class="dropdown-menu" style="width: 100%;">
                        <li><a href="#"><b style="font-size: 20px;">Profile</b></a></li>
                        <li><a href="#"><b style="font-size: 20px;">Notification <span class="badge"><b style="font-size: 20px;">2</b></span></b></a></li>
                        <li><a href="#"><b style="font-size: 20px;">Messages <span class="badge"><b style="font-size: 20px;">5</b></span></b></a></li>
                        <li><a href="#"><b style="font-size: 20px;">Share</b></a></li> 
                        <li><a href="#"><b style="font-size: 20px;">Help</b></a></li>
                        <li><a href="#"><b style="font-size: 20px;">About</b></a></li>
                    </ul>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                
                <div role="tabpanel" class="tab-pane active" id="home" >

                    <div class="col-sm-6">
                        <br>
                        <div class="panel panel-success" style="background-image: url('images/WB.jpg'); background-attachment: fixed;">
                            <div class="panel-body">
                                <p style="color: white; font-size: 15px;"><b>The orld Bank offers 1200 job oppotunities to fit various positions as for that application shall take place between 20th of July to 21st of September otherwise VOID.....</b></p>

                                <button class="btn btn-success btn-sm">READ MORE...</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <br>
                        <div class="panel panel-success">
                            <div class="panel-body">
                                <a href="#"><img src="images/profile-icon.png" style="float: right;" width="200px" height="200px"></a>
                                <p style="color: grey; font-size: 15px;padding: 10px;"><b>You are few steps ahead to complete your Account Profile. Take few minutes of your time and make your profile look GOOD.</b></p>

                                <button class="btn btn-success btn-sm">EDIT PROFILE..</button>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div role="tabpanel" class="tab-pane" id="updates"> <br>
                    <div class="container-fluid">
                        <h2><b>Currently, there are no available updates...</b></h2>
                    </div>
                </div>
                
                <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="col-sm-2">
                        
                    </div>
                    <div class="col-sm-8">
                    <div class="panel panel-success" style="width: 100%;">
                        <div class="panel-body">
                            <p style="color: green; font-size: 15px;"><b>Message From : Simba org</b></p>

                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">READ</button>
                        </div>
                    </div>
                    <div class="panel panel-success" style="width: 100%;">
                        <div class="panel-body">
                            <p style="color: green; font-size: 15px;"><b>Message From : Microsoft Corp.</b></p>

                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">READ</button>
                        </div>
                    </div>
                        
                    <div class="panel panel-success" style="width: 100%;">
                        <div class="panel-body">
                            <p style="color: green; font-size: 15px;"><b>Message From : Cisco corp.</b></p>

                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">READ</button>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><b>Message From :</b></h4>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><b>Close</b></button>
                                            <button type="button" class="btn btn-primary">SEND</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-2">
                        
                    </div>
                </div>
                
                    <div role="tabpanel" class="tab-pane" id="settings">
                        Settings
                    </div>
             
            </div>
    </body>
</html>
