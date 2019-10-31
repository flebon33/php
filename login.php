<?php
include "assets/header.php";
include "assets/footer.php";
?>
<div class="row">
<form action="compte.php" method="post" class="mx-auto">
    <div class="form-group mx-auto">
        <label for="">login</label>
        <input type="text" class="form-control" id="" placeholder="email" name="login">
        <label for="">mot de passe</label>
        <input type="password" class="form-control" id="" placeholder="mot de passe" name="mdp">
    </div>
    <button type="submit" class="btn btn-primary mx-auto">login</button>
    <p class="mx-auto"> Pas encore inscrit? Inscrit toi <a href='http://localhost:8080/jeu.php'>ICI</a></p>
</form></div>