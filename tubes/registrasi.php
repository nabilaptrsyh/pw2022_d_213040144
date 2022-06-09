<?php 
    require 'functions.php';

    if(isset($_POST["register"]) ) {

        if(register($_POST) > 0 ) {
            echo "<script>
                    alert('Enjoy Your Visit, You Are Successfully Registered!');
                    document.location.href = 'login.php';
                    </script>";
        } else {
            echo mysqli_error($conn);
        }
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

    <title>Registration Page</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Registration Page</h1>
    <style>
         @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@100;700&display=swap");
        body {
            background-color:#D0C9C0;
        }
        h1 {
            margin-top: 4%;
        }

        label {
            display: block;
        }
        .form {
            border:1px solid white;
            width:300px;
            border-radius:20px;
            margin-left:530px;
            background-color: #EFEAD8;
            height:500px;
           
        }
    </style>

    <form action="" method="post" class="form">

                <br>
                <label for="username"  style="color:black; font-family:'poppins'; font-weight: bold; ">Username: </label>
                <input type="text" name="username" id="username" required>

                <br><br>
                <label for="email"  style="color:black; font-family:'poppins'; font-weight: bold; ">Email: </label>
                <input type="text" name="email" id="email" required>

                <br><br>
                <label for="nomor_hp"  style="color:black; font-family:'poppins'; font-weight: bold; ">Phone Number: </label>
                <input type="text" name="nomor_hp" id="nomor_hp" required>
                
                <br><br>
                <label for="password"  style="color:black; font-family:'poppins'; font-weight: bold; ">Password: </label>
                <input type="password" name="password" id="password" required>
                
                <br><br>
                <label for="password2"  style="color:black; font-family:'poppins'; font-weight: bold; ">Confirmation Password: </label>
                <input type="password" name="password2" id="password2" required>
                
                <br><br>
                <button type="submit" class="btn btn-primary" name="register">Sign Up</button> | <a href="login.php" class="btn btn-primary">Back to Login</a>
                
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