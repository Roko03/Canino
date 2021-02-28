<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $year = $_POST["year"];
    $gender = $_POST["gender"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $surname, $email, $pwd, $pwdRepeat, $year, $gender) !== false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../index.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../index.php?error=passwordsdontmatch");
        exit();
    }

    createUser($conn, $name, $surname, $email, $pwd, $year, $gender);
} else {
    header("location: ../index.php");
    exit();
}
