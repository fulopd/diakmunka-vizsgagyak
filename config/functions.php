<?php

function htmlKiir($html){
   print(file_get_contents($html));
}

function isLogged() {
    if (!empty($_SESSION['felhasznalo'])) {
        return true;
    } else {
        return false;
    }
}