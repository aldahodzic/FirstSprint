<?php
    $my_files = scandir("../FirstSprint");

    foreach($my_files as $file) {
        if("." != $file && ".." != $file) {
            if(is_dir($file)) {
                // TODO implementuoti $_SERVER["REQUEST_URI"] some how;
                // print('<p class="bottom">Directory</p><a class="bottom" href="'.$_SERVER["REQUEST_URI"] . $file.'">'.$file.'</a>');
                print('<p class="bottom">Directory</p><a class="bottom" href="../FirstSprint/'.$file.'">'.$file.'</a>');
            } if(is_file($file)) {
                print('<p class="bottom">File</p><p class="bottom">'.$file.'</p>');
            }
        }
    }
?>