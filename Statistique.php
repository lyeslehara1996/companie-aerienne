<?php
session_start();     
$connection=mysqli_connect('localhost','id12337393_golden','01172012',"id12337393_compagnie");

$SESSION=session_id();
      $time= time();
      $time_out_in_seconds=60;
      $time_out = $time - $time_out_in_seconds;
      $query="select * from users_online where session='$SESSION'";
      $send_query= mysqli_query($connection,$query);
      $count=mysqli_num_rows($send_query);
    if ( $count ==NULL){
      mysqli_query($connection,"insert into users_online (session,time) values ('$SESSION','$time')");
    }else {
    mysqli_query($connection,"insert into users_online (session,time) values ('$SESSION','$time')");
    mysqli_query($connection,"delete from users_online where time < '$time_out' ");
     }
    $users_online_query=mysqli_query($connection,"select * from users_online where time > '$time_out'");
    $count_user = mysqli_num_rows($users_online_query);

$query= "select* from vol where etat_vol= 'dispo'";
 $select_all_vol_dispo=mysqli_query($connection,$query);
 $vol_dispo_count=mysqli_num_rows($select_all_vol_dispo);

 $query= "select* from reclamation";
 $select_all_reclam=mysqli_query($connection,$query);
 $count_reclam=mysqli_num_rows($select_all_reclam);


 $query= "select* from passager ";
 $select_all_passagers=mysqli_query($connection,$query);
 $passager_count=mysqli_num_rows($select_all_passagers);
 

 $query= "select* from client ";
 $select_all_clients=mysqli_query($connection,$query);
 $c_count=mysqli_num_rows($select_all_clients);
            

 $query= "select* from abonnees ";
 $select_all_abonnes=mysqli_query($connection,$query);
 $abonnes_count=mysqli_num_rows($select_all_abonnes);


$query= "select* from vol ";
 $select_all_vol=mysqli_query($connection,$query);
 $vol_count=mysqli_num_rows($select_all_vol);


$query= "select* from reservation ";
 $select_all_res=mysqli_query($connection,$query);
 $res_count=mysqli_num_rows($select_all_res);


$query= "select* from enregistrement ";
 $select_all_enreg=mysqli_query($connection,$query);
 $enreg_count=mysqli_num_rows($select_all_enreg);


$query= "select* from avion ";
 $select_all_avion=mysqli_query($connection,$query);
 $avion_count=mysqli_num_rows($select_all_avion);


$SESSION=session_id();
      $time= time();
      $time_out_in_seconds=3600*24;
      $time_out = $time - $time_out_in_seconds;
      $query="select * from visiteur where session='$SESSION'";
      $send_query= mysqli_query($connection,$query);
      $count=mysqli_num_rows($send_query);
    if ( $count ==NULL){
      mysqli_query($connection,"insert into visiteur (session,time) values ('$SESSION','$time')");    
    }else {
    mysqli_query($connection,"insert into visiteur (session,time) values ('$SESSION','$time')");
     }
    $users_online_query=mysqli_query($connection,"select * from visiteur where time > '$time_out'");
    $count_visit = mysqli_num_rows($users_online_query);
   
      

 
?>

<html>
<head>
	<title>Statistiques</title>
		       <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>
<body>
<div class="container-fluid">



  <section id="minimal-statistics-bg">
  <div class="row">
    <div class="col-12 my-5">
      <h2 class="text-uppercase text-center titre">Statistiques Golden Eagle</h2>   
    </div>
  </div> 


  <div class="row">
    <div class="col-12 col-lg-3 col-sm-6 mb-1">
      <div class="card "style="background: #365390;">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div class="align-self-center">
                <i class="float-left material-icons" style="font-size:70px;color:white">flight_takeoff</i>
  
              </div>
              <div class="media-body text-white text-right">
                <?PHP
                    echo" <h3>{$vol_count}</h3>"
                    ?>
                <h4>Vols</h4>
              
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-3 col-sm-6 mb-1">
      <div class="card "style="background: #365390;">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div class="align-self-center">
                <i class="material-icons float-left" style="font-size:70px;color:white">person_pin_circle</i>

    
              </div>
              <div class="media-body text-white text-right">
                 <?PHP
                    echo" <h3>{$c_count}</h3>"
                    ?>
                <h4>Clients</h4>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-12 col-lg-3 col-sm-6 mb-1 ">
      <div class="card "style="background: #365390;">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div class="align-self-center">
                <i class="material-icons float-left" style="font-size:70px;color:white">insert_emoticon</i>
              
              </div>
              <div class="media-body text-white text-right">
                  <?PHP
                    echo" <h3>{$abonnes_count}</h3>"
                    ?>
                <h4>Abonnés</h4>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-3 col-sm-6 mb-1">
      <div class="card "style="background: #365390;">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div class="align-self-center">
                <i class="material-icons float-left" style="font-size:70px;color:white">person_pin</i>
              
              </div>
              <div class="media-body text-white text-right">
                <?PHP
                    echo" <h3>{$passager_count}</h3>"
                    ?>
                <h4>Passagers</h4>
              
   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>

  </div>
<div>    
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gestion du site', ''],

     <?php 
          $elements_text = ['vols','vols disponible','Reservations','Enregistrements','Avions','Reclamations'];
          $element_count = [$vol_count,$vol_dispo_count,$res_count,$enreg_count,$avion_count,$count_reclam];


          for($i=0;$i<6; $i++){
      
                echo   "['{$elements_text[$i]}'" . "," . "{$element_count[$i]}],";

                }

            ?>

 
        ]);
         var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['personne', 'per Day'],
         <?php 
          $elements_text = ['Passagers','Clients','Abonnés','Utilisateurs en ligne','Visiteurs par jour'];
          $element_count = [$passager_count,$c_count,$abonnes_count,$count_user,$count_visit];


          for($i=0;$i<5; $i++){
      
                echo   "['{$elements_text[$i]}'" . "," . "{$element_count[$i]}],";

                }

            ?>

        ]);

        var options = {
          title: 'Utilisation du site',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
 
   <div class="row col-12 mt-5">
    <div id="piechart_3d" class="col-12 col-lg-6 " style="height: 500px"></div>
      <div id="columnchart_material"  class="col-12 col-lg-6  " style="height: 400px "></div>
  </div>


</body>
</html>