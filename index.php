<?php
    if($_SESSION["logged_in"] !== true) {
        // header("Location: ./components/login.php");
    }

    require_once("./components/mkdir.php");
    require_once("./components/delete.php");
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
    <section class="table">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require_once("./components/table.php") ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="bottom">
        <div class="container">
            <form class="form" action="./index.php" method="POST">
                <input type="text" name="newDir" placeholder="New directory">
                <input type="submit" value="Submit">
            </form>
            <a class="logout" href="./index.php?action=logout">Logout</a>
        </div>
    </section>
</body>
</html>