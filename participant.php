<?php
 session_start();
//  echo $_SESSION[$login];
//  var_dump($_SESSION);

    // echo  opendir('repertoire');
    if (isset($_SESSION['admin'])) {
        echo $_SESSION['admin'];
        if (is_dir('repertoire')) {
            if ($dh = opendir('repertoire')) {
                while (($file = readdir($dh)) !== false) {
                    echo  $file, "<br>";
                }
                closedir($dh);
            }
        }
    }else{
        // header('Location : http://localhost:8080/login.php');
        echo 'non';
    }
    

?>