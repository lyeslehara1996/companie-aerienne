<?php 
session_start();
 $adulte =$_SESSION['id'];
$montant = $_SESSION['id4'];
require "bd.php";



$email= "SELECT   email  FROM client WHERE num_client = (SELECT MAX(num_client) FROM client";
 $con = mysqli_query($connection, $email);
    while ($row = mysqli_fetch_assoc($con)) {

$eemail = $row['email'];
        
    }

use Endroid\QrCode\Response\QrCodeResponse;

    
if (isset($_POST['valiider'])) {

    $select_reser = "SELECT`num_res` , num_client FROM reservation WHERE `num_client` = (SELECT MAX(`num_client`) FROM reservation) ";
    $con = mysqli_query($connection, $select_reser);
    while ($row = mysqli_fetch_assoc($con)) {
        $num_reservation = $row['num_res'];
   
require_once 'vendor/autoload.php' ; 
   
    $cqr=$num_reservation;
$qrCode = new Endroid\QrCode\QrCode();

$qrCode ->setText($cqr);
$qrCode ->setSize(100);


//header('Content-Type: '.$qrCode->getContentType());
//echo $qrCode->writeString();

//$response = new QrCodeResponse($qrCode);
$qrCode->writeFile(__DIR__.'/qrcode3.png');
}
    
    $num = $_POST['numero'];
    $date = $_POST['date'];
    $dat = date('Y', strtotime($date));
    $dat1 = date('m', strtotime($date));
    $pwd = $_POST['pwd'];
    
    
    
    if (!empty($num) && !empty($date) && !empty($pwd)) {
        if (isset($num)  && isset($date) && isset($pwd)) {
    
            
            
                //les requete sql
            $reponse1 = ("SELECT num_carte from carte_banquaire where num_carte='$num'");
            $reponse2 = ("SELECT MONTH(date_expiration) ,YEAR(date_expiration)
        FROM carte_banquaire
        WHERE  MONTH(date_expiration)='$dat1'
        AND YEAR(date_expiration)='$dat' AND num_carte='$num'");
        
            $reponse3 = ("SELECT cryptogramme from carte_banquaire where cryptogramme='$pwd' AND num_carte='$num'");
      
            $con = mysqli_query($connection, $reponse1)   ;
            $row1 = mysqli_num_rows($con);
    
            $con2 = mysqli_query($connection, $reponse2)   ;
            $row2 = mysqli_num_rows($con2);
    
            $con3 = mysqli_query($connection, $reponse3)   ;
            $row3 = mysqli_num_rows($con3);
            if ($row1<=0) {
                $errors['num_carte']='numero de carte est incorrecte . ';
                header('location:paiementsimpAFF.php');
                exit();
            } elseif ($row2<=0) {
                $errors['date'] ='la date d expiration est incorrect  ';
                header('location:paiementsimpAFF.php');
                exit();
            } elseif ($row3<=0) {
                $errors['nom']='le cryptogramme  est incorrect  ';
                header('location:paiementsimpAFF.php');
                exit();
            }
        }
    } else {
        header('location:paiementsimpAFF.php');
        exit();
    }
    
    
 
    
    if (empty($errors)) {
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>billet</title>
        <link   href="img/dessinFINAL.png"/>
   <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
    <link rel="stylesheet" type="text/css" href="css/loading.css">

        <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>


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
    <!-- partial:index.partial.html -->
<?php require "navigation.php";
        $nnumero = $_POST['numero'];
        $dateExp = $_POST['date'];

        $code = $_POST['pwd'];

        $requete = "SELECT  num_carte,  montant FROM carte_banquaire WHERE num_carte='$nnumero'
and cryptogramme='$code'
";
        $res = mysqli_query($connection, $requete);
        if (!empty($res = mysqli_query($connection, $requete))) {
            $row = mysqli_num_rows($res);
   
            if ($row = mysqli_fetch_assoc($res)) {
                if ($row['montant'] < $montant) {
                    $reste = $row['montant'];
                    $_SESSION['reste'] = $reste;

                    $rester = $_SESSION['reste'];

                    $update = "UPDATE carte_banquaire SET montant ='" . $rester . "' where
                            num_carte='" . $Numero_carte . "'and cryptogramme='" . $cryptogramme . "'";
                    $res = mysqli_query($link, $update);
                    echo "<script type='text/javascript'>
                            alert('Votre montant est inssffisant');
                            document.location.href = 'paiement.php';
                        </script>";
                } else {
                    $num_carte= $row['num_carte'];
          
                    $reste = $row['montant'] - $montant;

                    $_SESSION['reste'] = $reste;
                    $rester = $_SESSION['reste'];

                    $update = "UPDATE carte_banquaire SET montant='$rester' where num_carte='$nnumero'
  and cryptogramme='$code' ";
                    $qus = $connection->query($update);


          
          
                    $total = 0;
                    if ($qus == 1) {
                        $select_reser = "SELECT num_res FROM reservation WHERE num_client = (SELECT MAX(num_client) FROM reservation)
";
                        $con = mysqli_query($connection, $select_reser);
                        while ($row = mysqli_fetch_assoc($con)) {
                            $num_reservation = $row['num_res'];
         
                            $updateR= "UPDATE reservation SET num_carte='$num_carte' where num_res='$num_reservation'";
                            $qus = $connection->query($updateR);
              
                            $updateF= "UPDATE facture_reservation SET etat_facture='payer' where num_res='$num_reservation'";
                            $qus = $connection->query($updateF);
          
                            $select = "  SELECT  revenu from compagnie";
                            $reslt = mysqli_query($connection, $select);
                            while ($rows = mysqli_fetch_assoc($reslt)) {
                                if ($rows['revenu'] == 0) {
                                    $total = 0;
                                    $total = $total + $montant;

                                    $comp = "UPDATE compagnie SET revenu='$total' ";
                                    $quss = $connection->query($comp);
                                } else {
                                    $total = $rows['revenu'] + $montant;
                                    $comp = "UPDATE compagnie SET revenu='$total' ";
                                    $quss = $connection->query($comp);
                                }
                            }
                        }
                    }
                }
            }
        } ?>




                       
                       
    
    <div class="col-12 mb-lg-0 mx-auto mt-5">
        <div class=" bg-white p-5 mb-5  shadow">

            <div id="print" class="">

                <div class="text-center comp">
                    <p>Merci d'avoir choisi <a href="#" target="_blank">Golden Eagle</a><br> Vous pouvez vérifier vos informations de réservation ci-dessous
                    </p>
                </div>
                 <?php
require "bd.php";
               

        $num_volA = $_SESSION['num_vola'];
        $num_volR = $_SESSION['num_volr'];
        $select_reser = "SELECT`num_res` , num_client FROM reservation WHERE  num_client = (SELECT MAX(`num_client`) FROM reservation) ";
        $con = mysqli_query($connection, $select_reser);
        while ($row = mysqli_fetch_assoc($con)) {
            $num_reservation = $row['num_res'];
            $num_client =$row['num_client'];
            $_SESSION['prn']=$num_reservation;
            require "bdpdoo.php";
            $rec=$pdo->prepare('SELECT * FROM passager p , vol v , reservation r , client c, avion a WHERE p.num_res=r.num_res AND r.num_client=c.num_client AND r.num_res=? AND r.num_client=? AND  r.num_vol_aller=? and v.num_vol=r.num_vol_aller AND v.matricule_avion=a.matricule_avion
');
            $rec->execute([$num_reservation,$num_client,$num_volA]);
            while ($row=$rec->fetch()) {
                // $num_reserva= $row['num_res'];
            
                // $_SESSION['prn']=$num_reserva; ?>
               
                <ul class="mt-4" type="none">
                    <li>Numéro de réservation:<?php echo $row['num_res'] ?></li>
                    <li>Etat de voyage:"confirmé"</li>
                    <ul type="disc">
                        <li>Votre voyage est confirmé et la réservation est garantie.</li>
                        <li>Nous vous conseillons de noter le numéro de réservation.</li>
                   
                    </ul>


                   
                    <h4 class="mt-4">Informations sur le voyageur</h4>
                   
          
                   <ul>
                   
                        <li><?php echo($row['nom'] . " " . $row['prenom']) ?></li>
                      
                    </ul>
                    <li class="mt-4">Informations sur les personnes à contacter</li>
                    <p class="mt-2">Golden Eagle ne fait aucun démarchage téléphonique.Vos données téléphoniques ne sont colléctées qu'aux fins de la réservation.</p>
                    <li>E-mail :  <a class="ml-5" href="https://mail.google.com/" target="_blank"><?php echo $row['email']; $adr = $row['email'];?></a></li>
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
                                
                                <?php   echo $row['nom_aer_arr'] ; ?></th>
                          
                        </tr>
                        <tr>
                            <td>Vol <?php echo $row['num_vol']?> </td>
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
<?php            $reqE=$pdo->prepare('SELECT * from vol v , escale e 
                where  e.num_vol=?
                and e.num_vol= v.num_vol


 ');
                $reqE->execute([$num_volA]);
                if ($ro=$reqE->fetch()) {  ?>         
                 <table class="mt-3">
        <tr><th>Escale</th></tr> 
        <tr><td>Aéroport :<?php echo $ro['nom_aeroport'];?> </td><td class="pl-4" colspan="2"></td></tr>
        <tr><td>Date <?php echo $ro['date_depart'];?>:</td><td class="pl-4"></td></tr> 
        <tr><td>Heure :<?php echo $ro['heure_depart'];?> </td><td class="pl-4" colspan="2"></td></tr>
            </table>
       
                </ul>
                  <?php } ?>
            </ul>
            <ul>
        <table>
       
                   
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
   <?php
            }
        }
    }
}?>
 
    </div>
    <div class="mb-5 mt-0 btn btn-primary btn-block btn-lg py-2 mt-4 obtenir d-print-none d-print-none" onclick="printDiv('print')" style="margin: 30px auto;max-width:400px">
                <strong>Obtenir le billet</strong>
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

<?php
use Dompdf\Dompdf;
use Dompdf\Options;
require_once 'vendor/autoload.php' ; 

ob_start();
include "BilletASAfSansH.php";
$html = ob_get_clean();
//ob_end_clean();

define('DOMPDF_ENABLE_PHP', true);

$options = new \Dompdf\Options();
$options->setIsPhpEnabled(true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A2', 'portrait');
$dompdf->render();
//$dompdf->stream('hello.pdf');

 $pdf=$dompdf->output() ;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer;
$mail -> charSet = "UTF-8";

$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'goldeneagle.officiel@gmail.com'; // email
$mail->Password = 'geisi2020'; // password
$mail->setFrom('goldeneagle.officiel@gmail.com', 'Golden Eagle'); // From email and name
$mail->addAddress($adr, ''); // to email and name
$mail->Subject = 'Billet d\'avion';
$mail->msgHTML('Bonjour ci-joint votre billet d\'avion.'); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->AddStringAttachment($pdf, 'Billet.pdf'); 
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Un mail a bien été envoyé à votre boite mail";
}