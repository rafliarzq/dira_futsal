<?php

    session_start();

    if($_SESSION['level'] = "") {
    header('location: index.php');
    }
?>
<a href="./logout.php">LOGOUT</a>
<a href="./form/pendaftar.php">Pendaftar</a>
<a href="./welcome.php">admin</a>