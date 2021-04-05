$(function() {
    $('.num').blur(function() {
        var num = $('.num').val();
        $.post('php/valide.php', { num: num }, function(donnee) {
            $('.erreurn').html(donnee).slideDown();
            //$('.num').val('');

        });
        return false;
    });
});

$(function() {


    $('.date').blur(function() {
        var date = $('.date').val();
        var num = $('.num').val();
        $.post('php/validate.php', { date: date, num: num }, function(donnee) {
            $('.erreurdat').html(donnee).slideDown();
            // $('.date').val('');

        });
        return false;
    });
});


$(function() {


    $('.pwd').blur(function() {

        var pwd = $('.pwd').val();
        var num = $('.num').val();
        $.post('php/valid.php', { pwd: pwd, num: num }, function(donnee) {
            $('.erreurpwd').html(donnee).slideDown();
            //$('.num').val('');

        });
        return false;
    });
});

$(function() {

    $('.formulaire').submit(function() {
        var pwd = $('.pwd').val();
        var date = $('.date').val();
        var num = $('.num').val();
        if ($('#num').val() == "") {
            $("#erreurn").removeClass("hide").html("Veuillez renseigner ce champs!");
            return false;
        } else if ($('#date').val() == "") {
            $("#erreurdat").removeClass("hide").html("Veuillez renseigner ce champs!");
            return false;
        } else if ($('#pwd').val() == "") {
            $("#erreurpwd").removeClass("hide").html("Veuillez renseigner ce champs!");
            return false;
        } else { return true; }


    });
});