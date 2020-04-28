$(document).ready(function () {
    //Belépés

    $(document).on("click", "#belep", function () {
        var felhasznalo = $("#felhasznalo").val();
        var jelszo = $("#jelszo").val();
        if (felhasznalo.length > 1 && jelszo.length > 1) {
            $.ajax({
                url: 'php/login.php',
                method: 'post',
                data: {felhasznalo: felhasznalo, jelszo: jelszo},
                dataType: 'text',
                success: function (adat) {
                    location.reload();
                }
            });
        }
    });

    $(document).on("click", "#munkaado-lista", function () {
        console.log("munkaadok");
        $.ajax({
            url: 'php/munkaadok.php',
            method: 'post',            
            dataType: 'text',
            success: function (adat) {
                $("#adatok").html(adat);
            }
        });

    })


    $(document).on("click", "#uj-munkaado", function () {
        console.log("uj-munkaado");
        $.ajax({
            url: 'php/ujMunkaado.php',
            method: 'post',            
            dataType: 'text',
            success: function (adat) {
                $("#adatok").html(adat);
            }
        });

    })




    //Kilépés
    $(document).on("click", "#kilep", function () {
        $.post("php/logout.php", {kilep: 1}, function () {
            location.reload();
        });
    });


});


