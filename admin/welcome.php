<?php

    session_start();

    if($_SESSION['level'] = "") {
    header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>admin</h1>
    <a href="../logout.php">Logout</a>
    <a href="data_lapangan.php">data lapangan</a>
    <a href="data_pembayaran.php">data pembayaran</a>
</body>
</html>
