<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Carte Embarquement</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">



.center {

display: flex;
margin: 50px;
  height: 565px;
  width:1600px;
  background: #fff;
  border-radius: 3px;
  border:solid; 
  overflow: hidden;

}

.profile {
  float: left;
  width: 540px;
  height: 320px;
  text-align: center;
  padding-top: 87px;
}
.profile .image {
  position: relative;
  width: 70px;
  height: 70px;
  margin: 10px auto 0 auto;
}


.profile .name {
	color: #093852;
  font-size: 20px;
  font-weight: 700;
  margin-top: 10px;
  color: #093852;
}
.profile .comp {
	color: #365390;
font-weight: 700;
  font-size: 14px;
  line-height: 15px;
}
.profile .actions {
  margin-top: 30px;
  margin-left: 10px;
}


.stats {
  float: left;
}
.stats .box {
  box-sizing: border-box;
  width: 220px;
  height: 330px;
border-left: dotted;
  text-align: center;
  padding-top: 102px;

}


label{
	margin-bottom: 0;
}
</style>
<?php 
  include "php/recuperer_info_Cart.php";
?>
</head>
<body>



		  <div class="center col-12 mx-auto" >
    
		<div class="profile">
			<div class="image">
				
				<img src="img/LogoFinal.svg" width="150" height="70">
			</div>
			
			<div class="name">Carte Embarquement</div>
			<div class="comp"><label ><?php echo $nom_aer_dep;?></label><i class=" mx-2 fas fa-plane"></i><label style="    margin-left: 11px;"><?php echo $nom_aer_arr;?></label></div>
			
			<div class="row actions">
				<table class="col-6">
					<tr><th>Nom</th><td><?php echo $nom;echo "&nbsp;&nbsp;";echo $prenom;?></td></tr>
					<tr><th>Siege</th><td><?php echo $code_siege;echo $zone_siege;?></td></tr>
					<tr><th>Date</th><td><?php echo $date_depart;?></td></tr>
					
				</table>
				<div class="col-6" style="margin-top: -91px;
    margin-left: 264px;
">
					<div>Heure:<label><?php echo $heure_depart;?></label></div>
					<div class="mt-2"><?php 
                echo'<img src="qrcode.png" width="60" height="60">';
            ?> </div>
					<div><label></label></div>

				</div>
			</div>
			<div class="text-center"><label class="text-muted display-6"> Les portes se ferment 30min avant l'heure du vol.</label></div>
		</div>
		
		<div class="stats">
			<div class="box">
				<div class="image">
				
				<img src="img/LogoFinal.svg" width="100" height="50">
			</div>
			
			<div class="name">Carte Embarquement</div>
		<div class="comp" style="margin-top: 8px;"><label ><?php echo $nom_aer_dep;?></label><i class=" mx-2 fas fa-plane"></i><label style="margin-left: 25px;"><?php echo $nom_aer_arr;?></label></div>
	
		
				<table class="mt-4 ml-4">
					<tr><th><?php echo $nom;echo "&nbsp;&nbsp;";echo $prenom;?></th></tr>
					<tr><th><?php echo $code_siege;echo $zone_siege;?></th></tr>
					<tr><th><?php echo $date_depart;?></th><td><label><?php echo $heure_depart;?></label></td></tr>
					
				</table>
				<div class=" ">
				
					<div class=""><?php 
                echo'<img src="qrcode.png" width="60" height="60">';
            ?> </div>
					<div><label></label></div>

				</div>
		
	
			
			</div>
		</div>
  </div>

</body>
</html>