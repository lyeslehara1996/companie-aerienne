//validation formulaire adulte
$(function() {
    $('#nom').blur(function() {
        valid1 = true;
        if ($('#nom').val() == "") {
            valid1 = false;
            $('#nom').css('border', '1px solid #f44336');
            $("#erreurnom").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#nom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid1 = false;
            $('#nom').css('border', '1px solid #f44336');
            $("#erreurnom").removeClass("hide").html("Nom invalide .");
        } else if ($('#nom').val().length < 3) {
            valid1 = false;
            $('#prenom').css('border', '1px solid #f44336');
            $("#erreurnom").removeClass("hide").html("Nom invalide .");
        } else {
            $('#nom').css('border', '1px solid #b0f2b6');
            $("#erreurnom").removeClass("hide").html("");
        }
    });
    $('#nom').keyup(function() {
        if ($('#nom').val().length >= 3 && $("#nom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#nomE').val() != "") {
            $('#nom').css('border', '1px solid #b0f2b6');
            $("#erreurnom").removeClass("hide").html("");

        }
    });




    $('#prenom').blur(function() {
        valid2 = true;
        if ($('#prenom').val() == "") {
            valid2 = false;
            $('#prenom').css('border', '1px solid #f44336');
            $("#erreurprenom").removeClass("hide").html("Champs obligatoir");
        } else if (!$("#prenom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid2 = false;
            $('#prenom').css('border', '1px solid #f44336');
            $("#erreurprenom").removeClass("hide").html("Prenom invalide .");
        } else if ($('#prenom').val().length < 3) {
            valid1 = false;
            $('#prenom').css('border', '1px solid #f44336');
            $("#erreurprenom").removeClass("hide").html("prenom invalide .");
        } else {
            $('#prenom').css('border', '1px solid #b0f2b6');
            $("#erreurprenom").removeClass("hide").html("");
        }
    });
    $('#prenom').keyup(function() {
        if ($('#prenom').val().length >= 3 && $("#prenom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#prenom').val() != "") {
            $('#prenom').css('border', '1px solid #b0f2b6');
            $("#erreurprenom").removeClass("hide").html("");
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
            $("#erreurdtn").removeClass("hide").html("Veuillez saisir la date.");
        } else if (date2 < date) {
            valid3 = false;
            $('#dtn').css('border', '1px solid #b0f2b6');
            $("#erreurdtn").removeClass("hide").html('');

        } else {
            $('#dtn').css('border', '1px solid #f44336');
            $("#erreurdtn").removeClass("hide").html('Merci de verifier votre date de naissance');
            return false;
        }
    });


});
/////////////////////////////
//verficationn du formulaire enfant
$(function() {
    $('#nomE').blur(function() {
        valid1 = true;
        if ($('#nomE').val() == "") {
            valid1 = false;
            $('#nomE').css('border', '1px solid #f44336');
            $("#erreurnomE").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#nomE").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#nomE').val().length < 3) {
            valid1 = false;
            $('#nomE').css('border', '1px solid #f44336');
            $("#erreurnomE").removeClass("hide").html("Nom invalide .");
        } else if ($('#nomE').val().length < 3) {
            valid1 = false;
            $('#prenomE').css('border', '1px solid #f44336');
            $("#erreurnomE").removeClass("hide").html("Nom invalide .");
        } else {
            $('#nomE').css('border', '1px solid #b0f2b6');
            $("#erreurnomE").removeClass("hide").html("");
        }
    });
    $('#nomE').keyup(function() {
        if ($('#nomE').val().length >= 3 && $("#nom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#nomE').val() != "") {
            $('#nomE').css('border', '1px solid #b0f2b6');
            $("#erreurnomE").removeClass("hide").html("");

        }
    });


    $('#prenomE').blur(function() {
        valid2 = true;
        if ($('#prenomE').val() == "") {
            valid2 = false;
            $('#prenomE').css('border', '1px solid #f44336');
            $("#erreurprenomE").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#prenomE").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid2 = false;
            $('#prenomE').css('border', '1px solid #f44336');

            $("#erreurprenomE").removeClass("hide").html("Prénom invalide .");
        } else if ($('#prenomE').val().length < 3) {
            valid1 = false;
            $('#prenomE').css('border', '1px solid #f44336');
            $("#erreurprenomE").removeClass("hide").html("Prénom invalide .");
        } else {
            $('#prenomE').css('border', '1px solid #b0f2b6');
            $("#erreurprenomE").removeClass("hide").html("");
        }
    });
    $('#prenomE').keyup(function() {
        if ($('#prenomE').val().length >= 3 && $("#prenomE").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#prenomE').val() != "") {
            $('#prenomE').css('border', '1px solid #b0f2b6');
            $("#erreurprenomE").removeClass("hide").html("");
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
            $("#erreurdtn").removeClass("hide").html("Veuillez saisir la date.");
        } else if (date2 < date) {
            valid3 = false;
            $('#dtn').css('border', '1px solid #b0f2b6');
            $("#erreurdtn").removeClass("hide").html('');

        } else {
            $('#dtn').css('border', '1px solid #f44336');
            $("#erreurdtn").removeClass("hide").html('Merci de verifier votre date de naissance');
            return false;
        }
    });
    $('#dtn').keyup(function() {
        if (!$('#dtn').val() == "") {
            $('#dtn').css('border', '1px solid #b0f2b6');
            $("#erreurdtn").removeClass("hide").html("");
        }
    });
});
/////////////////////////////
//verficationn du formulaire bebe
$(function() {
    $('#nomB').blur(function() {
        valid1 = true;
        if ($('#nomB').val() == "") {
            valid1 = false;
            $('#nomB').css('border', '1px solid #f44336');
            $("#erreurnomB").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#nomB").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid1 = false;
            $('#nomB').css('border', '1px solid #f44336');
            $("#erreurnomB").removeClass("hide").html("Nom invalide .");
        } else if ($('#nomB').val().length < 3) {
            valid1 = false;
            $('#nomB').css('border', '1px solid #f44336');
            $("#erreurnomB").removeClass("hide").html("Nom invalide .");
        } else {
            $('#nomB').css('border', '1px solid #b0f2b6');
            $("#erreurnomB").removeClass("hide").html("");
        }
    });
    $('#nomB').keyup(function() {
        if ($('#nomB').val().length >= 3 && $("#nom").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#nomB').val() != "") {
            $('#nomB').css('border', '1px solid #b0f2b6');
            $("#erreurnomB").removeClass("hide").html("");

        }
    });


    $('#prenomB').blur(function() {
        valid2 = true;
        if ($('#prenomB').val() == "") {
            valid2 = false;
            $('#prenomB').css('border', '1px solid #f44336');
            $("#erreurprenomB").removeClass("hide").html("Champs obligatoire");
        } else if (!$("#prenomB").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/)) {
            valid2 = false;
            $('#prenomB').css('border', '1px solid #f44336');

            $("#erreurprenomB").removeClass("hide").html("Prénom invalide .");
        } else if ($('#prenomB').val().length < 3) {
            valid1 = false;
            $('#prenomB').css('border', '1px solid #f44336');
            $("#erreurprenomB").removeClass("hide").html("Prénom invalide .");
        } else {
            $('#prenomB').css('border', '1px solid #b0f2b6');
            $("#erreurprenomB").removeClass("hide").html("");
        }
    });
    $('#prenomB').keyup(function() {
        if ($('#prenomB').val().length >= 3 && $("#prenomB").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#prenomB').val() != "") {
            $('#prenomB').css('border', '1px solid #b0f2b6');
            $("#erreurprenomB").removeClass("hide").html("");
        }
    });

    $('#dtnB').blur(function() {
        valid3 = true;
        date = new Date();
        date_n = $('#dtnB').val();
        date2 = new Date(date_n);
        date1 = new date('01-01-1900')
        if ($('#dtnB').val() == "") {
            valid3 = false;
            $('#dtnB').css('border', '1px solid #f44336');
            $("#erreurdtnB").removeClass("hide").html("Veuillez saisir la date.");
        } else if (date2 < date1) {
            $('#dtnB').css('border', '1px solid #f44336');
            $("#erreurdtnB").removeClass("hide").html('Merci de verifier votre date de naissance');
            return false;
        } else if (date2 < date) {
            valid3 = false;
            $('#dtnB').css('border', '1px solid #b0f2b6');
            $("#erreurdtnB").removeClass("hide").html('');

        } else {
            $('#dtnB').css('border', '1px solid #f44336');
            $("#erreurdtnB").removeClass("hide").html('Merci de verifier votre date de naissance');
            return false;
        }
    });
    $('#dtnB').keyup(function() {
        if (!$('#dtnB').val() == "") {
            $('#dtnB').css('border', '1px solid #b0f2b6');
            $("#erreurdtnB").removeClass("hide").html("");
        }
    });
});
$(function() {
    $('#mail').blur(function() {
        valid1 = true;
        if ($('#mail').val() == "") {
            valid1 = false;
            $('#mail').css('border', '1px solid red');
            $("#erreurmail").removeClass("hide").html("Veuillez saisir votre email.");

        } else if (!$("#mail").val().match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)) {
            valid1 = false;
            $('#mail').css('border', '1px solid red');
            $("#erreurmail").removeClass("hide").html("E-mail invalide.");
        } else if ($('#mail').val().length < 3) {
            valid1 = false;
            $('#mail').css('border', '1px solid red');
            $("#erreurmail").removeClass("hide").html("Email trop court minimum 3 caractères.");
        } else {
            $('#email').css('border', '1px solid green');
            $("#erreurmail").addClass("hide").empty();
        }
    });
    $('#mail').keyup(function() {
        if ($('#mail').val().length >= 3 && $("#email").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#mail').val() != "") {
            $('#mail').css('border', '1px solid green');
            $("#erreurmail").addClass("hide").empty();
        }
    });

    $('#emailConf').blur(function() {
        valid2 = true;
        if ($('#emailConf').val() == "" && $('#mail') != "") {
            valid1 = false;
            $('#emailConf').css('border', '1px solid red');
            $("#erreuremailConf").removeClass("hide").html("Confirmez votre e-mail.");

        } else if ($('#mail').val() != $('#emailConf').val()) {
            valid2 = false;
            $('#emailConf').css('border', '1px solid red');
            $("#erreuremailConf").removeClass("hide").html("Les deux e-mail ne correspondent pas. Veuillez réessayer.");

        } else {
            $('#emailConf').css('border', '1px solid green');
            $("#erreuremailConf").addClass("hide").empty();
        }
    });
    $('#emailConf').keyup(function() {
        if ($('#email').val() == $('#emailConf').val() && ($('#emailConf').val() != "" && $('#email').val() != "")) {
            $('#emailConf').css('border', '1px solid green');
        }
    });

    $('#phone').blur(function() {
        valid3 = true;
        if ($('#phone').val() == "") {
            valid3 = false;
            $('#phone').css('border', '1px solid red');
            $("#erreurphone").removeClass("hide").html("Veuillez saisir votre numéro de téléphone.");

        } else if (!$('#phone').val().match(/^([0-9]+)$/)) {
            valid3 = false;
            $('#phone').css('border', '1px solid red');
            $("#erreurphone").removeClass("hide").html("Votre numéro de téléphone est invalide.");
        } else {
            $('#phone').css('border', '1px solid green');
            $("#erreurphone").removeClass("hide").html("");
        }
    });
    $('#phone').keyup(function() {
        if ($('#phone').val().match(/^([0-9]+)$/) && $('#phone').val() != "") {
            $('#phone').css('border', '1px solid green');
            $("#erreurphone").addClass("hide").empty();
        }
    });

});