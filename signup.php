<?php
session_start();
include("mya.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Username= $_POST['Username']
    $email= $_POST['email']
    $Password=$_POST['Password']
    $Password2=$_POST['Password2']
    if(!empty($email) && !empty($Password) && !empty($Username){
    $query="insert into form (Username,email, Password, Password2) values ('$Username','$email','$Password','Password2');
   mysqli_query($con,$query);
   echo"<script type="text/javascript"> alert('Successfully Registered')</script>";
   }
   else{
       echo"<script type="text/javascript">alert('Please enter some valid information')</script>";
  }
  }
  ?>
       
       
<!DOCTYPE html>
<html lang="en">0
<head>
  <met charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="treat.css">
</head>

<body>

<div class="container">
        <form id="signup" class="form" method="POST" action="login.html">
          <div class="title"> 
            <h1>Register With Us</h1></div><div class="tilt"></div>
            <div class="expn">
            <div class="form-field">
                <label for="username">Username:</label>
                <input type="text" name="Username" id="username" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="password">Password:</label>
                <input type="password" name="Password" id="password" autocomplete="off">
                <small></small>
            </div>


            <div class="form-field">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="Password2" id="confirm-password" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <input type="submit" id="sub" value="Sign Up">
            </div>
            </div>
        </form>
    </div>
 
  <script src="treat.js"></script>
</body>
</html>
