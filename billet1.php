<?php
session_start();
//$num_volA = $_SESSION['num_vola'];
//$num_volR = $_SESSION['num_volr'];
use Endroid\QrCode\Response\QrCodeResponse;
require "bd.php";
    $select_reser = "SELECT num_res , num_client FROM reservation WHERE num_client = (SELECT MAX( num_client) FROM reservation) ";
    $con = mysqli_query($connection, $select_reser);
    while ($row = mysqli_fetch_assoc($con)) {
        $num_reservation = $row['num_res'];


        require_once 'vendor/autoload.php' ; 


   
    $cqr=$num_reservation;



//header('Content-Type: '.$qrCode->getContentType());
//echo $qrCode->writeString();

//$response = new QrCodeResponse($qrCode);

    }




                if(isset($_POST['valider'])){
if (!empty($_POST['nom1']) && !empty($_POST['reference'])) {
    $nom = $_POST['nom1'];
     $reference = $_POST['reference'];
 require "bdpdoo.php";
    $rec = $pdo->prepare('SELECT * FROM passager p , vol v , reservation r , client c, avion a WHERE p.num_res=r.num_res AND r.num_client=c.num_client AND   v.num_vol=r.num_vol_aller AND v.matricule_avion=a.matricule_avion AND p.nom=? AND r.num_res=?
');
    $rec->execute([$nom,$reference]);
    while ($row = $rec->fetch()) {

$qrCode = new Endroid\QrCode\QrCode();

$qrCode ->setText( $reference);
$qrCode ->setSize(100);
$qrCode->writeFile(__DIR__.'/qrcode3.png');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>billet</title>

   <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">

<link   href="img/dessinFINAL.png"/>
<link rel="stylesheet" type="text/css" href="css/loading.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/compte.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">


    <style type="text/css">
        .obtenir {
            background-color: #365390;
        }
        
        .obtenir:hover {
            background-color: #0f1b54;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>

  <div id="print">

                <ul class="mt-4" type="none" >
                    <li>Numéro de réservation:<?php echo $row['num_res'] ?></li>
                    <li>Etat de voyage:"confirmé"</li>
                    <ul type="disc">
                        <li>Votre voyage est confirmé et la réservation est garantie.</li>
                        <li>Nous vous conseillons de noter le numéro de réservation</li>

                    </ul>



                    <h4 class="mt-4">Informations sur le voyageur</h4>


                   <ul>

                        <li><?php echo ($row['nom'] . " " . $row['prenom']) ?></li>

                    </ul>
                    <li class="mt-4">Informations sur les personnes à contacter</li>
                    <p class="mt-2">Golden Eagle ne fait aucun démarchage téléphonique.Vos données téléphoniques ne sont colléctées qu'aux fins de la réservation.</p>
                    <li>E-mail :  <a class="ml-5" href="https://mail.google.com/" target="_blank"><?php echo $row['email']; ?></a></li>
                    <li>Téléphone :  <span class="ml-2"><?php echo $row['telephone'] ?></span></li>
                    <h4 class="mt-4">Votre sélection de vols</h4>
                    <li>Numéros de confirmation de la compagnie Golden Eagle : <?php echo $row['num_res']; ?></li>

                </ul>
                <div>
                </div>
                <ul>



                    <table>

                        <tr>
                            <th><?php echo $row['nom_aer_dep']; ?>  a

                                <?php echo $row['nom_aer_arr']; ?></th>

                        </tr>
                        <tr>
                            <td>Vol <?php echo $row['num_vol'] ?> </td>
                            <td class="pl-4">Confirmé</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td class="pl-4"><?php echo $row['date_depart']; ?></td>
                        </tr>
                        <tr>
                            <td>Départ :<?php echo $row['heure_depart']; ?></td>
                            <td class="pl-4" colspan="2"><?php echo $row['nom_aer_dep']; ?></td>
                        </tr>
                        <tr>
                            <td>Arrivée : <?php echo $row['heure_arrivee']; ?></td>
                            <td class="pl-4" colspan="2"><?php echo $row['nom_aer_arr']; ?></td>
                        </tr>
                        <tr>
                            <td>Appareil</td>
                            <td class="pl-4"><?php echo $row['nom_avion']; ?></td>
                        </tr>
                        <tr>
                            <td>Dernier enregistrement</td>
                            <td class="pl-4">avant le vol</td>
                        </tr>
                        <tr>
                            <td>Type de tarif</td>
                            <td class="pl-4"><?php echo $row['classe']; ?></td>
                        </tr>
                    </table>

                </ul>
                <ul>
<?php
$rec2 = $pdo->prepare('SELECT * FROM passager p , vol v , reservation r , client c, avion a WHERE p.num_res=r.num_res AND r.num_client=c.num_client AND   v.num_vol=r.num_vol_retour AND v.matricule_avion=a.matricule_avion AND p.nom=? AND r.num_res=?
');
        $rec2->execute([$nom,$reference]);
        if ($rows = $rec2->fetch()) {
                    
                    if($rows['num_vol_retour'] != $rows['num_vol_aller'] ){ ?>
                    <table>
                        <tr>
                            <th><?php echo $rows['nom_aer_dep'] ?> a <?php echo $rows['nom_aer_arr']; ?></th>
                        </tr>
                        <tr>
                            <td>Vol <?php echo $rows['num_vol'] ?></td>
                            <td class="pl-4">Confirmé</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td class="pl-4"><?php echo $rows['date_depart']; ?></td>
                        </tr>
                        <tr>
                            <td>Départ : <?php echo $rows['heure_depart']; ?></td>
                            <td class="pl-4" colspan="2"><?php echo $rows['nom_aer_dep']; ?></td>
                        </tr>
                        <tr>
                            <td>Arrivée : <?php echo $rows['heure_arrivee']; ?></td>
                            <td class="pl-4" colspan="2"><?php echo $rows['nom_aer_arr']; ?></td>
                        </tr>
                        <tr>
                            <td>Appareil</td>
                            <td class="pl-4"><?php echo $rows['nom_avion']; ?></td>
                        </tr>
                        <tr>
                            <td>Dernier enregistrement</td>
                            <td class="pl-4">avant le vol</td>
                        </tr>
                        <tr>
                            <td>Type de tarif</td>
                            <td class="pl-4"><?php echo $rows['classe']; ?></td>
                        </tr>
                    </table>

                </ul>
                <ul>
<?php $reqE = $pdo->prepare('SELECT * from vol v , escale e
                where  e.num_vol=?
                and e.num_vol= v.num_vol


 ');
            $reqE->execute([$num_volA]);
            if ($ro = $reqE->fetch()) {?>
                 <table class="mt-3">
        <tr><th>Escale</th></tr>
        <tr><td>Aéroport :<?php echo $ro['nom_aeroport']; ?> </td><td class="pl-4" colspan="2"></td></tr>
        <tr><td>Date <?php echo $ro['date_depart']; ?>:</td><td class="pl-4"></td></tr>
        <tr><td>Heure :<?php echo $ro['heure_depart']; ?> </td><td class="pl-4" colspan="2"></td></tr>
            </table>

                </ul>
                <?php }?>
            </ul>
            <ul>
        <table>
   <?php   } ?>


                <ul type="none">
           <h4 class="mt-4">Détails de paiement</h4>

                    <li>Total pour tous les voyageurs :<?php echo $row['montant'] ?> DZZ</li>
                    <li>Paiement :  <?php echo $row['montant'] ?> DZZ</li>
                    <li>Type de tarif :  <?php echo $row['classe'] ?></li>
                    <li>Billet : billet électronique (Passeport sélectionné en tant que document d'identifiaction)</li>


                </ul>

                <ul type="none">
                    <h5 class="mt-4">Note</h5>
                    <ul type="disc">
                        <li>Le choix du siège, repas et bagages se feront lors de l'enregistrement qui aura lieu 48h avant la date départ du vol sur notre site.</li>
                    </ul>
                </ul>

              <img src="qrcode3.png" alt="" style=" display: block;
  margin-left: auto;
  margin-right: auto;">




        </div>
   <?php    }} }}?>
   
     </div>

   <div class="mb-5 mt-0 btn btn-primary btn-block btn-lg py-2 mt-4 obtenir d-print-none" onclick="printDiv('print')" style="margin: 30px auto;max-width:400px">
                <strong>Obtenir le billet</strong>
            </div>
    </div>
            </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="js/jspdf.js"></script>
    <script src="js/jquery-2.1.3.js"></script>
    <script src="js/pdfFromHTML.js"></script>
        <script src="js/jquery.min.js"></script>
 
        <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
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