<?php



if (!isLogged()) {
    $_SESSION['loginError'] = "Információ megtekintéséhez be kell jelentkezni";
    header('Location: jog.php');
    die();
}

htmlKiir('html/header.html');


if (!isset($_SESSION['felhasznalo'])) {
    //Senki nincs bejelentkezve
    htmlKiir('html/menu.html');
} else {
    if ($_SESSION['diak'] == 1) {
        //ha diák jelentkezett be
        htmlKiir('html/menu_diak.html');
    } else {
        //ha adminisztrátor jelentkezett be
        htmlKiir('html/menu_admin.html');
    }
}

htmlKiir('html/footer.html');
