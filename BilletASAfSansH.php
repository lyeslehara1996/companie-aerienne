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
                        <li>Nous vous conseillons de noter le numéro de réservation ou d'imprimer ce courrier.</li>
                   
                    </ul>


                   
                    <h4 class="mt-4">Informations sur le voyageur</h4>
                   
          
                   <ul>
                   
                        <li><?php echo($row['nom'] . " " . $row['prenom']) ?></li>
                      
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
       
                                   <img src="qrcode3.png" alt="" style=" display: block;
  margin-left: auto;
  margin-right: auto;">
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


            

          

        </div>
   <?php
            }
        }
    }
}?>
 
    </div>
 

</body>

</html>