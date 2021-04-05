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
  $volvol=$_SESSION['vol'];

  if ($volvol=="Aller")
  {
    $num_vol=$_SESSION['num_vol_aller'];
  }
  if ($volvol=="Retour")
  {
    $num_vol=$_SESSION['num_vol_retour'];
  }

  $_SESSION['num_vol']=$num_vol;
  $query="select * from siegedispo sd , siege s WHERE num_vol=$num_vol and sd.code_siege=s.code_siege and 
      s.classe_siege='premiere' ";
  $result=mysqli_query($conn,$query); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Siege</title>
    	       <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
    <link   href="img/dessinFINAL.png"/>
    <link rel="stylesheet" type="text/css" href="css/loading.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!---->
    <link rel="stylesheet" href="css/style.css">
    <!---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!---->
    <link rel="stylesheet" href="css/style.css">
    <!---->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!---->
    <link rel="stylesheet" href="css/bagages.css">
    <!---->
    <link rel="stylesheet" href="css/guide.css">
    <!---->
    <link rel="stylesheet" type="text/css" href="css/Siege.css">
    <style>
      .my-custom-scrollbar
      {
        position: relative;
        width: 800px;
        height: 400px;
        overflow: auto;
      }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!---->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!---->
       <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>

    <script>
      var myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
      var ps = new PerfectScrollbar(myCustomScrollbar);
      var scrollbarY = myCustomScrollbar.querySelector('.ps.ps--active-y>.ps__scrollbar-y-rail');
      myCustomScrollbar.onscroll = function()
      {
        scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 400px; right: ${-this.scrollLeft}px`;
      }
    </script>
    <script>
      var allStates = $(".siege");
      allStates.on("click", function()
      {
        allStates.removeClass("on");
        $(this).addClass("on");
      });
      function valider()
      {
        console.log("test");
      }
    </script>
</head>
<body>
    <div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>
	<?php include "navigation.php";?>

    <div class="breadcrumb text-center text-white d-inline d-sm-none ">

        <a href="#" class=" col-12 active mb-5" style="margin-top: -10px" >Siège</a>

</div>

<div class="breadcrumb text-center d-none d-sm-block">
    <a href="#" class=" col-3">Repas</a>
    <a href="#" class="col-3 " >Bagages</a>
    <a href="#" class=" col-3 active">Siège</a>
        <a href="#" class=" col-3 ">Paiement</a>

</div>





<!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege-->
<div class="row col-12 my-2">
	 <h1 class="text-center titre mx-auto my-5">Choisir le siège</h1>
</div>
<div class="row col-12 bg-white ">
<div class="col-12 col-md-6 text-center my-custom-scrollbar my-custom-scrollbar-primary">
  <!--<img src="img/Avion.svg" alt="" class="w-100 " style="" >-->
    
<?php include "Partie/Partie1.php"; ?>
<!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 -->
<path class="siege occupe"
     d="m 190.09399,1354.891 h 14.975 v 17.5 h -14.975 z"
     id="1e"/>
                                                             

<path class="siege occupe"
     d="m 205.06396,1354.801 h 14.9712 v 17.59 h -14.9712 z"
     id="2e"/>

<path class="siege occupe"
     d="m 220.03516,1354.801 h 14.975 v 17.59 h -14.975 z"
     id="3e"/> 

<path class="siege occupe"
     d="m 134.897,1331.481 h 14.975 v 17.59 h -14.975 z"
     id="4e"/>

<path class="siege occupe"
     d="m 149.87199,1331.481 h 14.975 v 17.59 h -14.975 z"
     id="5e"/>

<path class="siege occupe"
     d="m 164.84698,1331.481 h 14.97501 v 17.59 h -14.97501 z"
     id="6e"/>

<path class="siege occupe"
     d="m 190.08896,1331.504 h 14.975 v 17.59 h -14.975 z"
     id="7e"/>

<path class="siege occupe"
     d="m 205.06015,1331.504 h 14.975 v 17.59 h -14.975 z"
     id="8e"/>

<path class="siege occupe"
     d="m 220.03516,1331.504 h 14.975 v 17.59 h -14.975 z"
     id="9e"/> 

<path class="siege occupe"
     d="m 245.286,1331.504 h 14.975 v 17.59 h -14.975 z"
     id="10e"/>

<path class="siege occupe"
     d="m 260.25781,1331.504 h 14.975 v 17.59 h -14.975 z"
     id="11e"/>

<path class="siege occupe"
     d="m 275.23047,1331.504 h 14.975 v 17.59 h -14.975 z"
     id="12e"/>

<path class="siege occupe"
     d="m 134.897,1308.2111 h 14.975 v 17.59 h -14.975 z"
     id="13e"/>

<path class="siege occupe"
     d="m 149.86874,1308.2111 h 14.975 v 17.59 h -14.975 z"
     id="14e"/>

<path class="siege occupe"
     d="m 164.84375,1308.2096 h 14.975 v 17.59 h -14.975 z"
     id="15e"/>

<path class="siege occupe"
     d="m 190.09399,1308.2096 h 14.975 v 17.59 h -14.975 z"
     id="16e"/>

<path class="siege occupe"
     d="m 205.06396,1308.2111 h 14.97501 v 17.59 h -14.97501 z"
     id="17e"/>

<path class="siege occupe"
     d="m 220.03671,1308.2096 h 14.975 v 17.59 h -14.975 z"
     id="18e"/>

<path class="siege occupe"
     d="m 245.286,1308.2096 h 14.975 v 17.59 h -14.975 z"
     id="19e"/>

<path class="siege occupe"
     d="m 260.25546,1308.2096 h 14.975 v 17.59 h -14.975 z"
     id="20e"/>

<path class="siege occupe"
     d="m 275.23047,1308.2111 h 14.975 v 17.59 h -14.975 z"
     id="21e"/>

<path class="siege occupe"
     d="m 134.89609,1284.9131 h 14.975 v 17.59 h -14.975 z"
     id="22e"/>

<path class="siege occupe"
     d="m 149.87109,1284.9131 h 14.975 v 17.59 h -14.975 z"
     id="23e"/>

<path class="siege occupe"
     d="m 164.84531,1284.9131 h 14.975 v 17.59 h -14.975 z"
     id="24e"/>

<path class="siege occupe"
     d="m 190.08896,1284.9131 h 14.975 v 17.59 h -14.975 z"
     id="25e"/>

<path class="siege occupe"
     d="m 205.06396,1284.9131 h 14.97501 v 17.59 h -14.97501 z"
     id="26e"/>

<path class="siege occupe"
     d="m 220.03897,1284.9131 h 14.975 v 17.59 h -14.975 z"
     id="27e"/>

<path class="siege occupe"
     d="m 245.286,1284.9131 h 14.975 v 17.59 h -14.975 z"
     id="28e"/>

<path class="siege occupe"
     d="m 260.25546,1284.9131 h 14.975 v 17.59 h -14.975 z"
     id="29e"/>

<path class="siege occupe"
     d="m 275.23047,1284.9131 h 14.975 v 17.59 h -14.975 z"
     id="30e"/>

<path class="siege occupe"
     d="m 134.897,1261.6171 h 14.975 v 17.59 h -14.975 z"
     id="31e"/>

<path class="siege occupe"
     d="m 149.87199,1261.6171 h 14.975 v 17.59 h -14.975 z"
     id="32e"/>

<path class="siege occupe"
     d="m 164.84531,1261.6171 h 14.975 v 17.59 h -14.975 z"
     id="33e"/>

<path class="siege occupe"
     d="m 190.08896,1261.6171 h 14.975 v 17.59 h -14.975 z"
     id="34e"/>

<path class="siege occupe"
     d="m 205.06396,1261.6171 h 14.97501 v 17.59 h -14.97501 z"
     id="35e"/>

<path class="siege occupe"
     d="m 220.03897,1261.6171 h 14.975 v 17.59 h -14.975 z"
     id="36e"/>

<path class="siege occupe"
     d="m 245.28282,1261.6171 h 14.975 v 17.59 h -14.975 z"
     id="37e"/>

<path class="siege occupe"
     d="m 260.25781,1261.6171 h 14.975 v 17.59 h -14.975 z"
     id="38e"/>

<path class="siege occupe"
     d="m 275.23282,1261.6171 h 14.975 v 17.59 h -14.975 z"
     id="39e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,1238.312 h 14.975 v 17.59 h -14.975 z"
     id="40e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.86875,1238.312 h 14.975 v 17.59 h -14.975 z"
     id="41e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,1238.312 h 14.975 v 17.59 h -14.975 z"
     id="42e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.094,1238.312 h 14.975 v 17.59 h -14.975 z"
     id="43e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,1238.3086 h 14.975 v 17.59 h -14.975 z"
     id="44e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03516,1238.312 h 14.975 v 17.59 h -14.975 z"
     id="45e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,1238.312 h 14.975 v 17.59 h -14.975 z"
     id="46e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,1238.312 h 14.975 v 17.59 h -14.975 z"
     id="47e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,1238.312 h 14.975 v 17.59 h -14.975 z"
     id="48e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,1215.0117 h 14.975 v 17.59 h -14.975 z"
     id="49e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,1215.0117 h 14.975 v 17.59 h -14.975 z"
     id="50e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,1215.0117 h 14.975 v 17.59 h -14.975 z"
     id="51e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,1215.012 h 14.975 v 17.59 h -14.975 z"
     id="52e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,1215.0117 h 14.975 v 17.59 h -14.975 z"
     id="53e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,1215.012 h 14.975 v 17.59 h -14.975 z"
     id="54e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,1215.012 h 14.975 v 17.59 h -14.975 z"
     id="55e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25547,1215.0117 h 14.975 v 17.59 h -14.975 z"
     id="56e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,1215.012 h 14.975 v 17.59 h -14.975 z"
     id="57e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,1191.7188 h 14.975 v 17.59 h -14.975 z"
     id="58e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.86875,1191.715 h 14.975 v 17.59 h -14.975 z"
     id="59e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,1191.715 h 14.975 v 17.59 h -14.975 z"
     id="60e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,1191.715 h 14.975 v 17.59 h -14.975 z"
     id="61e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,1191.715 h 14.975 v 17.59 h -14.975 z"
     id="62e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,1191.715 h 14.975 v 17.59 h -14.975 z"
     id="63e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.286,1191.7188 h 14.975 v 17.59 h -14.975 z"
     id="64e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.261,1191.7188 h 14.975 v 17.59 h -14.975 z"
     id="65e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,1191.715 h 14.975 v 17.59 h -14.975 z"
     id="66e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,1168.418 h 14.975 v 17.59 h -14.975 z"
     id="67e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,1168.422 h 14.975 v 17.59 h -14.975 z"
     id="68e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,1168.422 h 14.975 v 17.59 h -14.975 z"
     id="69e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,1168.418 h 14.975 v 17.59 h -14.975 z"
     id="70e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06396,1168.422 h 14.975 v 17.59 h -14.975 z"
     id="71e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,1168.418 h 14.975 v 17.59 h -14.975 z"
     id="72e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,1168.422 h 14.975 v 17.59 h -14.975 z"
     id="73e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,1168.418 h 14.975 v 17.59 h -14.975 z"
     id="74e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,1168.418 h 14.975 v 17.59 h -14.975 z"
     id="75e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.89609,1145.121 h 14.975 v 17.59 h -14.975 z"
     id="76e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.86875,1145.121 h 14.975 v 17.59 h -14.975 z"
     id="77e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,1145.121 h 14.975 v 17.59 h -14.975 z"
     id="78e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,1145.1172 h 14.975 v 17.59 h -14.975 z"
     id="79e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,1145.121 h 14.975 v 17.59 h -14.975 z"
     id="80e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03516,1145.121 h 14.975 v 17.59 h -14.975 z"
     id="81e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.286,1145.121 h 14.975 v 17.59 h -14.975 z"
     id="82e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,1145.121 h 14.975 v 17.59 h -14.975 z"
     id="83e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,1145.121 h 14.975 v 17.59 h -14.975 z"
     id="84e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,1121.82 h 14.975 v 17.59 h -14.975 z"
     id="85e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,1121.82 h 14.975 v 17.59 h -14.975 z"
     id="86e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,1121.82 h 14.975 v 17.59 h -14.975 z"
     id="87e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,1121.8207 h 14.975 v 17.59 h -14.975 z"
     id="88e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 205.06396,1121.8207 h 14.975 v 17.59 h -14.975 z"
    id="89e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,1121.82 h 14.975 v 17.59 h -14.975 z"
     id="90e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,1121.82 h 14.975 v 17.59 h -14.975 z"
     id="91e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,1121.8207 h 14.975 v 17.59 h -14.975 z"
     id="92e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,1121.82 h 14.975 v 17.59 h -14.975 z"
     id="93e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,1098.524 h 14.975 v 17.59 h -14.975 z"
     id="94e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.86875,1098.5156 h 14.975 v 17.59 h -14.975 z"
     id="95e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,1098.524 h 14.975 v 17.59 h -14.975 z"
     id="96e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,1098.524 h 14.975 v 17.59 h -14.975 z"
     id="97e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,1098.5156 h 14.975 v 17.59 h -14.975 z"
     id="98e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,1098.524 h 14.975 v 17.59 h -14.975 z"
     id="99e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,1098.5156 h 14.975 v 17.59 h -14.975 z"
     id="100e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25547,1098.524 h 14.975 v 17.59 h -14.975 z"
     id="101e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,1098.524 h 14.975 v 17.59 h -14.975 z"
     id="102e"/>     

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,1075.219 h 14.975 v 17.59 h -14.975 z"
     id="103e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.872,1075.219 h 14.975 v 17.59 h -14.975 z"
     id="104e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,1075.219 h 14.975 v 17.59 h -14.975 z"
     id="105e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,1075.219 h 14.975 v 17.59 h -14.975 z"
     id="106e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,1075.219 h 14.975 v 17.59 h -14.975 z"
     id="107e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,1075.219 h 14.975 v 17.59 h -14.975 z"
     id="108e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.286,1075.2148 h 14.975 v 17.59 h -14.975 z"
     id="109e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,1075.219 h 14.975 v 17.59 h -14.975 z"
     id="110e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23281,1075.219 h 14.975 v 17.59 h -14.975 z"
     id="111e"/>











   













































  <?php include"Partie/Partie2.php"; ?>
  <!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 -->
<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 134.89609,951.80615 h 14.975 v 17.59 h -14.975 z"
    id="112e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 149.87109,951.80615 h 14.975 v 17.59 h -14.975 z"
    id="113e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 164.84609,951.80615 h 14.975 v 17.59 h -14.975 z"
    id="114e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 190.08896,951.78125 h 14.975 v 17.59 h -14.975 z"
    id="115e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 205.069,951.785 h 14.975 v 17.59 h -14.975 z"
    id="116e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 220.044,951.785 h 14.975 v 17.59 h -14.975 z"
    id="117e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 245.28281,951.785 h 14.975 v 17.59 h -14.975 z"
    id="118e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 260.25781,951.785 h 14.975 v 17.59 h -14.975 z"
    id="119e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 275.23281,951.785 h 14.975 v 17.59 h -14.975 z"
    id="120e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 134.897,928.484 h 14.975 v 17.59 h -14.975 z"
    id="121e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 149.872,928.484 h 14.975 v 17.59 h -14.975 z"
    id="122e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 164.847,928.484 h 14.975 v 17.59 h -14.975 z"
    id="123e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 190.094,928.484 h 14.975 v 17.59 h -14.975 z"
    id="124e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 205.06396,928.484 h 14.975 v 17.59 h -14.975 z"
    id="125e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 220.03516,928.484 h 14.975 v 17.59 h -14.975 z"
    id="126e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 245.28281,928.484 h 14.975 v 17.59 h -14.975 z"
    id="127e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 260.25547,928.484 h 14.975 v 17.59 h -14.975 z"
    id="128e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 275.23047,928.484 h 14.975 v 17.59 h -14.975 z"
    id="129e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 134.897,905.183 h 14.975 v 17.59 h -14.975 z"
    id="130e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 149.86875,905.183 h 14.975 v 17.59 h -14.975 z"
    id="131e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 164.84531,905.17969 h 14.975 v 17.59 h -14.975 z"
    id="132e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 190.08896,905.17969 h 14.975 v 17.59 h -14.975 z"
    id="133e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 205.06016,905.17969 h 14.975 v 17.59 h -14.975 z"
    id="134e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 220.03672,905.17969 h 14.975 v 17.59 h -14.975 z"
    id="135e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 245.286,905.17969 h 14.975 v 17.59 h -14.975 z"
    id="136e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 260.25547,905.17969 h 14.975 v 17.59 h -14.975 z"
    id="137e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 275.23047,905.183 h 14.975 v 17.59 h -14.975 z"
    id="138e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 134.897,881.87945 h 14.975 v 17.59 h -14.975 z"
    id="139e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 149.86875,881.883 h 14.975 v 17.59 h -14.975 z"
    id="140e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 164.84375,881.87945 h 14.975 v 17.59 h -14.975 z"
    id="141e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 190.094,881.87945 h 14.975 v 17.59 h -14.975 z"
    id="142e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 205.06016,881.87945 h 14.975 v 17.59 h -14.975 z"
    id="143e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 220.03672,881.883 h 14.975 v 17.59 h -14.975 z"
    id="144e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 245.286,881.87945 h 14.975 v 17.59 h -14.975 z"
    id="145e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 260.25547,881.883 h 14.975 v 17.59 h -14.975 z"
    id="146e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 275.23047,881.87945 h 14.975 v 17.59 h -14.975 z"
    id="147e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 134.89609,858.582 h 14.975 v 17.59 h -14.975 z"
    id="148e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 149.86875,858.57812 h 14.975 v 17.59 h -14.975 z"
    id="149e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 164.84375,858.582 h 14.975 v 17.59 h -14.975 z"
    id="150e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 190.08896,858.57812 h 14.975 v 17.59 h -14.975 z"
    id="151e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 205.06016,858.582 h 14.975 v 17.59 h -14.975 z"
    id="152e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 220.03672,858.582 h 14.975 v 17.59 h -14.975 z"
    id="153e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 245.28281,858.57812 h 14.975 v 17.59 h -14.975 z"
    id="154e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 260.25547,858.57812 h 14.975 v 17.59 h -14.975 z"
    id="155e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,858.57812 h 14.975 v 17.59 h -14.975 z"
     id="156e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,835.281 h 14.975 v 17.59 h -14.975 z"
     id="157e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,835.28125 h 14.975 v 17.59 h -14.975 z"
     id="158e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,835.281 h 14.975 v 17.59 h -14.975 z"
     id="159e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 190.094,835.281 h 14.975 v 17.59 h -14.975 z"
    id="160e"
    inkscape:transform-center-x="-3.5355339"
    inkscape:transform-center-y="-0.35355339"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 205.06396,835.281 h 14.975 v 17.59 h -14.975 z"
    id="161e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 220.03672,835.28125 h 14.975 v 17.59 h -14.975 z"
    id="162e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 245.28281,835.28125 h 14.975 v 17.59 h -14.975 z"
    id="163e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 260.25547,835.281 h 14.975 v 17.59 h -14.975 z"
    id="164e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 275.23047,835.28125 h 14.975 v 17.59 h -14.975 z"
    id="165e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 134.897,811.98438 h 14.975 v 17.59 h -14.975 z"
    id="166e"/>

<path class="siege occupe"
    inkscape:connector-curvature="0"
    d="m 149.86875,811.984 h 14.975 v 17.59 h -14.975 z"
    id="167e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,811.98438 h 14.975 v 17.59 h -14.975 z"
     id="168e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,811.984 h 14.975 v 17.59 h -14.975 z"
     id="169e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06396,811.98438 h 14.975 v 17.59 h -14.975 z"
     id="180e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03516,811.984 h 14.975 v 17.59 h -14.975 z"
     id="181e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,811.98438 h 14.975 v 17.59 h -14.975 z"
     id="182e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,811.984 h 14.975 v 17.59 h -14.975 z"
     id="183e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,811.98438 h 14.975 v 17.59 h -14.975 z"
     id="184e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,788.687 h 14.975 v 17.59 h -14.975 z"
     id="185e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,788.687 h 14.975 v 17.59 h -14.975 z"
     id="186e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,788.6875 h 14.975 v 17.59 h -14.975 z"
     id="187e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.094,788.687 h 14.975 v 17.59 h -14.975 z"
     id="188e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,788.687 h 14.975 v 17.59 h -14.975 z"
     id="189e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03516,788.687 h 14.975 v 17.59 h -14.975 z"
     id="190e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,788.6875 h 14.975 v 17.59 h -14.975 z"
     id="191e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,788.687 h 14.975 v 17.59 h -14.975 z"
     id="192e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,788.687 h 14.975 v 17.59 h -14.975 z"
     id="193e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,765.391 h 14.975 v 17.59 h -14.975 z"
     id="194e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.86875,765.391 h 14.975 v 17.59 h -14.975 z"
     id="195e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,765.391 h 14.975 v 17.59 h -14.975 z"
     id="196e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,765.39466 h 14.975 v 17.59 h -14.975 z"
     id="197e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06396,765.39466 h 14.975 v 17.59 h -14.975 z"
     id="198e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,765.391 h 14.975 v 17.59 h -14.975 z"
     id="199e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,765.39466 h 14.975 v 17.59 h -14.975 z"
     id="200e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,765.391 h 14.975 v 17.59 h -14.975 z"
     id="201e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,765.39466 h 14.975 v 17.59 h -14.975 z"
     id="202e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,742.098 h 14.975 v 17.59 h -14.975 z"
     id="203e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,742.098 h 14.975 v 17.59 h -14.975 z"
     id="204e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,742.09375 h 14.975 v 17.59 h -14.975 z"
     id="205e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,742.098 h 14.975 v 17.59 h -14.975 z"
     id="205e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,742.098 h 14.975 v 17.59 h -14.975 z"
     id="206e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,742.09375 h 14.975 v 17.59 h -14.975 z"
     id="207e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,742.09375 h 14.975 v 17.59 h -14.975 z"
     id="208e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,742.098 h 14.975 v 17.59 h -14.975 z"
     id="209e"/>

<path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,742.098 h 14.975 v 17.59 h -14.975 z"
     id="210e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,718.797 h 14.975 v 17.59 h -14.975 z"
     id="211e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.86875,718.797 h 14.975 v 17.59 h -14.975 z"
     id="212e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,718.797 h 14.975 v 17.59 h -14.975 z"
     id="213e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,718.797 h 14.975 v 17.59 h -14.975 z"
     id="214e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06396,718.797 h 14.975 v 17.59 h -14.975 z"
     id="215e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,718.79687 h 14.975 v 17.59 h -14.975 z"
     id="216e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.286,718.797 h 14.975 v 17.59 h -14.975 z"
     id="217e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25547,718.79687 h 14.975 v 17.59 h -14.975 z"
     id="218e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,718.797 h 14.975 v 17.59 h -14.975 z"
     id="219e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.89609,695.5 h 14.975 v 17.59 h -14.975 z"
     id="220e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,695.5 h 14.975 v 17.59 h -14.975 z"
     id="221e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,695.5 h 14.975 v 17.59 h -14.975 z"
     id="222e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,695.5 h 14.975 v 17.59 h -14.975 z"
     id="223e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06396,695.5 h 14.975 v 17.59 h -14.975 z"
     id="224e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,695.5 h 14.975 v 17.59 h -14.975 z"
     id="225e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.286,695.5 h 14.975 v 17.59 h -14.975 z"
     id="226e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25547,695.49219 h 14.975 v 17.59 h -14.975 z"
     id="227e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,695.49219 h 14.975 v 17.59 h -14.975 z"
     id="228e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.89609,672.19141 h 14.975 v 17.59 h -14.975 z"
     id="229e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,672.195 h 14.975 v 17.59 h -14.975 z"
     id="230e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,672.195 h 14.975 v 17.59 h -14.975 z"
     id="231e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.094,672.19141 h 14.975 v 17.59 h -14.975 z"
     id="232e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06396,672.195 h 14.975 v 17.59 h -14.975 z"
     id="233e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03516,672.195 h 14.975 v 17.59 h -14.975 z"
     id="234e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.286,672.19141 h 14.975 v 17.59 h -14.975 z"
     id="235e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,672.195 h 14.975 v 17.59 h -14.975 z"
     id="236e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,672.195 h 14.975 v 17.59 h -14.975 z"
     id="237e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.89609,648.8906 h 14.975 v 17.59 h -14.975 z"
     id="238e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.87109,648.894 h 14.975 v 17.59 h -14.975 z"
     id="239e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,648.8906 h 14.975 v 17.59 h -14.975 z"
     id="240e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,648.894 h 14.975 v 17.59 h -14.975 z"
     id="241e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06396,648.894 h 14.975 v 17.59 h -14.975 z"
     id="242e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03516,648.894 h 14.975 v 17.59 h -14.975 z"
     id="243e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,648.894 h 14.975 v 17.59 h -14.975 z"
     id="244e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25547,648.894 h 14.975 v 17.59 h -14.975 z"
     id="245e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,648.8906 h 14.975 v 17.59 h -14.975 z"
     id="246e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 134.897,625.594 h 14.975 v 17.59 h -14.975 z"
     id="247e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.86875,625.594 h 14.975 v 17.59 h -14.975 z"
     id="248e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84531,625.594 h 14.975 v 17.59 h -14.975 z"
     id="249e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,625.594 h 14.975 v 17.59 h -14.975 z"
     id="250e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,625.594 h 14.975 v 17.59 h -14.975 z"
     id="251e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03516,625.594 h 14.975 v 17.59 h -14.975 z"
     id="252e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,625.5898 h 14.975 v 17.59 h -14.975 z"
     id="253e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25781,625.594 h 14.975 v 17.59 h -14.975 z"
     id="254e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,625.594 h 14.975 v 17.59 h -14.975 z"
     id="255e"/>

  <path class="siege occupe" 
     inkscape:connector-curvature="0"
     d="m 134.897,602.293 h 14.975 v 17.59 h -14.975 z"
     id="256e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 149.86875,602.293 h 14.975 v 17.59 h -14.975 z"
     id="257e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 164.84375,602.293 h 14.975 v 17.59 h -14.975 z"
     id="258e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 190.08896,602.293 h 14.975 v 17.59 h -14.975 z"
     id="259e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 205.06016,602.293 h 14.975 v 17.59 h -14.975 z"
     id="260e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 220.03672,602.293 h 14.975 v 17.59 h -14.975 z"
     id="261e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 245.28281,602.293 h 14.975 v 17.59 h -14.975 z"
     id="262e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 260.25547,602.293 h 14.975 v 17.59 h -14.975 z"
     id="263e"/>

  <path class="siege occupe"
     inkscape:connector-curvature="0"
     d="m 275.23047,602.2891 h 14.975 v 17.59 h -14.975 z"
     id="264e"/>






































































  <?php include"Partie/Partie3.php";?>
<!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS -->v<!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS -->
<!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA-->

<?php
     

    
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="1p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="454.03049"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="1p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="454.03049"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="1p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="454.03049"/>';
                    }

     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="2p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="415.67581"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="2p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="415.67581"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="2p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="415.67581"/>';
                    }

     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="3p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="377.31528"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="3p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="377.31528"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="3p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="377.31528"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="4p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="338.94849"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="4p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="338.94849"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="4p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="338.94849"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="5p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="300.58517"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="5p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="300.58517"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="5p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="300.58517"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="6p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="262.21091"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="6p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="262.21091"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="6p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="262.21091"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="7p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="223.85086"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="7p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="223.85086"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="7p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="223.85086"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="8p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="185.48756"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="8p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="185.48756"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="8p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="134.897"
                                  y="185.48756"/>';
                    }
     } 
?>
    
<!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB-->
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="9p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="454.03119"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="9p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="454.03119"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="9p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="454.03119"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="10p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="415.67117"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="10p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="415.67117"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="10p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="415.67117"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="11p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="377.31528"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="11p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="377.31528"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="11p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="377.31528"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="12p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="338.94531"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="12p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="338.94531"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="12p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="338.94531"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="13p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="300.58517"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="13p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="300.58517"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="13p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="300.58517"/>';
                    }
     } 
?>            
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="14p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="262.21091"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="14p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="262.21091"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="14p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="262.21091"/>';
                    }
     } 
?> 
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="15p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="223.85086"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="15p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="223.85086"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="15p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="176.86719"
                                  y="223.85086"/>';
                    }
     } 
?> 
<!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> 
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="16p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="454.03049"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="16p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="454.03049"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="16p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="454.03049"/>';
                    }
     } 
?>       
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="17p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="415.67117"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="17p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="415.67117"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="17p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="415.67117"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="18p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="377.31528"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="18p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="377.31528"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="18p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="377.31528"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="19p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="338.94849"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="19p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="338.94849"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="19p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="338.94849"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="20p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="300.58517"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="20p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="300.58517"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="20p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="300.58517"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="21p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="262.21799"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="21p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="262.21799"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="21p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="262.21799"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="22p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="223.85088"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="22p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="223.85088"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="22p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="218.28372"
                                  y="223.85088"/>';
                    }
     } 
?>

<!--ZoneD--><!--ZoneD--> <!--ZoneD--> <!--ZoneD--> <!--ZoneD--> <!--ZoneD--> <!--ZoneD--> <!--ZoneD-->
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="23p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="454.03049"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="23p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="454.03049"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="23p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="454.03049"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="24p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="415.67117"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="24p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="415.67117"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="24p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="415.67117"/>';
                    }
     } 
?>  
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="25p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="377.31528"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="25p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="377.31528"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="25p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="377.31528"/>';
                    }
     } 
?> 
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="26p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="338.94531"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="26p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="338.94531"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="26p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="338.94531"/>';
                    }
     } 
?> 
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="27p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="300.57809"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="27p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="300.57809"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="27p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="300.57809"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="28p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="262.21799"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="28p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="262.21799"/>'; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="28p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="262.21799"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="29p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="223.85088"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="29p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="223.85088"/>
                              '; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="29p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25247"
                                  y="223.85088"/>
';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotalE.php?idsiege='.$rows['code_siege'].'" >
                              <rect class="siege"
                                  id="30p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="185.48756"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<rect class="siege on"
                                  id="30p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="185.48756"/>
                              '; 
                    }
                    else
                    {
                         echo'<rect class="siege occupe"
                                  id="30p"
                                  width="29.946747"
                                  height="34.117931"
                                  x="260.25781"
                                  y="185.48756"/>
                              ';
                    }
     } 
?>

<?php include"Partie/Partie4.php";?>


<form method="POST" action="siege-classe-pre.php">
     <div id="val">
          <input  type="submit" name="valider" value="valider" class="btn btncard" style="margin: 50px auto;padding: 10px 22px;width: 140px;">


               <?php 
                    if(isset($_POST['valider']))
                    {
                       $query = "UPDATE siegedispo SET disponibilite='pris' WHERE disponibilite='selectionne'";
                       mysqli_query($conn, $query);
                       echo'
                       <script>
                         var url = "siege-classe-pre.php";
                         window.location.replace (url);
                         $(".close3").fadeOut(300);
                      </script>';
                
                      header("Location: paiement-enregistrement.php");
                      //ob_enf_flush();
                      
                
                    }
                      

               ?>
     </div> 
</form> 
<!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege-->

</div>
	<div class="col-12 col-md-4 p-0 ">  
	  <div class="card text-center">
      <div class="card-header" style="background-color:#365390;color: white ">
          Information avion
      </div>
      <div class="card-body">
        <h4 class="card-title">GE-6</h4>
          <p class="card-text">Un avion à la pointe de la technologie <</p>
      </div>  
    </div>
    <div class="card text-center">
      <div class="card-header" style="background-color:#365390;color: white ">
          Indice siège
      </div>
      <div class="card-body">
        <table>
          <tr><td style="background-color: red ;width: 20px"></td>
          <td> Réservé</td></tr>
          <tr><td style="background-color: #365390 ;width: 20px"></td>
          <td>Encore libre</td></tr>
          <tr><td style="background-color: #F9A602 ;width: 20px"></td>
          <td>Sélectionné</td></tr>
        </table>
      </div>
    </div>
</div>
</div>


<!--passer aux payement--><!--passer aux payement--><!--passer aux payement--><!--passer aux payement-->
<form  method="POST" action="siege-classe-pre.php">
  
<style>
  input[type=text]
  {
    height: 35px;
    color: white; 
    border: 2px transparent solid;
    background: none;
    outline: none;
    pointer-events: none;
    background-color: transparent;
  }
  input[type=text]::-webkit-inner-spin-button, input[type=text]::-webkit-outer-spin-button
  {
      -webkit-appearance: none;
  }
</style>
    
</form>



</body>
</html>
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