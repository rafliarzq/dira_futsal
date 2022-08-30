<?php

include "koneksi.php";

error_reporting(1);

session_start();

if(isset ($_SESSION['username'])) {
    header('location: index.php');
}

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";

    $result = mysqli_query($koneksi, $query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['hak_akses'] == '1'){
            #code
            $_SESSION['username'] = $row['username'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
            header('location: welcome.php');
        }elseif($row['hak_akses'] == '9'){
            $_SESSION['username'] = $row['username'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
            header('location: admin/welcome.php');
        } 
    }else{echo "<script>alert('Username atau password salah, silahkan di ulangi')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-9">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Form</title>
    
    <style>
        body{
            font-family:sans-serif;
            background-image: url("./asset/img/b.gif");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kotak_login{
            /* width: 350px;
            background-color:white;
            margin: 80px auto;
            padding: 30px 20px; */
            opacity: 0.9;
            border-radius: 25px;
            background-color:white;
            background-position: left top;
            background-repeat: repeat;
            padding: 200px;
            width: 170px;
            height: 200px;
            font-size: bold;
            margin: 60px auto;
            box-shadow: 2px 2px 5px black;
        }
        .judul{
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
        }
        .input_form{
            box-sizing: border-box;
            width:100%;
            padding:10px;
            font-size:10pt;
            margin-bottom:20px;
            border-radius:5px;
        }
        .tombol_login{
            background-color:lightblue;
            color:blue;
            font-size:11px;
            width:100%;
            border:none;
            border-radius:10px;
            padding:10px 20px;
        }
        .link{
            color:pink;
            text-decoration:none;
            font-size:11pt;
        }
        .text-align{
            text-align: center;
        }
    </style>

</head>

<body>
    <div>
        <h4 style="color: red;"><?= $_SESSION['error'] ?></h4>
    </div>
    
    <div class="kotak_login">
        <p class="judul">DIRA_FUTSAL</p>
        <form action="" method="post">
            <p style="font-size: 2rem; font-weight: 800;">login</p>

            <input class="input_form" type="text" placeholder="Username" name="username" required>
            <br><br>
            <input class="input_form" type="password" placeholder="Password" name="password" required>
            <br><br>
            <button class="tombol-login" name="submit" class="btn">Login</button>

            <p class="text">Anda belum punya akun? <a href="" class="link">Register</a></p>
        </form>
    </div>
</body>

</html>