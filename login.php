<?php
require_once "./connection.php";

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['user_login'];
    $password = $_POST['user_password'];
    $sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($con,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
    echo 'success';
    }else{
    echo 'failure';
    }
    }

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
</head>

<body>
  <div class="container">
    <h1 style="text-align:center; border: solid black 2px; width:100%;">User Login</h1>
    <form action="login.php" method="POST">
    <label for="user_login">Email or Username:</label>
    <input type="text" id="user_login" name="user_login" required><br><br>
    <label for="lname">Password:</label>
    <input type="password" id="user_password" name="user_password" required><br><br>
    <input type="submit" id="submit" value="Submit">
  </form>

  </div>
</body>

</html>