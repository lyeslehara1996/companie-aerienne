<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
   <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!---->
    <link rel="stylesheet" href="css/style.css">
    <!---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!---->
    <link rel="stylesheet" href="css/style.css">
    <!---->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <style type="text/css">
      .center
      {
        display: flex;
        margin: 50px;
        height: 320px;
        width:810px;
        background: #fff;
        border-radius: 3px;
        border:solid; 
        overflow: hidden;
        box-shadow: 10px 10px 15px 0 rgba(0, 0, 0, 0.3);
      }
      .profile
      {
        float: left;
        width: 540px;
        height: 320px;
        text-align: center;
      }
      .profile .image
      {
        position: relative;
        width: 70px;
        height: 70px;
        margin: 10px auto 0 auto;
      }
      .profile .name
      {
      	color: #093852;
        font-size: 20px;
        font-weight: 700;
        margin-top: 10px;
        color: #093852;
      }
      .profile .comp 
      {
      	color: #365390;
        font-weight: 700;
        font-size: 14px;
        line-height: 15px;
      }
      .profile .actions 
      {
        margin-top: 30px;
        margin-left: 10px;
      }
      .stats
      {
        float: left;
      }
      .stats .box 
      {
        box-sizing: border-box;
        width: 220px;
        height: 330px;
        border-left: dotted;
        text-align: center;
        padding-top: 10px;
      }
      label
      {
  	   margin-bottom: 0;
      }
    </style>
    <style type="text/css">
      .etiquette
      {
        margin-top: 5%;
        margin-bottom: 5%;
        margin-left: auto;
        margin-right: auto;
        width: 25%;
      }
      .card
      {
        width: 300px;
        box-shadow: 0px 2px 5px rgba(0,0,0,.5);
      }
  </style>

    <script src="js/jspdf.js"></script>
    <!---->
    <script src="js/jquery-2.1.3.js"></script>
    <!---->
    <script src="js/pdfFromHTML.js"></script>
    <!---->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
      function printDiv(divName)
      {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
      }
      </script>

      <title>carte_embarq</title>
</head>
<body>
<!-- partial:index.partial.html -->
<?php include "navigation.php";?>
































<?php 
use Endroid\QrCode\Response\QrCodeResponse;

require_once 'php/vendor/autoload.php' ; 
include "php/recuperer_info_Cart.php";


$qrCode = new Endroid\QrCode\QrCode();

$cqr=$nom.' '.$prenom.' '.$date_depart;

$qrCode ->setText($cqr);
$qrCode ->setSize(100);


//header('Content-Type: '.$qrCode->getContentType());
//echo $qrCode->writeString();

//$response = new QrCodeResponse($qrCode);
$qrCode->writeFile(__DIR__.'/qrcode.png');



 ?>












<!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart-->
<?php 
  //include "php/recuperer_info_Cart.php";
  require "php/recuperer_info_Cart.php";
?>
<div class=" text-center mx-auto mt-1 d-print-none" >
  <!-- Pricing Table-->
  <div class=" col-12 mb-5 mb-lg-0">
    <div class=" bg-white p-5  shadow">
      <div class="comp">
        <label ><?php echo $nom_aer_dep;?></label><i class=" mx-2 fas fa-plane"></i>
        <label><?php echo $nom_aer_arr;?></label>
			</div>
      <div class="row mt-4">
				<table class="col-12 col-md-6 mt-2">
					<tr><th>Nom</th><td><?php echo $nom;echo "&nbsp;";echo $prenom;?></td></tr>
					<tr><th>Siege</th><td><?php echo $code_siege;echo $zone_siege;?></td></tr>
		    	<tr><th>Date</th><td><?php echo $date_depart;?></td></tr>	
				</table>
				<div class="col-12 col-md-6 mt-2">
					<div>Heure:<label><?php echo $heure_depart;?></label></div>
					<div class="mt-2">
            <?php 
                echo'<img src="qrcode.png" width="60" height="60">';

            ?>      
          </div>
					<div><label>
                  
                </label>
          </div>
				</div>
			</div>
      <button class="btn btn-primary  p-2 shadow btncard my-3" onclick="printDiv('print')">Obtenir Carte d'embarquement</button>
      <div class=""></div>
      <button class="btn btn-primary  p-2 shadow btncard my-3" onclick="printDiv('print-et')">Obtenir l'étiquette bagage</button>
    <form action="" method="post">  
      <div class="text-center" >
        <input type="text" name="email" placeholder="Saiser votre email">
        <button type="submit"  class="btn btn-primary btn-sm" >Envoyez </button>
      </div>
    </form>
  <?php
use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['email']))
{
    $email = $_POST['email'];




require_once 'php/vendor/autoload.php' ; 

ob_start();
include "Carte_Embarquement_email.php";
$html = ob_get_clean();
//ob_end_clean();

define('DOMPDF_ENABLE_PHP', true);

$options = new \Dompdf\Options();
$options->setIsPhpEnabled(true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A2','landscape');
$dompdf->render();
//$dompdf->stream('Carte_Embarquement.pdf');
$pdf=$dompdf->output() ;


ob_start();
include "etiquette_email.php";
$htmll = ob_get_clean();
//ob_end_clean();




$options = new \Dompdf\Options();
$options->setIsPhpEnabled(true);
$dompdfe = new Dompdf($options);
$dompdfe->loadHtml($htmll);
$dompdfe->setPaper('A2','landscape');
$dompdfe->render();
//$dompdf->stream('Carte_Embarquement.pdf');
$pdfe=$dompdfe->output() ;




require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer;
$mail->CharSet  = "UTF-8";

$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'goldeneagle.officiel@gmail.com'; // email
$mail->Password = 'geisi2020'; // password
$mail->setFrom('goldeneagle.officiel@gmail.com', 'Golden Eagle'); // From email and name
$mail->addAddress($email, 'Golden Eagle'); // to email and name
$mail->Subject = 'Carte d\'embarquement';
$mail->msgHTML("Vous pouvez telecharger des maintenant votre carte d\'embarquement"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
//$mail->addAttachment($pdf, 'CarteEmbarquement.pdf'); //Attach an image file
$mail->AddStringAttachment($pdf, 'Carte_embarquement.pdf'); 
$mail->AddStringAttachment($pdfe, 'Etiquettes.pdf'); 


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
    echo "Votre carte d'embarquement et votre étiquette bagage ont bien été envoyées à votre adresse mail";
}



}

  ?>

			<div class="text-center">
        <label class="text-muted display-6"> Les portes se ferment 30min avant l'heure du vol.</label>
      </div>
		</div>
  </div>
</div>


<div id="print" class="">
	<div class="center col-12 d-none d-print-block " >
    <div class="profile">
			<div class="image">
				<img src="img/LogoFinal.svg" width="150" height="70" >
			</div>
			<div class="name">Carte Embarquement</div>
			<div class="comp">
        <label><?php echo $nom_aer_dep;?></label><i class=" mx-2 fas fa-plane"></i>
        <label><?php echo $nom_aer_arr;?></label>
      </div>
			<div class="row actions">
				<table class="col-6">
					<tr><th>Nom</th><td><?php echo $nom;?></td></tr>
					<tr><th>Siege</th><td><?php echo $code_siege;echo $zone_siege;?></td></tr>
					<tr><th>Date</th><td><?php echo $date_depart;?></td></tr>
				</table>
				<div class="col-6 " >
					<div>Heure:<label><?php echo $heure_depart;?></label></div>
					<div class="mt-2">
            <?php 
                echo'<img src="qrcode.png" width="60" height="60">';
            ?> 
          </div>
					<div><label></label>
          </div>
				</div>
			</div>
			<div class="text-center"><label class="text-muted display-6"> Les portes se ferment 30min avant l'heure du vol.</label></div>
		</div>
		<div class="stats">
			<div class="box">
				<div class="image">
				  <img src="img/LogoFinal.svg" width="100" height="50" >
			  </div>
			  <div class="name">Carte Embarquement</div>
		    <div class="comp">
          <label ><?php echo $nom_aer_dep;?></label><i class=" mx-2 fas fa-plane"></i>
          <label><?php echo $nom_aer_arr;?></label>
        </div>
				<table class="mt-4 ml-4">
					<tr><th><?php echo $nom;echo "&nbsp;&nbsp;";echo $prenom;?></th></tr>
					<tr><th><?php echo $code_siege;echo $zone_siege;?></th></tr>
					<tr><th><?php echo $date_depart;?></th><td><label><?php echo $heure_depart;?></label></td>
          </tr>
				</table>
				<div class=" ">
					<div class="">
            <?php 
               echo'<img src="qrcode.png" width="60" height="60">';
                ?>
          </div>
					<div><label></label></div>
				</div>
			</div>
		</div>
  </div>
</div>


<?php
  $num_vol=$_SESSION['num_vol'];

  $nb1=$_SESSION['Bagage_soute'];
  $nb2=$_SESSION['Bagage_main'];
  $nb3=$_SESSION['Bagage_sac'];
  $nombre_de_bloc=$nb1+$nb2+$nb3;

  while ($nombre_de_bloc > 0)
  {
  

 
    echo'

    <div id="print-et" class="d-none d-print-block">
      <div class="container etiquette">
        <div class="card" style="border-left: 3px solid #0f1b54;border-right: 3px solid #0f1b54;">
          <div class="card-header text-center">
            <img src="img/LogoFinal.svg" width="150" height="50">
          </div>
     
          <div class="card-body">
            <div class="mt-3"><p><strong style="font-size: 18px;">NOM PASSAGER: </strong></p></div>
            <div><p style="font-size: 18px;margin-top: -10px;">'.$nom.'&nbsp'.$prenom.'</p></div>
            <div><p><strong style="font-size: 18px;">VOL N°: </strong>GA'.$num_vol.'</p></div>
            <div><p><strong style="font-size: 18px;">'.$nom_aer_dep.'<spaan style="margin-left: 100px;"> '.$nom_aer_arr.'</span></strong></p></div>
            <div><p style="font-size: 18px;margin-top: -10px;">'.$date_depart.'<spaan style="margin-left: 40px;">'.$heure_depart.'</span></p></div>

           
            <center><img src="qrcode.png" width="60" height="60"></center>     
      
           <center><label class="float-right" style="font-size:20px"></label></center>
          </div>
        </div>
      </div>
    </div>
  </div>';

  $nombre_de_bloc--;
  }
  if ($nombre_de_bloc==0) {
    echo'

    <div id="print-et" class="d-none">
      <div class="container etiquette ">
        <div class="card" style="border-left: 3px solid #0f1b54;border-right: 3px solid #0f1b54;">
          <div class="card-header text-center">
            <img src="img/LogoFinal.svg" width="150" height="50">
          </div>
     
          <div class="card-body">
            <div class="mt-3"><p><strong style="font-size: 18px;">NOM PASSAGER: </strong></p></div>
            <div><p style="font-size: 18px;margin-top: -10px;">'.$nom.'&nbsp'.$prenom.'</p></div>
            <div><p><strong style="font-size: 18px;">VOL N°: </strong>GA'.$num_vol.'</p></div>
            <div><p><strong style="font-size: 18px;">'.$nom_aer_dep.'<spaan style="margin-left: 100px;"> '.$nom_aer_arr.'</span></strong></p></div>
            <div><p style="font-size: 18px;margin-top: -10px;">'.$date_depart.'<spaan style="margin-left: 40px;">'.$heure_depart.'</span></p></div>

           
            <center><img src="qrcode.png" width="60" height="60"></center>     
      
           <center><label class="float-right" style="font-size:20px"></label></center>
          </div>
        </div>
      </div>
    </div>
  </div>';
  
  

  }
?>
<!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart-->
  
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