<?php
    session_start();

    // Login
    $msg = "";
    if(isset($_POST["login"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        if($_POST["username"] == "Rolandas" && $_POST["password"] == "1234") {
            $_SESSION["logged_in"] = true;
            $_SESSION["timeout"] = time();
            $_SESSION["username"] = $_POST["username"];
            $msg = "You are logged in";
        } else {
            $msg = "Wrong user name or password";
        }
    }

    // Logout
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
    }
?>