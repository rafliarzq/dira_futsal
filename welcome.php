<?php

session_start();

if($_SESSION['level'] = "") {
    header('location: index.php');
}
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-9">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>

<body>
    <h1>Selamat datang di sekolah </h1>
    <p>Silahkan klik tombol daftar di bawah ini</p>
    <a href="./form/pendaftar.php">Daftar</a>
</body>

</html>
