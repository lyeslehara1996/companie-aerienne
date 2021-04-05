<?php
session_start();
$adulte = '1';
$enfant = '0';
$bebe = '0';
$_SESSION['clas']='eco';
$id = $_GET['num_vol'];
$mas_status = 'unchecked';
$femi_status = 'unchecked';
$mass_status = 'unchecked';
$femii_status = 'unchecked';
$massB_status = 'unchecked';
$femiiB_status = 'unchecked';

require "bdpdoo.php";

$req = $pdo->prepare("SELECT v.num_vol, v.nom_aer_dep, v.nom_aer_arr , v.date_depart , v.heure_depart , v.heure_arrivee , TIMEDIFF( `heure_arrivee`, `heure_depart` ) AS Temps
from vol v  WHERE num_vol=? ");
$req->execute([$id]);
while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
    $_SESSION['num_vola'] = $row['num_vol'];

    $_SESSION['dep'] = $row['nom_aer_dep'];
    $_SESSION['arr'] = $row['nom_aer_arr'];
    $_SESSION['heurdep'] = $row['heure_depart'];
    $_SESSION['heurarr'] = $row['heure_arrivee'];
    $_SESSION['date'] = $row['date_depart'];
    $_SESSION['duree'] = $row['Temps'];

    $req2 = $pdo->prepare('SELECT * from vol v ,avion a ,siege s , escale e
                where v.matricule_avion = a.matricule_avion
                and a.matricule_avion = s.matricule_avion
                and s.classe_siege="eco"
                and e.num_vol=?

limit 4
 ');
    $req2->execute([$id]);

    $reqpri = $pdo->prepare('SELECT prix_eco_adulte, prix_eco_enfant,prix_eco_bebe from vol v
                where v.num_vol=? ');
    $reqpri->execute([$id]);
    $rowss = $reqpri->fetch();
    $prixa = $rowss['prix_eco_adulte'];

    $nbr = $rowss['prix_eco_enfant'];
    $beb = $rowss['prix_eco_bebe'];
    $prixt = $adulte * $prixa;

    $prite = $enfant * $nbr;
    $prixb = $bebe * $beb;
    $prix_total = $prixt + $prite + $prixb;
    $_SESSION['id3'] = $prix_total;
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
    <link rel="stylesheet" href="formcss/form_formulaire.css">
    <link rel="stylesheet" href="build/css/intlTelInput.css">
    <link rel="stylesheet"  href="formcss/compte.css">
    <link rel="stylesheet"  href="formcss/guide.css">



	<title>formulaire</title>
</head>
<body>
    
    <div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>
    
  <style>

.card-header{
background-color:gray;
justify-content:space-around;
height: 60px;
}
.row{
margin-top:10px;
}



</style>

 <?php require "navigation.php";?>
     <!-- page en cours-->

<div class="breadcrumb col-12 text-center">
    <a href="#" class=" col-4" style="cursor: auto;">Réservation</a>
    <a href="#" class="col-4 active" style="cursor: auto;">Informations</a>
    <a href="#" class=" col-4" style="cursor: auto;">Paiment</a>

</div>


      <!--Les vols choisis-->
     <!--vol aller-->

    <div class="container col-12 col-md-8 ">

      <!-- ACCORDION -->
    <div id="accordion">
      <div class="card bg-white shadow rounded">
        <a  href="#collapse1" data-parent="#accordion" data-toggle="collapse">
        <div class="card-header">
               <i class='fas fa-plane-departure' style='font-size:29px;color:#f9a602'><span class="ml-3" style="font-size:23px;color:#fff">Détails vol</span></i>
             <i class="fas fa-angle-down float-right mr-5" style="font-size: 50px;color: #f9a602;"></i>

        </div>
        </a>

        <div id="collapse1" class="collapse">
          <div class="card-body ">
            <h4 class="d-inline" style="background-color:#f9a602; "><strong>Vol aller</strong></h4><br>

            <div class="row">
            <div class="col">
            <div class="p-2 bg d-inline"><i class='fas fa-plane-departure mr-2' style='color:#365390'></i><?php echo $_SESSION['dep'] ?> </div>
             <div class="p-2 bg d-inline"><?php echo $_SESSION['heurdep'] ?></div>

             </div>
              <div class="col">
             <div class="p-2 bg d-inline"><i class='far fa-calendar-alt mr-2' style="color: #365390;"></i><?php echo $_SESSION['date']; ?></div>
           </div>
         </div>
         <div class="row">
          <div class="col">
          <div class="p-2 bg d-inline"><i class='fas fa-plane-arrival mr-2' style='color:#365390'></i><?php echo $_SESSION['arr'] ?> </div>
             <div class="p-2 bg d-inline"><?php echo $_SESSION['heurarr'] ?></div>
           </div>
           <div class="col">
              <div class="p-2 bg d-inline"><i class='fas fa-stopwatch mr-2 ' style="color: #365390;"></i><?php echo $_SESSION['duree'] ?></div>
            </div>

         </div>
            <div class="row">
          <div class="col">
                 <?php if ($adulte > 0) {?>
          <div class="d-inline"><i class='fas fa-male mr-1' style="margin-left:7px;color: #365390;"></i><?php echo $adulte; ?></div>
                 <?php }?>
              <?php if ($enfant > 0) {?>
               <div class="d-inline"><i class='fas fa-child mr-1' style="margin-left:7px;color: #365390;"></i><?php echo $enfant; ?></div>
                <?php }?>
                 <?php if ($bebe > 0) {?>
               <div class="d-inline"><i class='fas fa-baby mr-1' style="margin-left:7px;color: #365390;"></i><?php echo $enfant; ?></div>
                     <?php }?>
           </div>
           <div class="col">
            <div class="p-2 bg d-inline">Montant</div>
            <div class="p-2 bg d-inline"><strong  style="font-size: 20px;"><?php echo $_SESSION['id3']; ?> DA</strong></div>
            </div>
         </div>
         <div class="row">
          <div class="col">
                 <?php $rows = $req2->fetch();
    if ($rows = $req2->fetch()) {
        ?>
            <p><strong>Escale</strong></p>
            <div class="p-2 bg d-inline"><i class='fas fa-plane-arrival mr-2' style='color:#365390'></i><?php echo $rows['nom_aeroport']; ?></div>
            <div class="p-2 bg d-inline"><i class='far fa-calendar-alt mr-2' style="color: #365390;"></i><?php echo $rows['date_depart']; ?></div>
            <div class="p-2 bg d-inline"><?php echo $rows['heure_depart']; ?></div><?php }?>
            </div>

         </div>
          </div>
        </div>
      </div>
    </div>
  </div>






     <div class="container-fluid mt-5">

<div class="row  py-0 my-0 bg-white" >

<div class="col-12 col-md-2"style="background-color: #0f1b54;color: #fff;width: 200px">
        <h4 class="mx-auto text-center"><i class=' d-sm-inline mr-2  fas fa-male'></i>Adulte </h4>
 </div>
<div class="col-12 col-md-10 shadow">
              <small class="form-text text-muted  mb-4 mt-4 ">Remarque: Entrez les informations comme indiquées sur la pièce d'identité</small>



    <form action="paiementsimp2.php" method="post">
        <?php for ($i = 0; $i < $adulte; $i++) {

        ?>
         <h4><?php echo $i + 1; ?><sup>er</sup> passager</h4>
     <div>
              <div class="form-row col-12">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                          <i class="fa fa-user text-muted"></i>
                        </span>
                      </div>
                      <input value='<?php if(isset($_SESSION['nom'])){ echo $_SESSION['nom'] ;} ?>' class="form-control bg-white border-left-0 border-md" type="text" id="nom" name="nom[]" placeholder="Saisissez votre nom">
                    </div>
                     <span style="margin-left: 4.1rem" id="erreurnomA"></span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                          <i class="fa fa-user text-muted"></i>
                        </span>
                      </div>
                      <input value='<?php if(isset($_SESSION['prenom'])){ echo $_SESSION['prenom'] ;} ?>' class="form-control bg-white border-left-0 border-md" type="text" id="prenom" name="prenom[]" placeholder="Saisissez votre prénom" required>
                    </div>
                     <span style="margin-left: 4.1rem" id="erreurprenomA"></span>
                  </div>
                </div>

                <div class="form-row col-12 ">
                  <div class="col-12 col-md-6 mb-2">
                    <div class="form-group">
                      <label for="dtn">Date de naissance</label>
                      <div class="input-group ">

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
              <i class="far fa-calendar-alt text-muted"></i>
            </span>
                            </div>
                             <input type="date" id="dtn" name="dtn[]" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="Date depart" required>
                            <br>
                        </div>
                    </div>
                     <span style="margin-left: 4.1rem" id="erreurdtnA"></span>
                  </div>
                  <div class="form-group col-12 col-md-6">
                    <div><label class="" for="sexe">Sexe</label></div>
                    <div class="custom-control custom-radio custom-control-inline mt-2">

                      <input type="radio" class="custom-control-input" name="optradio[<?php echo $i ?>]" id="sexe<?php echo $i + 1 ?>"

                       value= "masc" checked >
                      <label class="custom-control-label" for="sexe<?php echo $i + 1 ?>">Masculin</label>

                    </div>
                    <div class="custom-control custom-radio custom-control-inline mt-2">
                      <input type="radio" class="custom-control-input"  name="optradio[<?php echo $i ?>]" id="sexe<?php echo $i + 2 ?>"  value="femin">
                      <label class="custom-control-label" for="sexe<?php echo $i + 2 ?>">Féminin</label>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr color="black" style="height: none;border: none;border-top: 2px dashed white;">
<?php }?>

</div>


</div>


  <?php if ($enfant > 0) {?>

<div class="row  py-0 my-0 bg-white" >

<div class="col-12 col-md-2"style="background-color: #0f1b54;color: #fff;width: 200px">
        <h4 class="text-center mx-auto" ><i class='d-sm-inline mr-2  fas fa-child'></i>Enfant </h4>
 </div>
<div class="col-12 col-md-10 shadow">

                  <?php for ($i = 0; $i < $enfant; $i++) {

        ?>
         <h4><?php echo $i + 1; ?><sup>er</sup> passager</h4>
            <div>
              <div class="form-row col-12">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                          <i class="fa fa-user text-muted"></i>
                        </span>
                      </div>
                      <input class="form-control bg-white border-left-0 border-md" type="text" id="nomEE" name="nomE[]" placeholder="Saisissez votre nom">
                    </div>
                    <span style="margin-left: 4.1rem" id="erreurnomEE"></span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                          <i class="fa fa-user text-muted"></i>
                        </span>
                      </div>
                      <input class="form-control bg-white border-left-0 border-md" type="text" id="prenomEE" name="prenomE[]" placeholder="Saisissez votre prénom">
                    </div>
                    <span style="margin-left: 4.1rem" id="erreurprenomEE"></span>
                  </div>
                </div>

                <div class="form-row col-12 ">
                  <div class="col-12 col-md-6 mb-2">
                    <div class="form-group">
                      <label for="dtn">Date de naissance</label>
                      <div class="input-group ">

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
              <i class="far fa-calendar-alt text-muted"></i>
            </span>
                            </div>
                             <input type="date" id="dtnEE" name="dtnE[]" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="Date depart ">
                            <br>
                        </div>
                    </div>
                    <span style="margin-left: 4.1rem" id="erreurdtnEE"></span>
                  </div>
                  <div class="form-group col-12 col-md-6">
                    <div><label class="" for="sexe">Sexe</label></div>
                    <div class="custom-control custom-radio custom-control-inline mt-2">

                      <input type="radio" class="custom-control-input" name="optradioo[<?php echo $i ?>]" id="sexe<?php echo $i + 3 ?>"

                       value= "masc" checked >
                      <label class="custom-control-label" for="sexe<?php echo $i + 3 ?>">Masculin</label>

                    </div>
                    <div class="custom-control custom-radio custom-control-inline mt-2">
                      <input type="radio" class="custom-control-input" name="optradioo[<?php echo $i ?>]" id="sexe<?php echo $i + 4 ?>"  value="femin">
                      <label class="custom-control-label" for="sexe<?php echo $i + 4 ?>">Féminin</label>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr color="black" style="height: none;border: none;border-top: 2px dashed white;">
            <?php }?>


</div>


</div>
<?php }?>
  <?php if ($bebe > 0) {?>

<div class="row  py-0 my-0 bg-white" >

<div class="col-12 col-md-2"style="background-color: #0f1b54;color: #fff;width: 200px">
        <h4 class="text-center mx-auto" ><i class='d-sm-inline mr-2  fas fa-baby'></i>Bébé </h4>
 </div>
<div class="col-12 col-md-10 shadow">

                   <?php for ($i = 0; $i < $bebe; $i++) {

        ?>
         <h4><?php echo $i + 1; ?><sup>er</sup> passager</h4>
            <div >
              <div class="form-row col-12">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                          <i class="fa fa-user text-muted"></i>
                        </span>
                      </div>
                      <input class="form-control bg-white border-left-0 border-md" type="text" id="nomBB" name="nomB[]" placeholder="Saisissez votre nom">
                    </div>
                    <span style="margin-left: 4.1rem" id="erreurnomBB"></span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                          <i class="fa fa-user text-muted"></i>
                        </span>
                      </div>
                      <input class="form-control bg-white border-left-0 border-md" type="text" id="prenomBB" name="prenomB[]" placeholder="Saisissez votre prénom">
                    </div>
                    <span style="margin-left: 4.1rem" id="erreurprenomBB"></span>
                  </div>
                </div>

                <div class="form-row col-12 ">
                  <div class="col-12 col-md-6 mb-2">
                    <div class="form-group">
                      <label for="dtn">Date de naissance</label>
                      <div class="input-group ">

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
              <i class="far fa-calendar-alt text-muted"></i>
            </span>
                            </div>
                             <input type="date" id="dtnBB" name="dtnB[]" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="Date depart ">
                            <br>
                        </div>
                    </div>
                    <span style="margin-left: 4.1rem" id="erreurdtnBB"></span>
                  </div>
                  <div class="form-group col-12 col-md-6">
                    <div><label class="" for="sexe">Sexe</label></div>
                    <div class="custom-control custom-radio custom-control-inline mt-2">

                       <input type="radio" class="custom-control-input" name="optradiioo[<?php echo $i ?>]" id="sexe<?php echo $i + 5 ?>"

                       value= "masc" checked >
                      <label class="custom-control-label" for="sexe<?php echo $i + 5 ?>">Masculin</label>

                    </div>
                    <div class="custom-control custom-radio custom-control-inline mt-2">
                   <input type="radio" class="custom-control-input" name="optradiioo[<?php echo $i ?>]" id="sexe<?php echo $i + 6 ?>"  value="femin">
                      <label class="custom-control-label" for="sexe<?php echo $i + 6 ?>">Féminin</label>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr color="black" style="height: none;border: none;border-top: 2px dashed white;">

        <?php }?>

</div>




</div>



<?php }?>

<div class="row  py-0 my-0 bg-white" >

<div class="col-12 col-md-2"style="background-color: #0f1b54;color: #fff;width: 200px">
        <h4 class="text-center mx-auto" ><i class='d-sm-inline mr-2  fas fa-phone'></i>Contact </h4>
 </div>
<div class="col-12 col-md-10 shadow">


           <h4>Informations contact</h4>

          <div>

            <div class="form-row col-12">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <label class=" mt-4" for="dtn">E-mail</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-envelope text-muted"></i>
                      </span>
                    </div>
                    <input value='<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'] ;} ?>' class="form-control bg-white border-left-0 border-md" type="email" id="mail" name="email" placeholder="Saisissez votre e-mail" required>
                  </div>
                  <span style="margin-left: 4.1rem;" id="erreurmaill"></span>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <label class=" mt-4" for="email">Confirmation e-mail</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-envelope text-muted"></i>
                      </span>
                    </div>
                    <input  value='<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'] ;} ?>'  class="form-control bg-white border-left-0 border-md" type="email" id="emailConf" placeholder="Confirmez votre e-mail" required>
                  </div>
                  <span style="margin-left: 4.1rem" id="erreuremailConf"></span>
                </div>
              </div>
              <div class="form-row col-12">
                <div class="col-12 col-md-12">
                  <div class=" form-group">
                    <label for="phone">Téléphone</label><br>
                    <input class="form-control " type="text"  name="phone" id="" required>
                  </div>
                  <span id="erreurphone"></span>
                </div>
              </div>
            </div>

          </div>
</div>


</div>
     <div class="row salaire">
  <div class="col-md-8 col-12 ">
     <h3 class=" ml-5 mr-4">Vos informations ont bien été saisies</h3>
 </div>
<div class="col-md-4 col-12 mt-4">
 <button type="submit" name="valider" class="btn btn-primary float-right continuer mr-5">Continuer</button>
</div>

</div>
</form>




   <?php }?>












</div>





     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <script src="controlF.js"></script>
<script src="js/jquery.min.js"></script>
    <script src="build/js/intlTelInput.js"></script>
        <script src="js/jquery.min.js"></script>
 
        <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>

    <script>
    $(function () {
    $('input, select').on('focus', function () {
    $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
    });
    $('input, select').on('blur', function () {
    $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
    });
    });
    </script>
    <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
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