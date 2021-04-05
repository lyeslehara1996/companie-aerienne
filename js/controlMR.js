/*$(function() {
    $('.reference').blur(function() {
        var reference = $('.reference').val();
        $.post('php/validref.php', { reference: reference }, function(donnee) {
            $('.erreurref').html(donnee).slideDown();

        });
        return false;
    });
});

$(function() {
    $('.nom').blur(function() {
        var nom = $('.nom').val();
        var reference = $('.reference').val();
        $.post('php/validnom.php', { nom: nom, reference: reference }, function(donnee) {
            $('.erreurnom').html(donnee).slideDown();
        });
        return false;
    });
});

$(function() {
    $('.reference').keyup(function() {
        var reference = $('.reference').val();
        $.post('php/validref.php', { reference: reference }, function(donnee) {
            $('.erreurref').html(donnee).slideDown();

        });
        return false;
    });
});

$(function() {
    $('.nom').keyup(function() {
        var nom = $('.nom').val();
        var reference = $('.reference').val();
        $.post('php/validnom.php', { nom: nom, reference: reference }, function(donnee) {
            $('.erreurnom').html(donnee).slideDown();
        });
        return false;
    });
});

$(function() {
    $('.form').submit(function() {
        var reference = $('.reference').val();
        $.post('php/validref.php', { reference: reference }, function(donnee) {
            $('.erreurref').html(donnee).slideDown();
            $('.reference').val('');


        });
        return false;
    });
});

$(function() {
    $('.form').submit(function() {
        var nom = $('.nom').val();
        var reference = $('.reference').val();
        $.post('php/validnom.php', { nom: nom, reference: reference }, function(donnee) {
            $('.erreurnom').html(donnee).slideDown();
            $('.nom').val('');

        });
        return false;
    });
});
$(function() {
    $('.reference').blur(function() {
        var reference = $('.reference').val();
        $.post('php/validref.php', { reference: reference }, function(donnee) {
            $('.erreurreff').html(donnee).slideDown();
            //$('.num').val('');

        });
        return false;

    });*/

$('.nom').blur(function() {

    var nom = $('.nom').val();
    var reference = $('.reference').val();
    $.post('php/validnom.php', { reference: reference, nom: nom }, function(donnee) {
        $('.erreurnom').html(donnee).slideDown();
        //$('.num').val('');

    });
    return false;
});
$('.reference').blur(function() {
    var reference = $('.reference').val();
    $.post('php/validref.php', { reference: reference }, function(donnee) {
        $('.erreurref').html(donnee).slideDown();
        //$('.num').val('');

    });
    return false;
});
$('.reference').keyup(function() {
    var reference = $('.reference').val();
    $.post('php/validref.php', { reference: reference }, function(donnee) {
        $('.erreurref').html(donnee).slideDown();
        //$('.num').val('');

    });
    return false;
});

$('.nom').keyup(function() {

    var nom = $('.nom').val();
    var reference = $('.reference').val();
    $.post('php/validnom.php', { reference: reference, nom: nom }, function(donnee) {
        $('.erreurnom').html(donnee).slideDown();
        //$('.num').val('');

    });
    return false;
});
$('.formulaire').submit(function() {
    var nom = $('.nom').val();
    var reference = $('.reference').val();
    if (nom == "") {
        $('#erreurnom').removeClass("hide").html('champs obligatoire');
        return false;
    } else if (reference == "") {
        $('#erreurref').removeClass("hide").html('champs obligatoire');
        return false;
    }
})