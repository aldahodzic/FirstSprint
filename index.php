<?php
    session_start();

    if($_SESSION["logged_in"] !== true) {
        header("Location: ./components/login.php");
    }

    require_once("./components/mkdir.php");
    require_once("./components/delete.php");
    require_once("./components/upload.php");
    require_once("./components/download.php");
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
            <button type="button" onclick="history.back();">Back</button>
            <form action = "" method="POST" enctype = "multipart/form-data">
                <input type="file" name="image" id="img" style="display:none;">
                <button style="display: block; width: 24%" type="button">
                    <label for="img" style="display: block; width: 100%">Choose file</label>
                </button>
                <button style="display: block; width: 24%" type="submit">Upload file</button>
            </form>
            <form class="form" method="POST">
                <input type="text" name="newDir" placeholder="New directory">
                <input type="submit" value="Submit">
            </form>
            <a class="logout" href="./components/login.php">Logout</a>
        </div>
    </section>
</body>
</html>