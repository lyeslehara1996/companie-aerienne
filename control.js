$(function() {

    $("#depart").keyup(function() {
        check_depart();
    });

    $("#destination").keyup(function() {
        check_destination();
    });


    //   $("#demo-11_1").keyup(function(){
    // if($(this).val() == ""){
    //   $("#output_demo1").css("color","red").html("</br> remplir le champs  ").show(800);
    // }else{
    //   $("#output_demo1").css("color","green").html("</br>  champs remplie  ").show(800);


    // }

    $("#depart").keyup(function() {
        $.ajax({
            type: "POST",
            url: "valide.php",
            data: 'searchterm=' + $(this).val(),

            success: function(data) {

                $("#suggesstions").show();
                $("#suggesstions").html(data);
                $("#depart").css("background", "#FFF");
            }
        });
    });

    $("#destination").keyup(function() {
        autoComDestination();
    });
});

$("#demo-11_1").focusout(function() {
    if ($("#demo-11_2").val() !== "" && $("#demo-11_2").val() == $("#demo-11_1").val()) {
        $("#output_demo1").css("color", "red").html("<br>les deux dates sont égales  ").show();
        $("#output_demo2").css("color", "red").html("<br>les deux dates sont égales ").show();
    }
    check_demo();

});


$("#demo-11_2").focusin(function() {
    check_demo2();
});

function check_depart() {
    $.ajax({
        type: "post",
        url: "valide.php",
        data: {
            'depart_check': $("#depart").val()
        },
        success: function(data) {
            if (data == "l") {
                $("#output_depart").css("color", "").html('').fadeIn(function() {
                    $("#output_depart").css("color", "").html('').fadeOut(800);
                });
                $('#depart').css('border-color', '#008000');
                $('.depar').css('border-color', '#008000');
                $("#depart").css("color", "green").show();

            }
            else {
                $("#output_depart").css("color", "red").html(data).fadeIn(800);
                $("#depart").css("color", "red").html(data).show();
                $('#depart').css('border-color', '#ff0000');
                $('.depar').css('border-color', '#ff0000');
            }
        }
    });
}

// function autoComDepart() {


// }


function autoComDestination() {

    $("#destination").keyup(function() {
        $.ajax({
            type: "POST",
            url: "valide.php",
            data: 'searchterm=' + $(this).val(),

            success: function(data) {

                $("#suggesstions").show();
                $("#suggesstions").html(data);
                $("#depart").css("background", "#FFF");
            }
        });
    });

}




function check_destination() {
    $.ajax({
        type: "post",
        url: "valide.php",
        data: {
            'destination_check': $("#destination").val()
        },
        success: function(data) {
            if (data == "l1") {
                $("#output_destination").css("color", "").html('').fadeIn(function() {
                    $("#output_destination").css("color", "").html('').fadeOut(800);
                });
                $("#destination").css("color", "green").show();
                $('.destin').css('border-color', '#008000');
                $('#destination').css('border-color', '#008000');
            } else {
                $("#output_destination").css("color", "red").html(data).fadeIn(800);
                $("#destination").css("color", "red").html(data).show();
                $('#destination').css('border-color', '#ff0000');
                $('.destin').css('border-color', '#ff0000');
            }
        }
    });
}

function check_demo2() {
    $.ajax({
        type: "post",
        url: "valide.php",
        data: {
            'demo2_check': $("#demo-11_2").val(),
            'demo1_check': $("#demo-11_1").val()
        },
        success: function(data) {
            if (data == "success") {
                // $("#output_demo2").css("color","green").html('le champs remplis avec success').show();

                $("#output_demo2").css("color", "").html('').fadeIn(function() {
                    $("#output_demo2").css("color", "").html('').fadeOut(800);
                });
                $("#demo-11_2").css("color", "green").show();
                $('.demmo2').css('border-color', '#008000');
                $('#demo-11_2').css('border-color', '#008000');

            } else {
                $("#output_demo2").css("color", "red").html(data).show();
                $('#demo-11_2').css('border-color', '#ff0000');
                $('.demmo2').css('border-color', '#ff0000');
            }
        }
    });
}



function check_demo() {
    $.ajax({
        type: "post",
        url: "valide.php",
        data: {
            'demo1': $("#demo-11_1").val(),
            'demo2_check': $("#demo-11_2").val()
        },
        success: function(data) {
            if (data == "ssucess") {
                // $("#output_demo1").css("color","green").html('<br/> le champs remplis avec success').show();
                $("#output_demo1").css("color", "").html('').fadeIn(function() {
                    $("#output_demo1").css("color", "").html('').fadeOut(500);
                });
                $("#demo-11_1").css("color", "green").show();
                $('#demo-11_1').css('border-color', '#008000');
                $('.demo').css('border-color', '#008000');

            } else {
                $("#output_demo1").css("color", "red").html(data).show();
                $('.demo').css('border-color', '#ff0000');
                $('#demo-11_1').css('border-color', '#ff0000');


            }
        }
    });
}


$("#form_register").submit(function(evet) {
    var status = $("#status").val();
    var depart = $(this).find("input[name=depart]").val();
    var destination = $(this).find("input[name=destination]").val();
    var demo1 = $(this).find("input[name=demo1]").val();
    var demo2 = $(this).find("input[name=demo2]").val();
    var aller = $(this).find("input[name=aller]").val();
    var retour = $(this).find("input[name=retour]").val();
    var economique = $(this).find("input[name=economique]").val();
    var affaire = $(this).find("input[name=affaire]").val();
    var adulte = $(this).find("input[name=Adulte]").val();
    var enfant = $(this).find("input[name=Enfant]").val()
    var bebe = $(this).find("input[name=bebe]").val();

    $.ajax({
        type: "post",
        url: "aller.php",
        data: {
            'depart': depart,
            'destination': destination,
            'demo1': demo1,
            'demo2': demo2,
            'aller': aller,
            'retour': retour,


        },
        beforeSend: function() {
            $("#bRegister").addClass("btn-warning").html("chargement ...").fadeOut(10000);
        },
        success: function(data) {
            if (data = "register_success") {

                status.css("color", "green").html('recherche effectuée').fadeIn(function() {
                    status.css("color", "green").html('recherche effectuée').fadeOut(800);

                });
                $("#bRegister").removeClass("btn btn-warning").html("recherche");


            }
            if (data != "register_success") {
                window.location.href = 'index3.php';
                status.html(html).fadeIn(400);
                $("#bRegister").removeClass("btn btn-warning").html("recherche");
                status.css("color", "green").html('data').fadeIn(200);

                status.css("color", "green").html('recherche effectuée').fadeIn(function() {
                    status.css("color", "green").html('recherche effectuée').fadeOut(800);

                });
                $("#bRegister").removeClass("btn btn-warning").html("recherche");

            }
        }
    });


});






// $("#form_register").submit(function(){

// var depart =$(this).find("input[name=depart]").val();
// var destination =$(this).find("input[name=destination]").val();
// var demo1 =$(this).find("input[name=demo1]").val();
// var demo2 =$(this).find("input[name=demo2]").val();

// $.post('recuperer.php',{depart:depart, destination:destination ,demo1:demo1, demo2:demo2},function(data){

// });

// });