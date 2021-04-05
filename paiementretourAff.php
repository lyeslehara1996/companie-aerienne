<?php
session_start();
$adulte = $_SESSION['id'];
$enfant = $_SESSION['id1'];
$bebe = $_SESSION['id2'];
$montant = $_SESSION['prixtotat'];
$num_volA = $_SESSION['num_vola'];
$num_volR = $_SESSION['num_volr'];
$classe = $_SESSION['clas'];
$errors[]='';
$mas_status = 'unchecked';
$femi_status = 'unchecked';
function genNumRes($length)
{
    $characters = "0123456789"; //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $string = "RES-"; // car tous les numéros de carte commencera par un 6
    for ($p = 1; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return ($string);
}
$numero_carte = genNumRes(10);
//generation le numero de reservation

extract($_POST);
if (isset($_POST['valider'])) {

    $date_res = date('Y-m-d ');
    $heure_res = date("H:i:s");

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $dateN = $_POST['dtn'];

    $selected_radio = $_POST['optradio'];
 require 'bd.php';

    $insert = " INSERT INTO client( email, telephone) VALUES ('$email','$phone')";
  

    $qus = $connection->query($insert);
   
    $sele = "SELECT num_client FROM client WHERE num_client = (SELECT MAX(num_client) FROM client)";
    $con = mysqli_query($connection, $sele);
    while ($row = mysqli_fetch_assoc($con)) {
        $num_client = $row['num_client'];
        
        if ($qus == 1) {
                       $reserv= " INSERT INTO reservation(num_res, date_res, heure_res,  nbr_psg_adulte, nbr_psg_enfant, nbr_psg_bebe, montant, num_vol_aller, num_vol_retour, num_client, classe , num_carte ) 
    VALUES ('$numero_carte', '$date_res', '$heure_res','$adulte','$enfant','$bebe', '$montant', '$num_volA','$num_volR','$num_client', '$classe', 0  )";
                $query =$connection->query($reserv);
         


                $select_reser = "SELECT num_res  FROM reservation WHERE num_client =(SELECT MAX(num_client) FROM reservation)
 ";
            $con = mysqli_query($connection, $select_reser);
            while ($row = mysqli_fetch_assoc($con)) {
                  $num_reservation = $row['num_res'];
                 
               if ($query == 1) {
                    $facture = "INSERT INTO facture_reservation(num_res, date_fac_res, sous_tot_res, etat_facture)
                    VALUES ('$num_reservation','$date_res','$montant','non paye')";
                    $query = $connection->query($facture);

                    for ($i = 0; $i < $adulte; $i++) {

                        $passager = " INSERT INTO passager(nom, prenom, civilité, date_nais, num_res) VALUES ('$nom[$i]','$prenom[$i]','$selected_radio[$i]','$dateN[$i]' , '$num_reservation')";

                        $quss = $connection->query($passager);

                    }
                    if ($enfant > 0) {
                        $nomE = $_POST['nomE'];
                        $prenomE = $_POST['prenomE'];

                        $dateNE = $_POST['dtnE'];
                        $selected_radioo = $_POST['optradioo'];
                        for ($i = 0; $i < $enfant; $i++) {

                            $passager = " INSERT INTO passager(nom, prenom, civilité, date_nais, num_res) VALUES ('$nomE[$i]','$prenomE[$i]','$selected_radioo[$i]','$dateNE[$i]' , '$num_reservation')";

                            $quss = $connection->query($passager);

                        }}

                    if ($bebe > 0) {
                        $selected_radiioo = $_POST['optradiioo'];

                        $nomB = $_POST['nomB'];
                        $prenomB = $_POST['prenomB'];

                        $dateNB = $_POST['dtnB'];
                        for ($i = 0; $i < $bebe; $i++) {
                            $passager = " INSERT INTO passager(nom, prenom, civilité, date_nais, num_res) VALUES ('$nomB[$i]','$prenomB[$i]','$selected_radiioo[$i]','$dateNB[$i]' , '$num_reservation')";

                            $quss = $connection->query($passager);

                        }}

                  
      
            
               }
            
        }}}
}


?>




<!DOCTYPE html>
<html>
<head>
	       <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link   href="img/dessinFINAL.png"/>
<link rel="stylesheet" type="text/css" href="css/loading.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="formcss/style.css">
    <link rel="stylesheet"  href="formcss/compte.css">
    <link rel="stylesheet" href="formcss/paiement.css">
   <link rel="stylesheet" href="formcss/guide.css">


	  <title>Paiement</title>
</head>
<body>
    
    <div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>

   <?php  require "navigation.php";?>
    <!-- page en cours-->

<div class="breadcrumb col-12 text-center">
    <a href="#" class=" col-4">Réservation</a>
    <a href="#" class="col-4" >Informations</a>
    <a href="#" class=" col-4 active">Paiment</a>

</div>


      <!--formulaire-->
       <div class="container contenu">
      
           <form action="billetadulAFF.php"method="POST"class="formulaire">
 
 
        <div class="row col-12">
           <div class="col-md-7 register-left">
            <h2 class="text-center" style="color:#fff;">Votre montant: <?php echo $montant ; ?>DA</h2>
            <div id="paiement">
            <div class="register-form">
              <div class="form-group">
                <Label style="color:#fff;">Numéro carte</Label>
                <input type="text" name="numero"id="num"  class="form-control num"  >
                <div  class="erreurn"id="erreurn"></div>
              </div>
                <div class="form-group">
                <Label style="color:#fff;">Date d'expiration</Label>
                <input type="month"id="date"  class="form-control date" name="date" placeholder="12/12/2019">
                <div class="erreurdat"id="erreurdat"></div>
              </div>


              <div class="form-group">
                <Label style="color:#fff;">Cryptogramme</Label>
                <input  type="text"id="pwd" class="form-control pwd" name="pwd" placeholder="">
                <div class="erreurpwd"id="erreurpwd"></div>
              </div>
            </div>
              <button type="submit"id="submit" name="valiider" class="btn btn-primary btn-voirplus submit"  style="margin-right: 35px;">Valider</button>
            </div>

           </div>
           <div class="col-md-5 register-right">
            <i class="fas fa-angle-down"></i>
          <blockquote class ="blockquote"  >     
                              <p style ="" >On prend en charge toutes ces cartes</p>
    </blockquote>
               <img src="img/carte2.png"   class="mt-1 mb-1"  style="width: 300px">
           </div>
         </div>

           </form>

       </div>


         


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f398ed42a2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/controlPY.js"></script>
        <script src="js/jquery.min.js"></script>
 
        <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>


    <script>
  var pwd = document.getElementById('pwd');
  var eye = document.getElementById('eye');

    eye.addEventListener('click',togglePass);

    function togglePass(){

      eye.classList.toggle('active');

      (pwd.type == 'password') ? pwd.type = 'text' :
      pwd.type = 'password';
    }

</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

  function triggerHtmlEvent(element, eventName) {
    var event;
    if (document.createEvent) {
    event = document.createEvent('HTMLEvents');
    event.initEvent(eventName, true, true);
    element.dispatchEvent(event);
    } else {
    event = document.createEventObject();
    event.eventType = eventName;
    element.fireEvent('on' + event.eventType, event);
    }
  }

  jQuery('.lang-select').click(function() {
    var theLang = jQuery(this).attr('data-lang');
    jQuery('.goog-te-combo').val(theLang);

    //alert(jQuery(this).attr('href'));
    window.location = jQuery(this).attr('href');
    location.reload();

  });
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style type="text/css">
  .drapo{
    width: 30px;
    height: 30px;
    border-radius: 2px;
  }

</style>
<script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "0stLrpqg"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>

</body>
</html>
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

  function triggerHtmlEvent(element, eventName) {
    var event;
    if (document.createEvent) {
    event = document.createEvent('HTMLEvents');
    event.initEvent(eventName, true, true);
    element.dispatchEvent(event);
    } else {
    event = document.createEventObject();
    event.eventType = eventName;
    element.fireEvent('on' + event.eventType, event);
    }
  }

  jQuery('.lang-select').click(function() {
    var theLang = jQuery(this).attr('data-lang');
    jQuery('.goog-te-combo').val(theLang);

    //alert(jQuery(this).attr('href'));
    window.location = jQuery(this).attr('href');
    location.reload();

  });
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style type="text/css">
  .drapo{
    width: 30px;
    height: 30px;
    border-radius: 2px;
  }

</style>
<script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "0stLrpqg"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>
