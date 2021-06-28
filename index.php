<?php
    require_once("./form.php");
    require_once("./login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstSprint</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/reset.css">
</head>
<body>
    <div class="log">
        <h4><?php print($msg) ?></h4>
        <a href="./index.php?action=logout">Logout</a>
    </div>
    <form class="login" action="./index.php" method="POST">
        <input type="text" name="username" placeholder="username = Rolandas" required><br>
        <input type="password" name="password" placeholder="password = 1234" required><br>
        <button type="submit" name="login">Login</button>
    </form>
    <div class="container">
        <p class="top">Type</p>
        <p class="top">Name</p>
        <?php
            require_once("./files.php");
        ?>
    </div>
    <form class="form" action="./index.php" method="POST">
        <input type="text" name="newDir" placeholder="New directory">
        <input type="submit" value="Submit">
    </form>
</body>
</html>