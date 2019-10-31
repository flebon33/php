<?php
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

if (isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
    // echo($email);
    // echo($nom);
    // echo($prenom);
    echo '';
}

    $file = fopen( "repertoire/$email.txt", "x" );
    fwrite($file, "$email;$nom;$prenom");
    fclose($file);

    if($file == FALSE){
        echo 'Cette email est déjà utilisé';
    }else{
        echo 'Vous etes enregistré !';
    }

?>