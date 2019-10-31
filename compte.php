<?php   
 session_start();

include "assets/header.php";
include "assets/footer.php";

$login = $_POST['login'];
$mdp = $_POST['mdp'];
$ahref = '<a href="http://localhost:8080/participant.php">voir la liste des participants</a>';

if($login == 'admin' && $mdp == 'hello'){
    $_SESSION[$login] = "admin";
    echo 'Bonjour Admin, ceci est votre tableau de bord ' ;
    if(isset($_SESSION[$login])){
        echo $_SESSION[$login];
        echo 'ok';
        echo htmlspecialchars_decode($ahref);
    }else{
        echo '';
    }
    

}else{
    header('Location: http://localhost:8080/login.php');
  exit();
}
?>