<?php
session_start();
require 'functions.php';

// Cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // Ambil username berdasarkan ID
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // Cek cookie dan username
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }
}

if( isset($_SESSION["login"]) ) {
    header("Location: admin.php");
    exit;
}


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //cek email
    if(mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {

            //cek role admin
            if ($row['role']=="admin") {
                $_SESSION['id_admin'] = $row['id'];
                $_SESSION['role'] = "admin";
                  header("location:admin.php");
            } else if ($row['role'] == "user") {
                $_SESSION['id_user'] = $row['id'];
                $_SESSION['role'] = "user";
                  header("location:user.php");
            }
        }
    }

    $error = true;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Page</title>
    <style>
         @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@100;700&display=swap");
        * {
            text-align: center;
        }

        h1 {
            font-size: 40px;
            text-align: center;
            margin-top: 10%;
            color:white;
        }
        body {
            background-color: #CDC2AE;
            background-size:cover;
        }
        .form {
            border:1px solid white;
            width:300px;
            border-radius:20px;
            margin-left:530px;
            background-color:white;
            height:400px;
            padding-top:20px;
        }
       
    </style>
</head>
<body>
    <h1>Login Page</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">Username or Password Incorrect!</p>
    <?php endif; ?>

            <form action="" method="post" class="form">
                <label for="username" style="color:black; font-family:'poppins'; font-weight: bold; ">Username:</label>
                <br><br>
                <input type="text" name="username" id="username">

                <br><br>
                <label for="password" style="color:black;  font-family:'poppins'; font-weight: bold;">Password:</label>
                <br><br>
                <input type="password" name="password" id="password">

                <br><br>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" style="color:black;  font-family:'poppins'; font-weight: bold;">Remember Me</label>
                <br><br>
                <button type="submit" class="btn btn-light" name="login" >Login</button>

                <br><br>
                <a href="registrasi.php" style="color:blue;  font-family:'poppins'; font-weight: bold;">Don't have an account?</a>
    </form>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
</html>