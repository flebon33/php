<?php
include "assets/header.php";
include "assets/footer.php";

$login = $_POST['login'];
$mdp = $_POST['mdp'];
$ahref = '<a href="http://localhost:8080/participant.php">voir la liste des participppant</a>';

if($login == 'admin' && $mdp == 'hello'){
    session_start();
    $_SESSION[$login] = "admin";
    echo 'Bonjour Admin, ceci est votre tableau de bord ' ;
    if($_SESSION[] = $_SESSION[$login]){
        echo htmlspecialchars_decode($ahref);
    }else{
        echo '';
    }
    

}else{
    header('Location: http://localhost:8080/login.php');
  exit();
}
?>