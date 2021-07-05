<?php
    $path = "./" . $_GET["path"];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["newDir"]) && !empty($_POST["newDir"])) {
            if(!file_exists($_POST["newDir"])) {
                mkdir($path . "/" . $_POST["newDir"]);
            }
        }
    }
?>