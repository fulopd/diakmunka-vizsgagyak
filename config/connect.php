<?php

$link = new mysqli('localhost','diakmunka','diakmunka','diakmunka','3306');
if ($link -> errno){
    die('Nem sikerült csatlakozi az adatbázishoz!');
}
if (!$link ->set_charset('utf8')){
    echo 'A karakterkódolás beállísa sikertelen!';
}

