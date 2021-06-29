<?php
    $path = "./" . $_GET["path"];
    $my_files = scandir($path);

    foreach($my_files as $file) {
        if("." != $file && ".." != $file) {
            if(is_dir($path . "/" . $file)) {
                print('<tr><td>Directory</td><td><a href="?path='.$path . $file.'">'.$file.'</a></td><td></tr>');
            } if(is_file($path . "/" . $file)) {
                print('<tr><td>File</td><td>'.$file.'</td><td><a href="?delete='.$file.'">Delete</a></td></tr>');
            }
        }
    }
?>