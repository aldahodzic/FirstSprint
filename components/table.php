<?php
    $path = "./" . $_GET["path"];
    $my_files = scandir($path);

    foreach($my_files as $file) {
        if("." != $file && ".." != $file) {
            if(is_dir($path . "/" . $file)) {
                print('<tr><td>Directory</td><td><a href="?path='.$path . $file.'">'.$file.'</a></td><td></tr>');
            } if(is_file($path . "/" . $file)) {
                print('<tr><td>File</td><td>'.$file.'</td>
                       <td><button><a class="btn" href="?delete='.$file.'">Delete</a></button>
                       <form style="display: inline-block;" action="?path='.$file.'"method="POST">
                       <input type="submit" name="download" value="Download"/>
                       </form></td></tr>');
            }
        }
    }
?>