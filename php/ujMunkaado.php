<?php

session_start();
require_once('../config/connect.php');
require_once('../config/functions.php');

if (!isLogged()) {
    $_SESSION['loginError'] = "Információ megtekintéséhez be kell jelentkezni";
    header('Location: jog.php');
    die();
}
if(!empty($_POST['mnev'])){
    $nev = $_POST['mnev'];
    $telep = $_POST['mtelepules'];
    $sql = "INSERT INTO munkaado (nev, telepules ('$nev', '$telep')";
}
echo '<form class="form" action="php/ujMunkaado.php" method="post" >
    <input type="text" name="mnev" placeholder="Munkaadó neve" required pattern="\S+">
    <input type="text" name="mtelepules" placeholder="Település" required pattern="\S+">
    <input class="btn btn-success" type="submit" value="Munkaadó rögzítése">    
    </form>';

    
