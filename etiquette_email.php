<?php 
  session_start();
?>
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
<?php 
    //include "php/recuperer_info_Cart.php";
    require "php/recuperer_info_Cart.php";
?>
  <?php
  $num_vol=$_SESSION['num_vol'];
  $nb1=$_SESSION['Bagage_soute'];
  $nb2=$_SESSION['Bagage_main'];
  $nb3=$_SESSION['Bagage_sac'];
  $nombre_de_bloc=$nb1+$nb2+$nb3;

  //while ($nombre_de_bloc > 0){
  

 
    echo'

    <div id="print-et">
      <div class="container etiquette">
        <div class="card" style="border-left: 3px solid #0f1b54;border-right: 3px solid #0f1b54;">
          <div class="card-header text-center">
            <img src="img/LogoFinal.svg" width="150" height="50">
            
          </div>
     <br><br><br><br><br><br>
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
  //$nombre_de_bloc--; }
  

  
?>