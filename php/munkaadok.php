<?php
session_start();
require_once('../config/connect.php');
require_once('../config/functions.php');

if (!isLogged()) {
    $_SESSION['loginError'] = "Információ megtekintéséhez be kell jelentkezni";
    header('Location: jog.php');
    die();
}

$sql = 'SELECT * FROM munkaado';
$res = $link -> query($sql);
if (!$res){
    die('Hiba a lekérdezés végrehajtásában!');
}
$content = '<table class="table table-bordered table-hover">'
        . '<thead class="thead-light">'
        . '<tr>'
        . '<th>Név</th>'
        . '<th>Település</th>'
        . '</tr>'
        . '</thead>';

while ($row = $res -> fetch_assoc()){  
    $content .='<tr>'
                . '<td>'.$row['nev'].'</td>'
                . '<td>'.$row['telepules'].'</td>'
            . '</tr>';
}
$content .='</table>';

echo $content;