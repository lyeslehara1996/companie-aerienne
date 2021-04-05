<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">

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
    

      <title>carte_embarq</title>
</head>
<body>
   
















<!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart--><!--Cart-->
<?php 
  include "php/recuperer_info_Cart.php";
?>

<div id="print" class="" >
	<div >
    <div class="profile" >
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
				<div class="col-6 ">
					<div>Heure:<label><?php echo $heure_depart;?></label></div>
					<div class="mt-2">
            <?php 
                //echo'<img src="qrcode.png" width="60" height="60">';
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
				<table class="mt-4 col-6">
					<tr><th><?php echo $nom;echo "&nbsp;&nbsp;";echo $prenom;?></th></tr>
					<tr><th><?php echo $code_siege;echo $zone_siege;?></th></tr>
					<tr><th><?php echo $date_depart;?></th><td><label><?php echo $heure_depart;?></label></td>
          </tr>
				</table>
				<div class="col-6 ">
					<div class="">
            <?php 
                //echo'<img src="qrcode.png" width="60" height="60">';
                ?>
          </div>
					<div><label></label></div>
				</div>
			</div>
		</div>
  </div>
</div>



  
</body>
</html>