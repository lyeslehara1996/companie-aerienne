$(function() {
    $('#num').blur(function() {

        valid1 = true;
        num = $('#num').val();
        if ($('#num').val() == "") {
            valid1 = false;
            $('#num').css('border', '1px solid #f44336');
            $("#erreurnum").removeClass("hide").html("Veuillez saisir votre numéro de carte.")
        } else {
            $('#num').css('border', '1px solid #b0f2b6');
            $("#erreurnum").removeClass("hide").html("");
            $.ajax({
                type: "POST",
                url: "php/valide.php",
                data: 'num1=' + num,
                success: function(data) {
                    if (data == 2) {
                        valid1 = false;
                        $('#num').css('border', '1px solid #f44336');
                        $("#erreurnum").removeClass("hide").html("Votre numéro de carte n'existe pas.Réessayer SVP! ");
                    }
                }
            });
        }




    });


    $('#date').blur(function() {
        valid3 = true;
        date2 = $('#date').val();

        annee = date[0];
        //mois = date2[1];


        if ($('#date').val() == "") {
            valid1 = false;
            $('#date').css('border', '1px solid #f44336');
            $("#erreurdate").removeClass("hide").html("veuillez saisir la date");

        } else {
            $('#date').css('border', '1px solid #b0f2b6');
            $("#erreurdate").removeClass("hide").html("");
            $.ajax({
                type: "POST",
                url: "php/valide.php",
                data: 'date1=' + date2,
                success: function(data) {
                    if (data == 2) {
                        valid1 = false;
                        $('#date').css('border', '1px solid #f44336');
                        $('#date').next("#erreurdate").fadeIn().text("Votre date de carte n'existe pas.");
                    }
                }
            });
        }
    });


    $('#pwd').blur(function() {
        valid3 = true;
        pwd = $('#pwd').val();

        if ($('#pwd').val() == "") {
            valid3 = false;
            $('#pwd').css('border', '1px solid #f44336');
            $("#erreurpwd").removeClass("hide").html("Veuillez saisir le code de votre carte.");

        } else {
            $('#pwd').css('border', '1px solid #b0f2b6');
            $("#erreurpwd").removeClass("hide").html("");
            $.ajax({
                type: "POST",
                url: "php/valide.php",
                data: 'pwd1=' + pwd,
                success: function(data) {
                    if (data == 2) {
                        valid1 = false;
                        $('#pwd').css('border', '1px solid #f44336');
                        $('#pwd').next("#erreurpwd").fadeIn().text('Votre code de carte est incorrecte.');
                    }
                }
            })
        }
    });

});










$('#nomenr').blur(function() {

        valid4 = true;
        nomenr = $('#nomenr').val();
        if ($('#nomenr').val() == "") {
            valid4 = false;
            $('#nomenr').css('border', '1px solid #f44336');
            $("#erreurnomenr").removeClass("hide").html("Veuillez saisir votre numéro de carte.")
        } else {
            $('#nomenr').css('border', '1px solid #b0f2b6');
            $("#erreurnomenr").removeClass("hide").html("");
            $.ajax({
                type: "POST",
                url: "php/valide.php",
                data: 'nomenr1=' + nomenr,
                success: function(data) {
                    if (data == 2) {
                        valid4 = false;
                        $('#nomenr').css('border', '1px solid #f44336');
                        $("#erreurnomenr").removeClass("hide").html("Votre eenregstrement  existe deja  ");
                    }
                }
            });
        }


    });

