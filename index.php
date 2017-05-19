<?php

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>FORM</title>
        
<style>
    body{
        background-color: blueviolet;

    }
    form{

    }
    .container{
        width: 500px;
        clear: right;
        padding-left: 250px;
        border-radius: 9px;
    }
    .container input{
        width: 200px;
    }
    .container label{
        display: inline-block;
        width:100px;
        text-align: left;
    }

    .gender{
        padding-left: 300px;
        border-radius: 9px;
        display: inline-block;

    }

    .checkbox{
        padding-top: 10px;
        padding-left: 220px;
        display: inline-block;
    }

    h1{
        border-radius: 9px;

    }

    p{
        padding-left: 340px;
    }

    .birthday{
        padding-top: 10px;
        padding-left: 250px;
        display: inline-block;

        border-radius: 9px;
    }
    .submit{
        padding-top: 10px;
        padding-left: 300px;
        display: inline-block;

    }

    .reset{
        padding-top: 10px;
        padding-left: 310px;
        display: inline-block;
        
    }


</style>
    </head>
    <body>
        
<h1 align="center"><u>SEARCH :</u></h1>

<form method="post" action="action_search.php" autocomplete="on" >
        <div class="container">
    <label>Enter User  ID :</label>
    <input type="number"
               placeholder="user ID" name="id" required="" title="Only integers are allowed"/>
        <br><br>
        <button type="submit" name="submit" ><b><i>SEARCH</i></b></button>
        </div>
</form>
    </body>
</html>