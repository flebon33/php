<?php
include "assets/header.php";
include "assets/footer.php";
?>
<form action="compte.php" method="post">
    <div class="form-group">
        <label for="">login</label>
        <input type="text" class="form-control" id="" placeholder="email" name="login">
        <label for="">mot de passe</label>
        <input type="password" class="form-control" id="" placeholder="mot de passe" name="mdp">
    </div>
    <button type="submit" class="btn btn-primary">login</button>
    <p>Pas encore inscrit? Inscrit toi <a href='http://localhost:8080/jeu.php'>ICI</a></p>
</form>