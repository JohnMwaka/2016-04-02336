<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        
<h1 align="center"><u>Registration Form</u></h1>

<form method="post" action="action.php" autocomplete="on" >
        <div class="container">
    <label>First name:</label>
        <input type="text"
               placeholder="fname" name="fname" pattern="[a-zA-Z]{1,20}" required="" title="Use only letters and it should be less than 20 characters"/>
        <br><br>
    <label>Last name:</label>  
        <input type="text"
               placeholder="sname" name="lname" pattern="[a-zA-Z]{1,20}" required="" title="Use only letters and it should be less than 20 characters"/>
        <br><br>

    <label>Age:</label>
        <input type="number"
            min ="18"
            required=""
            max ="100"
            step="1"
            name="age"/>
        <br><br>
    <label>E-mail:</label>
    <input type="email" required=""
               placeholder="name@domain.com" name="email" title="Enter a valid email address"/><br>
        <br>
    <label>Password:</label>
    <input type="password" required=""
               placeholder="Atleast 8 characters" name="password" pattern="{8,25}" title="Your password should contain 8 to 25 characters"/>
        <br><br>
</div>


        <div class="gender">
            <br>
            <label>SEX::  </label>

            MALE:   <input type="radio" name="sex" value="Male" required=""/>
            FEMALE:  <input type="radio" name="sex" value="Female" required=""/><br><br>


        </div><br>
        <div class="checkbox">
            <label>Checkbox:</label>
            
                <input  type="checkbox" name="check" value="I am a student"/>I am a student:
           
                <input type="checkbox" name="check" value="I am a business man"/> I am a business man:
           
            <br><br>
            
            </div>
        <p>Birthday :</p>
        <div class="birthday">

            <input type="date" name="date" />
        </div><br>
        <div class="submit">
            Submit Button: <input type="submit" name="submit" value="submit"  />

        </div>
        <br>
        <div class="reset">
            Reset Button: <input type="reset" name="Reset" />
        </div>

</form>
        <?php
        // put your code here
        
        ?>
    </body>
</html>
