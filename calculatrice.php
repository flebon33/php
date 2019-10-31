<?php
// session_start();
include "assets/header.php";
include "assets/footer.php";
?>
<div class="row">
<form action="" class="col-lg-6 mx-auto" method="post">
    <input type="number" class="form-control" id="" placeholder="valeur 1" name="val1">
    <select name="operateur" id="" class="form-control">
        <option value="plus">+</option>
        <option value="moins">-</option>
        <option value="fois">x</option>
        <option value="divise">/</option>
    </select>
    <input type="number" class="form-control" id="" placeholder="valeur 2" name="val2">
    <button class="btn btn-primary" type="submit">Calcul!</button>        
</form>
</div>

<?php

$op = $_POST['operateur'];
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];

function basicOp($op, $val1, $val2) {
    $result = 0;
    if($op == 'plus'){
      $result = $val1 + $val2;
      echo ' resultat : ', $result;
    }elseif ($op == 'moins') {
      $result = $val1 - $val2;
      echo ' resultat : ', $result;
    }elseif ($op == 'fois') {
      $result = $val1 * $val2;
      echo ' resultat : ', $result;
    }else{
      $result = $val1 / $val2;
      echo ' resultat : ', $result;
    }
  }

  if (isset($_POST['operateur']) && isset($_POST['val1']) && isset($_POST['val2'])) {
    basicOp($op, $val1, $val2);
}

  ?>