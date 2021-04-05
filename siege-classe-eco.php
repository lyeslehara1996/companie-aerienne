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
  $query="select * from siegedispo sd , siege s WHERE num_vol=$num_vol and sd.code_siege=s.code_siege and s.classe_siege='eco'";
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
    <!-- -->
    <link rel="stylesheet" href="css/style.css">
    <!-- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- -->
    <link rel="stylesheet" href="css/style.css">
    <!-- -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- -->
    <link rel="stylesheet" href="css/bagages.css">
    <!---->
    <link rel="stylesheet" href="css/guide.css">
    <!-- -->
    <link rel="stylesheet" type="text/css" href="css/Siege.css">
        
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- -->
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
    <style>
      .my-custom-scrollbar
      {
        position: relative;
        width: 800px;
        height: 400px;
        overflow: auto;
      }
    </style>
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
    <a href="#" class=" col-3 active ">Siège</a>
        <a href="#" class=" col-3 ">Paiement</a>

</div>






<!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege--><!--Siege-->
<div class="row col-12 my-2">
  <h1 class="text-center titre mx-auto my-5">Choisir le siège</h1>
</div>
<div class="row col-12 bg-white ">
<div class="col-12 col-md-6 text-center my-custom-scrollbar my-custom-scrollbar-primary"  >
    <!--<img src="img/Avion.svg" alt="" class="w-100 " style="" >-->
     

<?php 
     include "Partie/Partie1.php";
?>
<!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 --><!--Siege ECONOMY 1 -->
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'"  >
                         <path class="siege"
                                   d="m 190.09399,1354.891 h 14.975 v 17.5 h -14.975 z"
                                   id="1e" />
                    </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 190.09399,1354.891 h 14.975 v 17.5 h -14.975 z"
                                   id="1e" />'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 190.09399,1354.891 h 14.975 v 17.5 h -14.975 z"
                                   id="1e" />';
                         
                    }
     }
     
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo' )
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 205.06396,1354.801 h 14.9712 v 17.59 h -14.9712 z"
                                   id="2e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                              d="m 205.06396,1354.801 h 14.9712 v 17.59 h -14.9712 z"
                              id="2e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                              d="m 205.06396,1354.801 h 14.9712 v 17.59 h -14.9712 z"
                              id="2e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 220.03516,1354.801 h 14.975 v 17.59 h -14.975 z"
                                   id="3e"/> 
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 220.03516,1354.801 h 14.975 v 17.59 h -14.975 z"
                                   id="3e"/> '; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 220.03516,1354.801 h 14.975 v 17.59 h -14.975 z"
                                   id="3e"/> ';
                    }
     } 
?>                                                                  
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 134.897,1331.481 h 14.975 v 17.59 h -14.975 z"
                                   id="4e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 134.897,1331.481 h 14.975 v 17.59 h -14.975 z"
                                   id="4e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 134.897,1331.481 h 14.975 v 17.59 h -14.975 z"
                                   id="4e"/> ';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 149.87199,1331.481 h 14.975 v 17.59 h -14.975 z"
                                   id="5e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 149.87199,1331.481 h 14.975 v 17.59 h -14.975 z"
                                   id="5e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                              d="m 149.87199,1331.481 h 14.975 v 17.59 h -14.975 z"
                              id="5e"/> ';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 164.84698,1331.481 h 14.97501 v 17.59 h -14.97501 z"
                                   id="6e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 164.84698,1331.481 h 14.97501 v 17.59 h -14.97501 z"
                                   id="6e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                              d="m 164.84698,1331.481 h 14.97501 v 17.59 h -14.97501 z"
                              id="6e"/> ';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 190.08896,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="7e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 190.08896,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="7e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 190.08896,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="7e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 205.06015,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="8e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 205.06015,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="8e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 205.06015,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="8e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 220.03516,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="9e"/> 
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 220.03516,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="9e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 220.03516,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="9e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 245.286,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="10e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 245.286,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="10e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 245.286,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="10e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 260.25781,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="11e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 260.25781,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="11e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 260.25781,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="11e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 275.23047,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="12e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 275.23047,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="12e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 275.23047,1331.504 h 14.975 v 17.59 h -14.975 z"
                                   id="12e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 134.897,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="13e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 134.897,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="13e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 134.897,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="13e"/>';
                    }
     } 
?>        
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 149.86874,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="14e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 149.86874,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="14e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 149.86874,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="14e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 164.84375,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="15e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 164.84375,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="15e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 164.84375,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="15e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 190.09399,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="16e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 190.09399,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="16e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 190.09399,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="16e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 205.06396,1308.2111 h 14.97501 v 17.59 h -14.97501 z"
                                   id="17e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 205.06396,1308.2111 h 14.97501 v 17.59 h -14.97501 z"
                                   id="17e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 205.06396,1308.2111 h 14.97501 v 17.59 h -14.97501 z"
                                   id="17e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 220.03671,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="18e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 220.03671,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="18e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 220.03671,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="18e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 245.286,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="19e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 245.286,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="19e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 245.286,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="19e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 260.25546,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="20e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 260.25546,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="20e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 260.25546,1308.2096 h 14.975 v 17.59 h -14.975 z"
                                   id="20e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 275.23047,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="21e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 275.23047,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="21e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 275.23047,1308.2111 h 14.975 v 17.59 h -14.975 z"
                                   id="21e"/>';
                    }
     } 
?>*
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 134.89609,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="22e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 134.89609,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="22e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 134.89609,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="22e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 149.87109,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="23e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 149.87109,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="23e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 149.87109,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="23e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 164.84531,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="24e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 164.84531,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="24e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 164.84531,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="24e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 190.08896,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="25e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 190.08896,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="25e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 190.08896,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="25e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 205.06396,1284.9131 h 14.97501 v 17.59 h -14.97501 z"
                                   id="26e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 205.06396,1284.9131 h 14.97501 v 17.59 h -14.97501 z"
                                   id="26e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 205.06396,1284.9131 h 14.97501 v 17.59 h -14.97501 z"
                                   id="26e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 220.03897,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="27e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 220.03897,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="27e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 220.03897,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="27e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 245.286,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="28e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 245.286,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="28e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 245.286,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="28e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 260.25546,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="29e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 260.25546,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="29e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 260.25546,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="29e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 275.23047,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="30e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 275.23047,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="30e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 275.23047,1284.9131 h 14.975 v 17.59 h -14.975 z"
                                   id="30e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 134.897,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="31e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 134.897,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="31e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 134.897,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="31e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 149.87199,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="32e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 149.87199,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="32e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 149.87199,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="32e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   d="m 164.84531,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="33e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 164.84531,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="33e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 164.84531,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="33e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 190.08896,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="34e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 190.08896,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="34e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 190.08896,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="34e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 205.06396,1261.6171 h 14.97501 v 17.59 h -14.97501 z"
                                   id="35e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 205.06396,1261.6171 h 14.97501 v 17.59 h -14.97501 z"
                                   id="35e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 205.06396,1261.6171 h 14.97501 v 17.59 h -14.97501 z"
                                   id="35e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 220.03897,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="36e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 220.03897,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="36e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 220.03897,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="36e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 245.28282,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="37e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 245.28282,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="37e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 245.28282,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="37e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 260.25781,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="38e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 260.25781,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="38e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 260.25781,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="38e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 275.23282,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="39e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 275.23282,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="39e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 275.23282,1261.6171 h 14.975 v 17.59 h -14.975 z"
                                   id="39e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="40e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="40e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="40e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="41e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="41e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="41e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="42e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="42e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="42e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="43e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="43e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="43e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1238.3086 h 14.975 v 17.59 h -14.975 z"
                                   id="44e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1238.3086 h 14.975 v 17.59 h -14.975 z"
                                   id="44e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1238.3086 h 14.975 v 17.59 h -14.975 z"
                                   id="44e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="45e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="45e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="45e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="46e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="46e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="46e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="47e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="47e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="47e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="48e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="48e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1238.312 h 14.975 v 17.59 h -14.975 z"
                                   id="48e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="49e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="49e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="49e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="50e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="50e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="50e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="51e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="51e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="51e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="52e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="52e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="52e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="53e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="53e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="53e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="54e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="54e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="54e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="55e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="55e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="55e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="56e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="56e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,1215.0117 h 14.975 v 17.59 h -14.975 z"
                                   id="56e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="57e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="57e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1215.012 h 14.975 v 17.59 h -14.975 z"
                                   id="57e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="58e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="58e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="58e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="59e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="59e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="59e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="60e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="60e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="60e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="61e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="61e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="61e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="62e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="62e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="62e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="63e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="63e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="63e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="64e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="64e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="64e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.261,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="65e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.261,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="65e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.261,1191.7188 h 14.975 v 17.59 h -14.975 z"
                                   id="65e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="66e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="66e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1191.715 h 14.975 v 17.59 h -14.975 z"
                                   id="66e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="67e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="67e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="67e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="68e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="68e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="68e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="69e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="69e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="69e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="70e"/>

                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="70e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="70e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="71e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="71e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="71e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="72e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="72e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="72e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="73e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="73e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1168.422 h 14.975 v 17.59 h -14.975 z"
                                   id="73e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="74e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="74e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="74e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="75e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="75e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1168.418 h 14.975 v 17.59 h -14.975 z"
                                   id="75e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="76e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="76e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="76e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="77e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="77e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="77e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="78e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="78e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="78e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1145.1172 h 14.975 v 17.59 h -14.975 z"
                                   id="79e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1145.1172 h 14.975 v 17.59 h -14.975 z"
                                   id="79e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1145.1172 h 14.975 v 17.59 h -14.975 z"
                                   id="79e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="80e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="80e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="80e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="81e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="81e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="81e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="82e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="82e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="82e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="83e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="83e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="83e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="84e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="84e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1145.121 h 14.975 v 17.59 h -14.975 z"
                                   id="84e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="85e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="85e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="85e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="86e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="86e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="86e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="87e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="87e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="87e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                   id="88e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                   id="88e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                   id="88e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                  id="89e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                  id="89e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                  id="89e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="90e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="90e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="90e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="91e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="91e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="91e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                   id="92e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                   id="92e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1121.8207 h 14.975 v 17.59 h -14.975 z"
                                   id="92e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="93e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="93e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1121.82 h 14.975 v 17.59 h -14.975 z"
                                   id="93e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="94e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="94e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="94e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1098.5156 h 14.975 v 17.59 h -14.975 z"
                                   id="95e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1098.5156 h 14.975 v 17.59 h -14.975 z"
                                   id="95e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,1098.5156 h 14.975 v 17.59 h -14.975 z"
                                   id="95e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="96e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="96e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="96e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="97e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="97e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="97e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1098.5156 h 14.975 v 17.59 h -14.975 z"
                                   id="98e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                              inkscape:connector-curvature="0"
                              d="m 205.06016,1098.5156 h 14.975 v 17.59 h -14.975 z"
                              id="98e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                              inkscape:connector-curvature="0"
                              d="m 205.06016,1098.5156 h 14.975 v 17.59 h -14.975 z"
                              id="98e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="99e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="99e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="99e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1098.5156 h 14.975 v 17.59 h -14.975 z"
                                   id="100e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1098.5156 h 14.975 v 17.59 h -14.975 z"
                                   id="100e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,1098.5156 h 14.975 v 17.59 h -14.975 z"
                                   id="100e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="101e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="101e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="101e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="102e"/>  
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="102e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,1098.524 h 14.975 v 17.59 h -14.975 z"
                                   id="102e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="103e"/>  
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="103e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="103e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.872,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="104e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.872,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="104e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.872,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="104e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="105e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="105e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="105e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="106e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="106e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="106e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="107e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="107e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="107e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="108e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="108e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="108e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1075.2148 h 14.975 v 17.59 h -14.975 z"
                                   id="109e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1075.2148 h 14.975 v 17.59 h -14.975 z"
                                   id="109e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,1075.2148 h 14.975 v 17.59 h -14.975 z"
                                   id="109e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="110e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="110e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="110e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23281,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="111e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23281,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="111e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23281,1075.219 h 14.975 v 17.59 h -14.975 z"
                                   id="111e"/>';
                    }
     } 
?>















   













































<?php include"Partie/Partie2.php"; ?>
  <!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 --><!--Siege ECONOMY 2 -->
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 134.89609,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="112e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 134.89609,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="112e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 134.89609,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="112e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 149.87109,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="113e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 149.87109,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="113e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 149.87109,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="113e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84609,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="114e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84609,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="114e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84609,951.80615 h 14.975 v 17.59 h -14.975 z"
                                  id="114e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,951.78125 h 14.975 v 17.59 h -14.975 z"
                                  id="115e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,951.78125 h 14.975 v 17.59 h -14.975 z"
                                  id="115e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,951.78125 h 14.975 v 17.59 h -14.975 z"
                                  id="115e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 205.069,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="116e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 205.069,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="116e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 205.069,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="116e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 220.044,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="117e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 220.044,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="117e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 220.044,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="117e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="118e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="118e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="118e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25781,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="119e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25781,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="119e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25781,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="119e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23281,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="120e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23281,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="120e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23281,951.785 h 14.975 v 17.59 h -14.975 z"
                                  id="120e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="121e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="121e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="121e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 149.872,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="122e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 149.872,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="122e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 149.872,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="122e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 164.847,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="123e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 164.847,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="123e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 164.847,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="123e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="124e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="124e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="124e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="125e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="125e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="125e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03516,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="126e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03516,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="126e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03516,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="126e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="127e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="127e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="127e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="128e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="128e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="128e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="129e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="129e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,928.484 h 14.975 v 17.59 h -14.975 z"
                                  id="129e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="130e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="130e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="130e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="131e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="131e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="131e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84531,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="132e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84531,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="132e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84531,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="132e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="133e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="133e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="133e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="134e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="134e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="134e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="135e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="135e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="135e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 245.286,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="136e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 245.286,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="136e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 245.286,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="136e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="137e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="137e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,905.17969 h 14.975 v 17.59 h -14.975 z"
                                  id="137e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="138e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="138e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,905.183 h 14.975 v 17.59 h -14.975 z"
                                  id="138e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="139e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="139e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="139e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="140e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="140e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="140e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84375,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="141e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84375,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="141e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84375,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="141e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="142e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="142e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="142e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="143e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="143e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="143e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="144e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="144e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="144e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 245.286,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="145e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 245.286,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="145e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 245.286,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="145e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="146e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="146e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,881.883 h 14.975 v 17.59 h -14.975 z"
                                  id="146e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="147e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="147e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,881.87945 h 14.975 v 17.59 h -14.975 z"
                                  id="147e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 134.89609,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="148e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 134.89609,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="148e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 134.89609,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="148e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="149e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="149e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="149e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84375,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="150e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84375,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="150e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 164.84375,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="150e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="151e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="151e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 190.08896,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="151e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="152e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="152e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06016,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="152e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="153e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="153e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,858.582 h 14.975 v 17.59 h -14.975 z"
                                  id="153e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="154e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="154e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="154e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="155e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="155e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,858.57812 h 14.975 v 17.59 h -14.975 z"
                                  id="155e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,858.57812 h 14.975 v 17.59 h -14.975 z"
                                   id="156e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,858.57812 h 14.975 v 17.59 h -14.975 z"
                                   id="156e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,858.57812 h 14.975 v 17.59 h -14.975 z"
                                   id="156e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,835.281 h 14.975 v 17.59 h -14.975 z"
                                   id="157e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,835.281 h 14.975 v 17.59 h -14.975 z"
                                   id="157e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,835.281 h 14.975 v 17.59 h -14.975 z"
                                   id="157e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,835.28125 h 14.975 v 17.59 h -14.975 z"
                                   id="158e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,835.28125 h 14.975 v 17.59 h -14.975 z"
                                   id="158e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,835.28125 h 14.975 v 17.59 h -14.975 z"
                                   id="158e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,835.281 h 14.975 v 17.59 h -14.975 z"
                                   id="159e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,835.281 h 14.975 v 17.59 h -14.975 z"
                                   id="159e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,835.281 h 14.975 v 17.59 h -14.975 z"
                                   id="159e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="160e"
                                  inkscape:transform-center-x="-3.5355339"
                                  inkscape:transform-center-y="-0.35355339"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="160e"
                                  inkscape:transform-center-x="-3.5355339"
                                  inkscape:transform-center-y="-0.35355339"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 190.094,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="160e"
                                  inkscape:transform-center-x="-3.5355339"
                                  inkscape:transform-center-y="-0.35355339"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="161e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="161e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 205.06396,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="161e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="162e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="162e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 220.03672,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="162e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="163e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="163e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 245.28281,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="163e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="164e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="164e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 260.25547,835.281 h 14.975 v 17.59 h -14.975 z"
                                  id="164e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="165e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="165e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 275.23047,835.28125 h 14.975 v 17.59 h -14.975 z"
                                  id="165e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,811.98438 h 14.975 v 17.59 h -14.975 z"
                                  id="166e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,811.98438 h 14.975 v 17.59 h -14.975 z"
                                  id="166e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 134.897,811.98438 h 14.975 v 17.59 h -14.975 z"
                                  id="166e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,811.984 h 14.975 v 17.59 h -14.975 z"
                                  id="167e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,811.984 h 14.975 v 17.59 h -14.975 z"
                                  id="167e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                  inkscape:connector-curvature="0"
                                  d="m 149.86875,811.984 h 14.975 v 17.59 h -14.975 z"
                                  id="167e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="168e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="168e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="168e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="169e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="169e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="169e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="180e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="180e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="180e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="181e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="181e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="181e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="182e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="182e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="182e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="183e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="183e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,811.984 h 14.975 v 17.59 h -14.975 z"
                                   id="183e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="184e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="184e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,811.98438 h 14.975 v 17.59 h -14.975 z"
                                   id="184e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="185e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="185e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="185e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="186e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="186e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="186e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,788.6875 h 14.975 v 17.59 h -14.975 z"
                                   id="187e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,788.6875 h 14.975 v 17.59 h -14.975 z"
                                   id="187e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,788.6875 h 14.975 v 17.59 h -14.975 z"
                                   id="187e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="188e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="188e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="188e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="189e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="189e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="189e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="190e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="190e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="190e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,788.6875 h 14.975 v 17.59 h -14.975 z"
                                   id="191e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,788.6875 h 14.975 v 17.59 h -14.975 z"
                                   id="191e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,788.6875 h 14.975 v 17.59 h -14.975 z"
                                   id="191e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="192e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="192e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="192e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="193e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="193e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,788.687 h 14.975 v 17.59 h -14.975 z"
                                   id="193e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="194e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="194e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="194e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                         <path class="siege"
                              inkscape:connector-curvature="0"
                              d="m 149.86875,765.391 h 14.975 v 17.59 h -14.975 z"
                              id="195e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="195e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="195e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege" 
                                   inkscape:connector-curvature="0" 
                                   d="m 190.08896,742.098 h 14.975 v 17.59 h -14.975 z" 
                                   id="195.5e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on" 
                                   inkscape:connector-curvature="0" 
                                   d="m 190.08896,742.098 h 14.975 v 17.59 h -14.975 z" 
                                   id="195.5e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe" 
                                   inkscape:connector-curvature="0" 
                                   d="m 190.08896,742.098 h 14.975 v 17.59 h -14.975 z" 
                                   id="195.5e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="196e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="196e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="196e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="197e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="197e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="197e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="198e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="198e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="198e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="199e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="199e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="199e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="200e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="200e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="200e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="201e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="201e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,765.391 h 14.975 v 17.59 h -14.975 z"
                                   id="201e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="202e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="202e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,765.39466 h 14.975 v 17.59 h -14.975 z"
                                   id="202e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="203e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="203e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="203e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="204e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="204e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="204e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="205e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="205e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="205e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="206e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="206e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="206e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="207e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="207e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="207e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="208e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="208e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,742.09375 h 14.975 v 17.59 h -14.975 z"
                                   id="208e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="209e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="209e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="209e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="210e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="210e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,742.098 h 14.975 v 17.59 h -14.975 z"
                                   id="210e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="211e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="211e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="211e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="212e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="212e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="212e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="213e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="213e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="213e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="214e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="214e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="214e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="215e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="215e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="215e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                        inkscape:connector-curvature="0"
                                        d="m 220.03672,718.79687 h 14.975 v 17.59 h -14.975 z"
                                        id="216e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                        inkscape:connector-curvature="0"
                                        d="m 220.03672,718.79687 h 14.975 v 17.59 h -14.975 z"
                                        id="216e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                        inkscape:connector-curvature="0"
                                        d="m 220.03672,718.79687 h 14.975 v 17.59 h -14.975 z"
                                        id="216e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="217e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="217e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="217e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,718.79687 h 14.975 v 17.59 h -14.975 z"
                                   id="218e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,718.79687 h 14.975 v 17.59 h -14.975 z"
                                   id="218e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,718.79687 h 14.975 v 17.59 h -14.975 z"
                                   id="218e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="219e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="219e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,718.797 h 14.975 v 17.59 h -14.975 z"
                                   id="219e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="220e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="220e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="220e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="221e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="221e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="221e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="222e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="222e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="222e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="223e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="223e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="223e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="224e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="224e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="224e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="225e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="225e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="225e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="226e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="226e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,695.5 h 14.975 v 17.59 h -14.975 z"
                                   id="226e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,695.49219 h 14.975 v 17.59 h -14.975 z"
                                   id="227e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,695.49219 h 14.975 v 17.59 h -14.975 z"
                                   id="227e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,695.49219 h 14.975 v 17.59 h -14.975 z"
                                   id="227e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,695.49219 h 14.975 v 17.59 h -14.975 z"
                                   id="228e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,695.49219 h 14.975 v 17.59 h -14.975 z"
                                   id="228e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,695.49219 h 14.975 v 17.59 h -14.975 z"
                                   id="228e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                             <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="229e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="229e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="229e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="230e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo' <path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="230e"/>'; 
                    }
                    else
                    {
                         echo' <path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="230e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="231e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="231e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="231e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="232e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="232e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.094,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="232e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="233e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="233e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="233e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="233e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="233e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="233e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="234e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="234e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="234e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="235e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="235e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.286,672.19141 h 14.975 v 17.59 h -14.975 z"
                                   id="235e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="236e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="236e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="236e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,672.195 h 14.975 v 17.59 h -14.975 z"
                                   id="237e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                              inkscape:connector-curvature="0"
                              d="m 275.23047,672.195 h 14.975 v 17.59 h -14.975 z"
                              id="237e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                              inkscape:connector-curvature="0"
                              d="m 275.23047,672.195 h 14.975 v 17.59 h -14.975 z"
                              id="237e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="238e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="238e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.89609,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="238e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="239e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="239e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.87109,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="239e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="240e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="240e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="240e"/>';
                    }
     } 
?>  
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                        inkscape:connector-curvature="0"
                                        d="m 190.08896,648.894 h 14.975 v 17.59 h -14.975 z"
                                        id="241e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="241e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="241e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06396,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="242e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                        inkscape:connector-curvature="0"
                                        d="m 205.06396,648.894 h 14.975 v 17.59 h -14.975 z"
                                        id="242e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                        inkscape:connector-curvature="0"
                                        d="m 205.06396,648.894 h 14.975 v 17.59 h -14.975 z"
                                        id="242e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="243e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="243e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="243e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   d="m 245.28281,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="244e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   d="m 245.28281,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="244e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   d="m 245.28281,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="244e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'">
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="245e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="245e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,648.894 h 14.975 v 17.59 h -14.975 z"
                                   id="245e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="246e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="246e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,648.8906 h 14.975 v 17.59 h -14.975 z"
                                   id="246e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="247e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="247e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="247e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="248e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="248e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="248e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="249e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="249e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84531,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="249e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="250e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="250e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="250e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="251e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="251e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="251e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="252e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="252e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03516,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="252e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,625.5898 h 14.975 v 17.59 h -14.975 z"
                                   id="253e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,625.5898 h 14.975 v 17.59 h -14.975 z"
                                   id="253e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,625.5898 h 14.975 v 17.59 h -14.975 z"
                                   id="253e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="254e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="254e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25781,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="254e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="255e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="255e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,625.594 h 14.975 v 17.59 h -14.975 z"
                                   id="255e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege" 
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="256e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on" 
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="256e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe" 
                                   inkscape:connector-curvature="0"
                                   d="m 134.897,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="256e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="257e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="257e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 149.86875,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="257e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="258e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="258e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 164.84375,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="258e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="259e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="259e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 190.08896,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="259e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                              <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="260e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="260e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 205.06016,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="260e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                               <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="261e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo' <path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="261e"/>'; 
                    }
                    else
                    {
                         echo' <path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 220.03672,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="261e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                               <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="262e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="262e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 245.28281,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="262e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                               <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="263e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="263e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 260.25547,602.293 h 14.975 v 17.59 h -14.975 z"
                                   id="263e"/>';
                    }
     } 
?>
<?php
     if($rows=mysqli_fetch_assoc($result))
     {
          if ($rows['disponibilite']=='dispo')
               {
                    echo'<a href="SiegeTotal.php?idsiege='.$rows['code_siege'].'" >
                               <path class="siege"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,602.2891 h 14.975 v 17.59 h -14.975 z"
                                   id="264e"/>
                         </a>';
               }else
                    if($rows['disponibilite']=='selectionne')
                    {
                         echo'<path class="siege on"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,602.2891 h 14.975 v 17.59 h -14.975 z"
                                   id="264e"/>'; 
                    }
                    else
                    {
                         echo'<path class="siege occupe"
                                   inkscape:connector-curvature="0"
                                   d="m 275.23047,602.2891 h 14.975 v 17.59 h -14.975 z"
                                   id="264e"/>';
                    }
     } 
?>








































































  <?php include"Partie/Partie3.php";?>
<!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS -->v<!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS --><!--Siege BUSINESS -->
<!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA--><!--ZoneA-->
<rect class="siege occupe"
    id="1p"
    width="29.946747"
    height="34.117931"
    x="134.897"
    y="454.03049"/>

<rect class="siege occupe"
    id="2p"
    width="29.946747"
    height="34.117931"
    x="134.897"
    y="415.67581"/>

<rect class="siege occupe"
    id="3p"
    width="29.946747"
    height="34.117931"
    x="134.897"
    y="377.31528"/>

<rect class="siege occupe"
    id="4p"
    width="29.946747"
    height="34.117931"
    x="134.897"
    y="338.94849"/>

<rect class="siege occupe"
    id="5p"
    width="29.946747"
    height="34.117931"
    x="134.897"
    y="300.58517"/>

<rect class="siege occupe"
    id="6p"
    width="29.946747"
    height="34.117931"
    x="134.897"
    y="262.21091"/>

<rect class="siege occupe"
    id="7p"
    width="29.946747"
    height="34.117931"
    x="134.897"
    y="223.85086"/>

<rect class="siege occupe"
    id="8p"
    width="29.946747"
    height="34.117931"
    x="134.897"
    y="185.48756"/>    
<!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB--><!-- ZoneB-->
<rect class="siege occupe"
    id="9p"
    width="29.946747"
    height="34.117931"
    x="176.86719"
    y="454.03119"/>

<rect class="siege occupe"
    id="10p"
    width="29.946747"
    height="34.117931"
    x="176.86719"
    y="415.67117"/>

<rect class="siege occupe"
    id="11p"
    width="29.946747"
    height="34.117931"
    x="176.86719"
    y="377.31528"/>

<rect class="siege occupe"
    id="12p"
    width="29.946747"
    height="34.117931"
    x="176.86719"
    y="338.94531"/>            

<rect class="siege occupe"
    id="13p"
    width="29.946747"
    height="34.117931"
    x="176.86719"
    y="300.58517"/>

<rect class="siege occupe"
    id="14p"
    width="29.946747"
    height="34.117931"
    x="176.86719"
    y="262.21091"/>

<rect class="siege occupe"
    id="15p"
    width="29.946747"
    height="34.117931"
    x="176.86719"
    y="223.85086"/>
<!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC--> <!--ZoneC-->       
<rect class="siege occupe"
    id="16p"
    width="29.946747"
    height="34.117931"
    x="218.28372"
    y="454.03049"/>

<rect class="siege occupe"
    id="17p"
    width="29.946747"
    height="34.117931"
    x="218.28372"
    y="415.67117"/>

<rect class="siege occupe"
    id="18p"
    width="29.946747"
    height="34.117931"
    x="218.28372"
    y="377.31528"/>

<rect class="siege occupe"
    id="19p"
    width="29.946747"
    height="34.117931"
    x="218.28372"
    y="338.94849"/>

<rect class="siege occupe"
    id="20p"
    width="29.946747"
    height="34.117931"
    x="218.28372"
    y="300.58517"/>

<rect class="siege occupe"
    id="21p"
    width="29.946747"
    height="34.117931"
    x="218.28372"
    y="262.21799"/>

<rect class="siege occupe"
    id="22p"
    width="29.946747"
    height="34.117931"
    x="218.28372"
    y="223.85088"/>
<!--ZoneD--><!--ZoneD--> <!--ZoneD--> <!--ZoneD--> <!--ZoneD--> <!--ZoneD--> <!--ZoneD--> <!--ZoneD--> 
<rect class="siege occupe"
    id="23p"
    width="29.946747"
    height="34.117931"
    x="260.25781"
    y="454.03049"/>

<rect class="siege occupe"
    id="24p"
    width="29.946747"
    height="34.117931"
    x="260.25247"
    y="415.67117"/>

<rect class="siege occupe"
    id="25p"
    width="29.946747"
    height="34.117931"
    x="260.25781"
    y="377.31528"/>

<rect class="siege occupe"
    id="26p"
    width="29.946747"
    height="34.117931"
    x="260.25247"
    y="338.94531"/>

<rect class="siege occupe"
    id="27p"
    width="29.946747"
    height="34.117931"
    x="260.25247"
    y="300.57809"/>


<rect class="siege occupe"
    id="28p"
    width="29.946747"
    height="34.117931"
    x="260.25781"
    y="262.21799"/>

<rect class="siege occupe"
    id="29p"
    width="29.946747"
    height="34.117931"
    x="260.25247"
    y="223.85088"/>

<rect class="siege occupe"
    id="30p"
    width="29.946747"
    height="34.117931"
    x="260.25781"
    y="185.48756"/>

<?php include"Partie/Partie4.php";?>


<form method="POST" action="siege-classe-eco.php">
  <div id="val">
    <input  type="submit" name="valider" name="valider1" value="valider" class="btn btncard" style="margin: 50px auto;padding: 10px 22px;width: 140px;" >
        <?php
          if(isset($_POST['valider']))
          {
            $query = "UPDATE siegedispo SET disponibilite='pris' WHERE disponibilite='selectionne'";
            mysqli_query($conn, $query);
            echo' <script>
                      var url = "siege-classe-eco.php";
                      window.location.replace (url);
                      $(".close3").fadeOut(300);
                  </script>';

          
              header("Location: paiement-enregistrement.php");
              //ob_enf_flush();
          }
            
        ?>
  </div> 
</form>

</div>

<div class="col-12 col-md-4 p-0">  
  <div class="card text-center">
    <div class="card-header" style="background-color:#365390;color: white ">
      Informations avion
    </div>
    <div class="card-body">
      <h4 class="card-title">GE-6</h4>
      <p class="card-text">Un avion à la pointe de la technologie </p>
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


<form  method="POST">
 

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