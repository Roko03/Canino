<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#48B872">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sadrzaj.css">
</head>

<body>


    <div class="container">
        <header>
            <div class="menu-mobile">
                <a class="logo" href="">Canino</a>
                <a class="button" onclick="show()"><i class="fas fa-bars"></i></a>
                <div class="side-menu" id="navbar">
                    <ul class="menu">
                        <?php
                        if (isset($_SESSION["useremail"])) {
                            echo "<a href='pocetna.php'>Naslovnica</a>";
                        } else {
                            echo "<a href='index.php'>Naslovnica</a>";
                        }
                        ?>
                        <a href="pronadi.php">Pronađi</a>
                        <a href="info.php">Info</a>
                        <?php
                        if (isset($_SESSION["useremail"])) {
                            echo "<a href='profil.php'>Profil</a>";
                            echo "<a href='includes/logout.inc.php'>Odjava</a>";
                        } else {
                            echo "<a onclick='showpopupmobile()'>Prijava</a>";
                        }
                        ?>
                    </ul>
                    <a class="btn" onclick="hide()"><i class="fas fa-times"></i></a>
                </div>
            </div>
            <div class="menu-desktop">
                <a class="logo" href="">Canino</a>
                <nav>
                    <ul>
                        <?php
                        if (isset($_SESSION["useremail"])) {
                            echo "<li><a href='pocetna.php'>Naslovnica</a></li>";
                        } else {
                            echo "<li><a href='index.php'>Naslovnica</a></li>";
                        }
                        ?>
                        <li><a href="pronadi.php">Pronađi</a></li>
                        <li><a href="info.php">Info</a></li>
                        <?php
                        if (isset($_SESSION["useremail"])) {
                            echo "<li><a href='profil.php'>Profil</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Odjava</a></li>";
                        } else {
                            echo "<li><a class='button' onclick='showpopup()'>Prijava</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
    </div>