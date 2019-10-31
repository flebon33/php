<?php
    // echo  opendir('repertoire');

    if (is_dir('repertoire')) {
        if ($dh = opendir('repertoire')) {
            while (($file = readdir($dh)) !== false) {
                echo  $file, "<br>";
            }
            closedir($dh);
        }
    }

?>