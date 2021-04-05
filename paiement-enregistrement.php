<?php  
  ob_start();
?>
<?php
if(!isset($_SESSION))
{ 
  session_start();
}
?>
<?php    
  require('php/connextion.php');
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="css/compte.css">
    <link rel="stylesheet" href="css/paiement.css">
    <link rel="stylesheet" href="css/guide.css">


	  <title>Paiement</title>
</head>
<body>

  <?php include "navigation.php";?>



    <!-- page en cours-->

<div class="breadcrumb text-center text-white d-inline d-sm-none ">

        <a href="#" class=" col-12 active mb-5" style="margin-top: -10px" >Paiement</a>

</div>

<div class="breadcrumb text-center d-none d-sm-block">
    <a href="#" class=" col-3">Repas</a>
    <a href="#" class="col-3 " >Bagages</a>
    <a href="#" class=" col-3 ">Siège</a>
        <a href="#" class=" col-3 active">Paiement</a>

</div>

































<!--paiement--><!--paiement--><!--paiement--><!--paiement--><!--paiement--><!--paiement-->
      <div class="container contenu">
        <div class="row col-12">
          <div class="col-md-7 register-left">
            <h2 class="text-center" style="color:#fff;">Votre montant:<?php echo$_SESSION['montant']+200;?>DA</h2>
          <form action="paiement-enregistrement.php" method="POST">   
            <div id="paiement">
              <div class="register-form">
                <div class="form-group">
                  <Label style="color:#fff;">Numéro carte</Label>
                  <input id="num" name="Numero_carte" type="text" class="form-control" placeholder="">
                  <span style="margin-left: 2.6rem" class=" redText col l4 offset-l2 s5 offset-s1 hide" id="erreurnum"></span>
                </div>
                <div class="form-group">
                  <Label style="color:#fff;">Date d'expiration</Label>
                  <input id="date" name="Date_expiration" type="month" class="form-control" placeholder="">
                  <span style="margin-left: 2.6rem" class=" redText col l4 offset-l2 s5 offset-s1 hide" id="erreurdate"></span>
                </div>
                <div class="form-group">
                  <Label style="color:#fff;">Cryptogramme</Label>
                  
                  <input id='pwd' name="cryptogramme" type="password" class="form-control" placeholder="">
                  <span style="margin-left: 2.6rem" class= "redText col l4 offset-l2 s5 offset-s1 hide" id="erreurpwd"></span>
                </div>
              </div>
              <button type="submit" name="valider" class="btn btn-primary btn-voirplus" style="margin-right: 35px;">Valider</button>
            </div>
           </form>  
          </div>
          <div class="col-md-5 register-right">
            <i class="fas fa-angle-down"></i>
            <blockquote class ="blockquote"  >     
                              <p style ="" >On prend en charge toutes ces cartes</p>
    </blockquote>
               <img src="img/carte2.png"   class="mt-1 mb-1"  style="width: 300px">
          </div>
        </div>
      </div>
    
<?php  
require('php/paiement.php');
?>
<!--paiement--><!--paiement--><!--paiement--><!--paiement--><!--paiement--><!--paiement-->

































         
               

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f398ed42a2.js" crossorigin="anonymous"></script>
    
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

</body>
</html>


<script src="js/jquery.min.js"></script>
<script src="js/controlP.js"></script>
<?php  
ob_end_flush();
?>

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