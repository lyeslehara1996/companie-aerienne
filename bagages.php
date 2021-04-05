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
<?php    
  require('php/bagage-enregistrement.php');
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
    <!-- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
    <!-- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="css/compte.css">
    <link rel="stylesheet" href="css/bagages.css">
    <link rel="stylesheet" href="css/guide.css">
    <link rel="stylesheet" href="css/input.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- -->
    <title>Bagages</title>
</head>
<body>
<div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>

  <style>
    .row-hl
    {
      background: #f4f4f4;
    }
    .item-hl
    {
      border: 1px solid #333;
    }
    .breadcrumb {

    /*centering*/
    width: 100%;
    display: inline-block;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.35);
    overflow: hidden;
    border-radius: 5px;
    height: 100px;
    /*Lets add the numbers for each link using CSS counters. flag is the name of the counter. to be defined using counter-reset in the parent element of the links*/
    counter-reset: flag; 
}

.breadcrumb a {
    text-decoration: none;
    outline: none;


    display: block;
    float: left;
    font-size: 14px;
    line-height: 36px;
    color: white;
  
    padding: 15px 50px 15px 40px;
    background: #365390;
   
    position: relative;
}

.breadcrumb a.active{
    background: #f9a602;
    cursor: auto;
    color: white;
    font-weight: 700;
    color:  #365390;;

}
.breadcrumb a.active:after {
    background: #f9a602;
     box-shadow: 
        2px -2px 0 2px rgba(0, 0, 0, 0.1), 
        3px -3px 0 2px rgba(255, 255, 255, 0.1);

    border-radius: 0 5px 0 50px;


}


.breadcrumb a:after {
    content: '';
    position: absolute;
    top: 0; 
    right: -32px; 
    width: 69px; 
    height: 67px;
 
    transform: scale(0.680) rotate(45deg);

    z-index: 1;
 
    background: #365390;
  

    box-shadow: 
        2px -2px 0 2px rgba(0, 0, 0, 0.1), 
        3px -3px 0 2px white;

    border-radius: 0 5px 0 50px;
}

.breadcrumb a:last-child:after {
    content: none;
}
  </style>

<?php include "navigation.php";?>
  
<!--page en cours-->
<div class="breadcrumb text-center text-white d-inline d-sm-none ">

        <a href="#" class=" col-12 active mb-5" style="margin-top: -10px" >Bagages</a>

</div>

<div class="breadcrumb text-center d-none d-sm-block">
    <a href="#" class=" col-3">Repas</a>
    <a href="#" class="col-3 active" >Bagages</a>
    <a href="#" class=" col-3 ">Siège</a>
        <a href="#" class=" col-3 ">Paiement</a>

</div>

<?php 
$num_Reservation=$_SESSION['num_Reservation'];
$nom_Passager=$_SESSION['nom_Passager']; 
$query = "SELECT p.nom,p.prenom,p.date_nais,v.date_depart,v.heure_depart,v.nom_aer_arr,v.nom_aer_dep FROM passager p,vol v,reservation r,siege s WHERE p.num_res=r.num_res and (r.num_vol_aller=v.num_vol or r.num_vol_retour=v.num_vol )and p.num_res= '".$num_Reservation."' and p.nom='".$nom_Passager."' " ;
      $result = mysqli_query($conn,$query);
      if($row =mysqli_fetch_assoc($result))
      { 
        $nom_aer_dep=$row['nom_aer_dep'];
        $nom_aer_arr=$row['nom_aer_arr'];

        $_SESSION['nom_aer_dep']=$nom_aer_dep;
        $_SESSION['nom_aer_arr']=$nom_aer_arr;

      }     
  
?>




<!--bagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagages-->
<div class="aller_retour col-12 text-center ">
    <a href="#" class=" col-6 active" style="height: 50px;" ><?php echo $_SESSION['nom_aer_dep'];?><i class='fas fa-plane ml-2 mr-2'></i><?php echo $_SESSION['nom_aer_arr'] ; ?></a>
    <a href="#" class=" col-6" style="cursor: auto;height: 50px;"><i class='fa fa-user ml-2 mr-2'></i>Nom passager :  <?php echo $_SESSION['nom_Passager'];?></a>

</div>
<div class="container " >
  <ul type="disc" >
    <li >Par défaut, vous avez droit à 3 bagages (1 en cabine, 1 en soute, 1 sac) Si vous souhaitez plus de bagages, veuillez le préciser ci-dessous.</li>
    <li>À l'aéroport vous aurez vos étiquettes bagages finales.</li>
  </ul>
</div>


<form action="bagages.php" method="post">
<div class="row col-12">
  <div class="container">
    <div class="row mt-4">
      <div class="card-deck">
        <div class="card">
          <div class="card-body text-center">
            <img src="img/bagages/bagmain.png" alt="valise" style="width:40%">
              <div class="card-footer text-center">
                <p >Bagage à main</p>
                  <div class="number-input">
                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),somme()"  ></button>
                      <input class="quantity" min="0" max="3"  id="Bagage_main" name="Bagage_main" value="0" type="number">
                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),somme()" class="plus" ></button>
                  </div>
              </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body text-center">
            <img src="img/bagages/soutee.png" alt="soute" style="width:26%">
              <div class="card-footer text-center">
                <p>Bagage en soute</p>
                <div class="number-input">
                  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),somme()" ></button >
                    <input class="quantity" min="0" max="3" id="Bagage_soute" name="Bagage_soute" value="0" type="number">
                  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),somme()" class="plus" ></button>
                </div>
              </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body text-center">
            <img src="img/bagages/sac.png" alt="sac" style="width:40%">
              <div class="card-footer text-center">
                <p>Sac</p>
                <div class="number-input">
                  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown(),somme()" ></button >
                    <input class="quantity" min="0" max="3"  id="Bagage_sac" name="Bagage_sac" value="0" type="number" >
                  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp(),somme()" class="plus" ></button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer mt-3" style="background-color:#DCDCDC;padding-top:20px;padding-bottom:15px;">
      <div class="row" >
        <div class="col-sm-8">
          <p class="text-right" style="font-size:19px;color:#365390">Le montant de cette opération :
            <input id="sum1" type="text" value="0"> DZD</p>
        </div>
      <div class="col-sm-4">
        <!--<button type="submit" class="btn btn-primary continuer1 mr-5 ml-5" name="valider">Valider
        </button>--> 
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="row  salaire">
  <div class="col-md-8 col-12 ">
     <h3 class=" ml-5 mr-4">Le montant de vos bagages est de : <input id="sum2" type="text" style="color: white" value="0"> DZD</h3>
  </div>
  <div class="col-md-4 col-12 mt-4">
    <button type="submit" class="btn btn-primary float-right continuer mr-5" name="continuer">Continuer</button> 
  </div>
</div>
</form>
<script>
  function somme()
  {
    var Bagage_soute,Bagage_main,Bagage_sac,sum1,sum2;

    Bagage_soute=Number(document.getElementById("Bagage_soute").value);
    Bagage_main=Number(document.getElementById("Bagage_main").value);
    Bagage_sac=Number(document.getElementById("Bagage_sac").value);

    var NBagage_soute,NBagage_main,NBagage_sac;


    NBagage_soute=Bagage_soute*4000;
    NBagage_main=Bagage_main*2000;
    NBagage_sac=Bagage_sac*1000;
    
                   
    sum1 = NBagage_soute + NBagage_main + NBagage_sac;
    sum2 = NBagage_soute + NBagage_main + NBagage_sac;
    
    document.getElementById("sum1").value = sum1;
    document.getElementById("sum2").value = sum2;
  
  }
</script>
<style>
  input[type=text],input[type=number]
  {
    width: 70px;
    height: 35px;
    padding: 0;
    font-family: Lato;
    font-weight: 700;
    font-size: 1.2em;
    text-transform: uppercase;
    text-align: center;
    border: 2px transparent solid;
    background: none;
    outline: none;
    pointer-events: none;
    background-color: transparent;
  }
  input[type=text],input[type=number]::-webkit-inner-spin-button, input[type=text]::-webkit-outer-spin-button
  {
      -webkit-appearance: none;
  }
</style>
<!--bagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagagesbagages-->























<div class="container bg-white mt-4 mb-5 pl-5 pb-3 shadow">
<div class="row ">
        <h3 class=" mt-4" style="color: #0f1b54"><strong>Règles relatives aux bagages</strong></h3><br>
        </div>
        <div class="card">
  <div class="row ">
 <div class="col-12">
  
<div class="card-deck mt-3 mb-3">
  <div class="col-md-7 ">
  <div class="card">
    <div class="card-body ">
      <div class="row">
            <h3 class="card-text" style="color: #0f1b54"><strong>Bagages en cabine</strong></h3>
      </div>
      <div class="row">
        <div class="col">
    <img src="img/bagages/bagmain.png" alt="valise" style="width:80%"><br>
    <small>Poches, roues et poignées comprises</small>
    <h5 class="card-text" style="color: #0f1b54">Poids maximum</h5>
    <p class="card-text">Classe Affaire : 18 Kg<br>
        Classe Economique : 12 Kg
    </p>
    <h5 class="card-text" style="color: #0f1b54">Dimensions</h5>
        <p class="card-text">55 * 35 * 25 cm </p>
        </div>
        <div class="col">

    <img src="img/bagages/sac.png" alt="sac" style="width:80%">
    <h5 class="card-text mt-4" style="color: #0f1b54">Poids maximum</h5>
    <p class="card-text">Classe Affaire : 14 Kg<br>
        Classe Economique : 8 Kg
    </p>
    <h5 class="card-text" style="color: #0f1b54">Dimensions</h5>
        <p class="card-text">40 * 30 * 15 cm </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-5 col-sm-6">
  <div class="card">
    <div class="card-body ">
       <div class="row mt-1">
            <h3 class="card-text " style="color: #0f1b54"><strong>Bagages en soute</strong></h3>
      </div>
     <img src="img/bagages/soutee.png" alt="soute" style="width:38%">
    <h5 class="card-text mt-4" style="color: #0f1b54">Poids maximum</h5>
    <p class="card-text">Classe Affaire : 32 Kg<br>
        Classe Economique : 23 Kg
    </p>
    <h5 class="card-text" style="color: #0f1b54">Dimensions</h5>
        <p class="card-text">longueur + largeur + hauteur= 158 cm </p>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>



        
     
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>

    

</body>
</html>
<?php  
  ob_end_flush();
?>
                  

