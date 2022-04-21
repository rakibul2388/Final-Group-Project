<!DOCTYPE html>
<html lang="UTF-8">

<?php
include_once("connection.php");
session_start();
if(isset($_POST['sign-in-button'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if (empty($password)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }
    } else {
        $query = "SELECT * FROM users WHERE email='$email' and password='$password'";
        $result = mysqli_query($mysqli, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
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

  <title>Login</title>

  <style>
    body {
      background: white;



    }


    .login_area {
      color: black;
      width: 300px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .login_area img {
      width: 50%;
    }

    .login_area input[type="text"],
    .login_area input[type="password"] {
      border: 0;
      background: none;
      display: block;
      margin: 1px auto;
      text-align: center;
      border: 1px solid black;
      padding: 10px 10px;
      width: 200px;
      outline: none;
      border-radius: 25px;
      transition: .50s;
    }




    .login_area input[type="submit"] {
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

    .login_area input[type="submit"]:hover {
      background: black;
      color: white;
      border: none;
    }

  </style>
</head>

<body>
  <form action="" class="login_area" method="post">
    <div style="text-align:center;">
    </div>
    <p style="font-size:29px;margin-bottom:29px;">Sign in</p>
    <input type="text" name="email" placeholder="Email">
    <br><br>
    <input type="password" name="password" placeholder="Password">
    <br><br>
    <input type="submit" name="sign-in-button" value="Sign in"><br>
    <a onclick="location.href = 'signup.php';" style="text-decoration: none;color: black;">
      Don't have an account?Create from here.</a>

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>



</html