<?php
    $path = "./" . $_GET["path"];
    if($_GET["delete"]) {
        unlink($path . "/" . $_GET["delete"]);
    }
?>