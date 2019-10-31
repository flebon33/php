<?php
session_start();
include "assets/header.php";
include "assets/footer.php";
?>

<div class = "row">
<h1 class = "mx-auto col-lg-2"> 
<?php
    echo $titredusite;
?>
</h1>
<?php
if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}
?>


</div>
<div class="col">
<p style="font-size : 25px ;" class="col-lg-4 mx-auto">
 Bonjour visiteur, vous avez vu cette page <?php echo $_SESSION['count']; ?> fois.
</p> </div><div class="row">
<a class="btn btn-primary col-lg-3 mx-auto" href="http://localhost:8080/jeu.php" role="button">Acceder au jeu</a>
</div>








    
