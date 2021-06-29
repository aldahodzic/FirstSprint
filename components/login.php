<?php
    session_start();

    // Login
    $msg = "";
    if(isset($_POST["login"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        if($_POST["username"] == "Rolandas" && $_POST["password"] == "1234") {
            $_SESSION["logged_in"] = true;
            $_SESSION["timeout"] = time();
            $_SESSION["username"] = $_POST["username"];
            header("Location: " . "../index.php");
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <section class="login">
        <div class="container">
            <h4><?php print($msg) ?></h4>
            <form class="login" action="./login.php" method="POST">
                <input type="text" name="username" placeholder="username = Rolandas" required><br>
                <input type="password" name="password" placeholder="password = 1234" required><br>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </section>
</body>
</html>