//validation formulaire adulte
$(function() {





    $('#nom').blur(function() {
        var adulte = document.getElementById(adulte);
        var ad = new Array();
        for ($i = 0; $i < ad; $i++) {
            valid1 = true;
            if ($('#nom').val() == "") {
                valid1 = false;
                $('#nom').css('border', '1px solid #f44336');
                $("#erreurnomA").removeClass("hide").html("Champs obligatoire");
            } else if (!$("#nom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
                valid1 = false;
                $('#nom').css('border', '1px solid #f44336');
                $("#erreurnomA").removeClass("hide").html("Nom invalide .");
            } else if ($('#nom').val().length < 3) {
                valid1 = false;
                $('#prenom').css('border', '1px solid #f44336');
                $("#erreurnomA").removeClass("hide").html("Nom invalide .");
            } else {
                $('#nom').css('border', '1px solid #b0f2b6');
                $("#erreurnomA").removeClass("hide").html("");
            }
        }

    });
    $('#nom').keyup(function() {
        if ($('#nom').val().length >= 3 && $("#nom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#nomE').val() != "") {
            $('#nom').css('border', '1px solid #b0f2b6');
            $("#erreurnomA").removeClass("hide").html("");

        }
    });



    $('#prenom').blur(function() {
        valid2 = true;
        if ($('#prenom').val() == "") {
            valid2 = false;
            $('#prenom').css('border', '1px solid #f44336');
            $("#erreurprenomA").removeClass("hide").html("Champs obligatoir");
        } else if (!$("#prenom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid2 = false;
            $('#prenom').css('border', '1px solid #f44336');
            $("#erreurprenomA").removeClass("hide").html("Prenom invalide .");
        } else if ($('#prenom').val().length < 3) {
            valid1 = false;
            $('#prenom').css('border', '1px solid #f44336');
            $("#erreurprenomA").removeClass("hide").html("prenom invalide .");
        } else {
            $('#prenom').css('border', '1px solid #b0f2b6');
            $("#erreurprenomA").removeClass("hide").html("");
        }
    });
    $('#prenom').keyup(function() {
        if ($('#prenom').val().length >= 3 && $("#prenom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#prenom').val() != "") {
            $('#prenom').css('border', '1px solid #b0f2b6');
            $("#erreurprenomA").removeClass("hide").html("");
        }
    });
    $('#dtn').blur(function() {
        valid3 = true;
        date = new Date();
        date_n = $('#dtn').val();
        date2 = new Date(date_n);

        if ($('#dtn').val() == "") {
            valid3 = false;
            $('#dtn').css('border', '1px solid #f44336');
            $("#erreurdtnA").removeClass("hide").html("Veuillez saisir la date.");
        } else if (date2 < date1) {
            $('#dtn').css('border', '1px solid #f44336');
            $("#erreurdtnA").removeClass("hide").html('Merci de verifier votre date de naissance');
            return false;

        } else if (date2 < date) {
            valid3 = false;
            $('#dtn').css('border', '1px solid #b0f2b6');
            $("#erreurdtnA").removeClass("hide").html('');

        } else {
            $('#dtn').css('border', '1px solid #f44336');
            $("#erreurdtnA").removeClass("hide").html('Merci de verifier votre date de naissance');
            return false;
        }
    });
})

//verficationn du formulaire enfant
$(function() {
    $('#nomEE').blur(function() {
        valid1 = true;
        if ($('#nomEE').val() == "") {
            valid1 = false;
            $('#nomEE').css('border', '1px solid #f44336');
            $("#erreurnomEE").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#nomEE").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#nomE').val().length < 3) {
            valid1 = false;
            $('#nomEE').css('border', '1px solid #f44336');
            $("#erreurnomEE").removeClass("hide").html("Nom invalide .");
        } else if ($('#nomEE').val().length < 3) {
            valid1 = false;
            $('#nomEE').css('border', '1px solid #f44336');
            $("#erreurnomEE").removeClass("hide").html("Nom invalide .");
        } else {
            $('#nomEE').css('border', '1px solid #b0f2b6');
            $("#erreurnomEE").removeClass("hide").html("");
        }
    });
    $('#nomEE').keyup(function() {
        if ($('#nomEE').val().length >= 3 && $("#nom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#nomE').val() != "") {
            $('#nomEE').css('border', '1px solid #b0f2b6');
            $("#erreurnomEE").removeClass("hide").html("");

        }
    });


    $('#prenomEE').blur(function() {
        valid2 = true;
        if ($('#prenomEE').val() == "") {
            valid2 = false;
            $('#prenomEE').css('border', '1px solid #f44336');
            $("#erreurprenomEE").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#prenomEE").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid2 = false;
            $('#prenomEE').css('border', '1px solid #f44336');

            $("#erreurprenomEE").removeClass("hide").html("Prénom invalide .");
        } else if ($('#prenomEE').val().length < 3) {
            valid1 = false;
            $('#prenomEE').css('border', '1px solid #f44336');
            $("#erreurprenomEE").removeClass("hide").html("Prénom invalide .");
        } else {
            $('#prenomEE').css('border', '1px solid #b0f2b6');
            $("#erreurprenomE").removeClass("hide").html("");
        }
    });
    $('#prenomEE').keyup(function() {
        if ($('#prenomEE').val().length >= 3 && $("#prenomEE").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#prenomE').val() != "") {
            $('#prenomEE').css('border', '1px solid #b0f2b6');
            $("#erreurprenomEE").removeClass("hide").html("");
        }
    });
    $('#dtnEE').blur(function() {
        valid3 = true;
        date = new Date();
        date_n = $('#dtnEE').val();
        date2 = new Date(date_n);
        if ($('#dtnEE').val() == "") {
            valid3 = false;
            $('#dtnEE').css('border', '1px solid #f44336');
            $("#erreurdtnEE").removeClass("hide").html("Veuillez saisir la date.");
        } else if (date2 < date) {
            valid3 = false;
            $('#dtnEE').css('border', '1px solid #b0f2b6');
            $("#erreurdtnEE").removeClass("hide").html('');

        } else {
            $('#dtnEE').css('border', '1px solid #f44336');
            $("#erreurdtnE").removeClass("hide").html('Merci de verifier votre date de naissance');
            return false;
        }
    });
    $('#dtnEE').keyup(function() {
        if (!$('#dtnEE').val() == "") {
            $('#dtnEE').css('border', '1px solid #b0f2b6');
            $("#erreurdtnEE").removeClass("hide").html("");
        }
    });
});

//verficationn du formulaire bebe
$(function() {
    $('#nomBB').blur(function() {
        valid1 = true;
        if ($('#nomBB').val() == "") {
            valid1 = false;
            $('#nomBB').css('border', '1px solid #f44336');
            $("#erreurnomBB").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#nomBB").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid1 = false;
            $('#nomBB').css('border', '1px solid #f44336');
            $("#erreurnomBB").removeClass("hide").html("Nom invalide .");
        } else if ($('#nomBB').val().length < 3) {
            valid1 = false;
            $('#nomBB').css('border', '1px solid #f44336');
            $("#erreurnomBB").removeClass("hide").html("Nom invalide .");
        } else {
            $('#nomBB').css('border', '1px solid #b0f2b6');
            $("#erreurnomBB").removeClass("hide").html("");
        }
    });
    $('#nomBB').keyup(function() {
        if ($('#nomBB').val().length >= 3 && $("#nomBB").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#nomB').val() != "") {
            $('#nomBB').css('border', '1px solid #b0f2b6');
            $("#erreurnomBB").removeClass("hide").html("");

        }
    });


    $('#prenomBB').blur(function() {
        valid2 = true;
        if ($('#prenomBB').val() == "") {
            valid2 = false;
            $('#prenomBB').css('border', '1px solid #f44336');
            $("#erreurprenomBB").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#prenomBB").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid2 = false;
            $('#prenomBB').css('border', '1px solid #f44336');

            $("#erreurprenomBB").removeClass("hide").html("Prénom invalide .");
        } else if ($('#prenomBB').val().length < 3) {
            valid1 = false;
            $('#prenomBB').css('border', '1px solid #f44336');
            $("#erreurprenomBB").removeClass("hide").html("Prénom invalide .");
        } else {
            $('#prenomBB').css('border', '1px solid #b0f2b6');
            $("#erreurprenomBB").removeClass("hide").html("");
        }
    });
    $('#prenomBB').keyup(function() {
        if ($('#prenomBB').val().length >= 3 && $("#prenomBB").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#prenomB').val() != "") {
            $('#prenomBB').css('border', '1px solid #b0f2b6');
            $("#erreurprenomBB").removeClass("hide").html("");
        }
    });

    $('#dtnBB').blur(function() {
        valid3 = true;
        date = new Date();
        date_n = $('#dtnBB').val();
        date2 = new Date(date_n);

        if ($('#dtnBB').val() == "") {
            valid3 = false;
            $('#dtnBB').css('border', '1px solid #f44336');
            $("#erreurdtnBB").removeClass("hide").html("Veuillez saisir la date.");
        } else if (date2 < date) {
            valid3 = false;
            $('#dtnBB').css('border', '1px solid #b0f2b6');
            $("#erreurdtnBB").removeClass("hide").html('');

        } else {
            $('#dtnBB').css('border', '1px solid #f44336');
            $("#erreurdtnBB").removeClass("hide").html('Merci de verifier votre date de naissance');
            return false;
        }
    });
    $('#dtnBB').keyup(function() {
        if (!$('#dtnBB').val() == "") {
            $('#dtnBB').css('border', '1px solid #b0f2b6');
            $("#erreurdtnBB").removeClass("hide").html("");
        }
    });
});
$(function() {
    $('#mail').blur(function() {
        valid1 = true;
        if ($('#mail').val() == "") {
            valid1 = false;
            $('#mail').css('border', '1px solid #f44336');
            $("#erreurmaill").removeClass("hide").html("Veuillez saisir votre email.");

        } else if (!$("#mail").val().match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)) {
            valid1 = false;
            $('#mail').css('border', '1px solid #f44336');
            $("#erreurmaill").removeClass("hide").html("E-mail invalide.");
        } else if ($('#mail').val().length < 3) {
            valid1 = false;
            $('#mail').css('border', '1px solid #f44336');
            $("#erreurmaill").removeClass("hide").html("Email trop court minimum 3 caractères.");
        } else {
            $('#email').css('border', '1px solid #b0f2b6');
            $("#erreurmaill").addClass("hide").empty();
        }
    });
    $('#mail').keyup(function() {
        if ($('#mail').val().length >= 3 && $("#email").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#mail').val() != "") {
            $('#mail').css('border', '1px solid #b0f2b6');
            $("#erreurmaill").addClass("hide").empty();
        }
    });

    $('#emailConf').blur(function() {
        valid2 = true;
        if ($('#emailConf').val() == "" && $('#mail') != "") {
            valid1 = false;
            $('#emailConf').css('border', '1px solid #f44336');
            $("#erreuremailConf").removeClass("hide").html("Confirmez votre e-mail.");

        } else if ($('#mail').val() != $('#emailConf').val()) {
            valid2 = false;
            $('#emailConf').css('border', '1px solid #f44336');
            $("#erreuremailConf").removeClass("hide").html("Les deux e-mail ne correspondent pas. Veuillez réessayer.");

        } else {
            $('#emailConf').css('border', '1px solid #b0f2b6');
            $("#erreuremailConf").addClass("hide").empty();
        }
    });
    $('#emailConf').keyup(function() {
        if ($('#email').val() == $('#emailConf').val() && ($('#emailConf').val() != "" && $('#email').val() != "")) {
            $('#emailConf').css('border', '1px solid #b0f2b6');
        }
    });

    $('#phone').blur(function() {
        valid3 = true;
        if ($('#phone').val() == "") {
            valid3 = false;
            $('#phone').css('border', '1px solid #f44336')
            $("#erreurphone").removeClass("hide").html("Veuillez saisir votre numéro de téléphone.");

        } else if (!$('#phone').val().match(/^([0-9]+)$/)) {
            valid3 = false;
            $('#phone').css('border', '1px solid #f44336');
            $("#erreurphone").removeClass("hide").html("Votre numéro de téléphone est invalide.");
        } else {
            $('#phone').css('border', '1px solid #b0f2b6');
            $("#erreurphone").removeClass("hide").html("");
        }
    });
    $('#phone').keyup(function() {
        if ($('#phone').val().match(/^([0-9]+)$/) && $('#phone').val() != "") {
            $('#phone').css('border', '1px solid #b0f2b6');
            $("#erreurphone").addClass("hide").empty();
        }
    });

});