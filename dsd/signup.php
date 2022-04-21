<!DOCTYPE html>
<html lang="UTF-8">


<?php
session_start();

include_once("connection.php");

if(isset($_POST['Create-account-button'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  if (empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {

    if (empty($first_name)) {
        echo "<font color='red'>First Name field is empty.</font><br/>";
    }

    if (empty($last_name)) {
        echo "<font color='red'>Last Name field is empty.</font><br/>";
    }

    if (empty($username)) {
      echo "<font color='red'>Username field is empty.</font><br/>";
  }
    if (empty($email)) {
        echo "<font color='red'>Email field is empty.</font><br/>";
    }

    if (empty($password)) {
        echo "<font color='red'>Password field is empty.</font><br/>";
    }
    if (empty($confirm_password)) {
      echo "<font color='red'>Confirm Password field is empty.</font><br/>";
    }
    if(!$password.equal($confirm_password)){
      echo "<font color='red'S>Password does not match.</font><br/>";
    }
} else {
    $query = "INSERT INTO users(first_name,last_name, username, email,password, confirm_password) VALUES('$first_name','$last_name','$username','$email','$password','$confirm_password')";
    $result = mysqli_query($mysqli, $query);
    if ($result == true) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: index.php");
    } else {
        echo "you have a error";
    }
}
}
?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Sign up</title>
  <style>
    body {
      background: white;
    }


    .register {
      color: #28c2eb;
      width: 300px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .register img {
      width: 50%;
    }

    .register input[type="text"],
    .register input[type="password"] {
      border: 0;
      background: none;
      display: block;
      margin: 1px auto;
      text-align: center;
      border: 1px solid #28c2eb;
      padding: 5px 10px;
      width: 200px;
      outline: none;
      border-radius: 25px;
      transition: .50s;
    }

    .register input[type="email"] {
      border: 0;
      background: none;
      display: block;
      margin: 1px auto;
      text-align: center;
      border: 1px solid #28c2eb;
      padding: 5px 10px;
      width: 200px;
      outline: none;
      border-radius: 25px;
      transition: .50s;
    }


    .register input[type="text"]:focus,
    .register input[type="email"]:focus,
    .register input[type="password"]:focus,
    .box input[type="password"] {
      width: 280px;
      border-color: black;
    }

    .register input[type="submit"] {
      border: 0;
      background: none;
      display: block;
      margin: 1px auto;
      text-align: center;
      border: 1px solid black;
      padding: 5px 5px;
      width: 150px;
      outline: none;
      border-radius: 25px;
      transition: 0.30s;
      cursor: pointer;
    }

    .register input[type="submit"]:hover {
      background: #28c2eb;
      color: white;
      border: none;
    }

    .register input[type="submit"]:focus,
    .box input[type="password"] {
      width: 280px;
      border-color: black;
    }

    .register dt {
      color: #28c2eb;
    }
  </style>
</head>

<body>
  <form action="" class="register" method="POST">
    
    <p style="font-size:29px;margin-bottom:29px;">Sign up</p>

    <input type="text" name="first_name" placeholder="Firstname" required><br>
    <input type="text" name="last_name" placeholder="Lastname" required><br>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>

    <input type="submit" name="Create-account-button" value="Create Account"><br>
    <a onclick="location.href = 'login.php';" style="text-decoration: none;color: #28c2eb;">
      Already created account?</a>

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>


</html