<?php
include "assets/header.php";
include "assets/footer.php";
?>
<form action="participer.php" method="post">
    <div class="form-group">
        <label for="">email</label>
        <input type="email" class="form-control" id="" placeholder="email" name="email">
        <label for="">nom</label>
        <input type="text" class="form-control" id="" placeholder="nom" name="nom">
        <label for="">prenom</label>
        <input type="text" class="form-control" id="" placeholder="prenom" name="prenom">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>