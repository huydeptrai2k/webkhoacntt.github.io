<?php
 session_start();
  if(isset($_SESSION['username'])){

    session_destroy();
    header('Location:index.php');
    }
    include("app/includes/header.php");
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <title>Login-Khoa CNTT-TLU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  <div class="auth-content">
        <form action="login-process.php" method="post">

            <h2 class="form-title">Login</h2>
            <div>
                <label>Username</label>
                <input type="text" name="username" id="username" class="text-input">

            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" id="password" class="text-input">

            </div>

            <div>
                <button type="submit" name="login-btn" class="btn btn-success">Login</button>
                <button type="cancel" name="cancel-btn" class="btn btn-success">Cancel</button>
            </div>
            <p>Or <a href="register.php">Sign Up</a></p>
        </form>
    </div>
  <?php
    include("app/includes/footer.php");
 ?>   