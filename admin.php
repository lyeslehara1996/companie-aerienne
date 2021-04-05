// <?php session_start() ;
//if(!isset($_SESSION['role']) || $_SESSION['role'] !="admin"){
//header("location:index.php");
//}
//?>
<doctype html>
<html lang="en">
  <head>
         <link rel="icon" 
     type="image/png"  
     href="img/dessinFINAL.png">
  	 <?php $bdd = new PDO('mysql:host=localhost;dbname=id12337393_compagnief;charset=utf8', 'id12337393_goldenf', '01172012');?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
  
    <link href="css/dessinFINAL.png">
    <link rel="stylesheet" type="text/css" href="css/loading.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <link rel="stylesheet" href="css/d-flexs.css">
    
    
    <!-- Lightpick CSS -->
    <link rel="stylesheet" href="css/lightpick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet"  href="css/compte.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Admin</title>
    <style>
   
    </style>
  </head>
  <body >

   <div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>
  
 
        <div class="row col-12 pr-0">
           <div class="col-md-3">


<div class="nav-side-menu ">
      <div class="brand">   <a href="index.php" class="navbar-brand"><img class="" style="float: left;
        width: 160px;
      min-width: 100px;" src="img/LogoFinal.svg"></a></div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      
      <div class="menu-list">
        
        <ul id="menu-content" class="menu-content collapse out">
          
                <li>
              <a href="#lmsg" id="msg"><i class='fas fa-file-alt'></i>MESSAGES</a>
            </li>
               <li>
              <a href="#lfac" id="fac"><i class='fas fa-file-alt'></i>FACTURES</a>
            </li>
    
          

          <li data-toggle="collapse" data-target="#new" class="collapsed">
            <a href="#"><i class="  fas fa-plane"></i> VOLS <span class="arrow"></span></a>
          </li>
          <ul class="sub-menu collapse" id="new">
            <li>
              <a  data-toggle="modal" data-target="#addvolModal">
              <i class="fas fa-plus"></i> Ajouter vol</a>
            </li>
       
            <li >
              <a href="#lvols" id="lvo"><i class='fas fa-file-alt'></i>Liste vols</a>
            </li>
     
            
          </ul>
       

         <li >
            <a href="Statistique.php" target="_blank" ><i class="fa fa-bar-chart"></i>Statistiques</a>
            
          </li>

      




          <li>
            <a href="#" ><i class="fas fa-sign-out-alt"></i> DECONNEXION</a>
            
          </li>
          
         <div class="mt-5">
            <label>
              <?php
              $result=$bdd ->query('SELECT * FROM compagnie ');
              while ($data=$result->fetch())
                { ?>
              <i class="  fas fa-money-check-alt"></i>CHIFFRE-AFFAIRE <br>
               <?php  echo $data['revenu'];echo' DA';}?> 
            </label>
          </div>
        </ul>
      </div>
    </div>

    
        
  














          </div>
          <div class=" col-md-6 col-lg-8 mx-auto mt-5">
              <div class="card" id="lfac">
              <div class="card-header">
                <h4 class="text-center titre">Liste des factures</h4>
            
              </div>
              <table class="table">
                <thead class="thead-light">
                  <tr>
                  	
                    <th>N_facture_</th>
                    <th>N_reserv</th>
                    <th>Date</th>
                    <th>Prix</th>
                    
                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  	<?php 
               
    $result=$bdd ->query('SELECT * FROM facture_reservation');
 
    while ($data=$result->fetch())
     { 
    ?>
                    <td><?php echo $data['num_fac_res']?></td>
                    <td><?php echo $data['num_res']?></td>
                    <td><?php echo $data['date_fac_res']?></td>
                    <td><?php echo $data['sous_tot_res'];echo "DA";?></td>
                    
                    
                    
               
                  </tr>
                                    <?php } ?>

                </tbody>
              </table>
              <!-- PAGINATION -->
             
            </div>


              <div class="card" id="lmsg">
              <div class="card-header">
                <h4 class="text-center titre">Liste des Messages/Réclamations</h4>
           
              </div>
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Email</th>
                    
                    <th></th>
                  </tr>
                  <?php 
    $result=$bdd ->query('SELECT * FROM reclamation ');
    $var =0;
    while ($data=$result->fetch())
     { $var++;
    ?>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $data['id']?></td>
                    <td><?php echo $data['nom']?></td>
                    <td><?php echo $data['email']?></td>
                    
                    <td>
                      <a href="#"
                        data-toggle="modal" data-target="#liremsgModal<?php echo $var ;?>" class="btn btn-sm btn-secondary">
                        <i class="fas fa-angle-double-right"></i> Lire
                      </a>
                    </td>
                  </tr>
                
                   <?php } ?>
                  
                
                </tbody>
              </table>


              
            </div>
           
            
            <div class="card"id="lvols">
              <div class="card-header">
                <h4 class="text-center titre">Liste des vols</h4>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Recherche vol...">
                  <div class="input-group-append">
                    <button class="btn btn-primary">Recherche</button>
                  </div>
                </div>
              </div>
              <table class="table">
<tr>
                    <th>#</th>
                    <th>Depart</th>
                    <th>Destination</th>
                    <th>Dt-Hr depart</th>
                    
                    
                    <th></th>
                  </tr>
              <?php 

    $result=$bdd ->query('SELECT * FROM vol ');
    $var =0;
    while ($data=$result->fetch())
     { $var++;
    ?>
    <!-- ouverture de la boucle while -->

              
                <thead class="thead-light">
                  
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $data['num_vol']?></td>
                    <td><?php echo $data['nom_aer_dep']?></td>
                    <td><?php echo $data['nom_aer_arr']?></td>
                    <td><?php echo $data['date_depart']?><?php echo'  '; echo $data['heure_depart']?></td>
                    
                    
                    <td>
                  
                      <a href="#"
                        data-toggle="modal" data-target="#detvol<?php echo $var ;?>" data-target="#myModal" class="btn btn-sm btn-secondary">
                        <i class="fas fa-angle-double-right"></i> Details
                      </a>
                     
                    </td>
                  </tr>
              
                                
                  <?php } ?>
                  
                </tbody>
              </table>
              
            </div>

            <?php 

$result=$bdd ->query('SELECT * FROM reclamation ');
$var =0;
while ($data=$result->fetch())
 { $var++; ?>

    <div class="modal fade mt-5" id="liremsgModal<?php  echo $var?>">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header  text-white"style="background: #f9a602">
            <h5 class="modal-title">Message</h5>
            <button class="close" data-dismiss="modal">
            <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
                <div class="input-group col-12 mb-4">
          
                <textarea id="msgl" type="text" name="msgl"  class="form-control bg-white  border-md" disabled=""><?php echo $data['text']?></textarea>
              </div>
              <div class="input-group col-12 mb-4">
          
                <textarea id="msge" type="text" name="msge" placeholder="Ecrire le message" class="form-control bg-white  border-md"></textarea>
              </div>
                   <button class="btn btn-block btn-primary btn-voirplus"  data-dismiss="modal">Envoyer</button>
            </form>
              </div>
      </div>
      </div>
          </div>

             <?php
 } ?>
          
       
           
         
      


    <!-- ADD vol MODAL -->

    <div class="modal fade " id="addvolModal">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header  text-white"style="background: #f9a602">
            <h5 class="modal-title">Ajouter vol</h5>
            <button class="close" data-dismiss="modal">
            <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">

          <form method="POST" > 

                   <div class="input-group col-12  mb-4">
                        <!-- Default unchecked abled -->
                        <div class="custom-control custom-radio mr-2">
                          <input type="radio" class=" custom-control-input" id="esc" onclick="esc()" name="escal" checked="" >
                          <label class="custom-control-label hvc" for="esc">Avec escale</label>
                        </div>
                        <!-- Default checked disabled -->
                       <div class="custom-control custom-radio">
                          <input type="radio"  class="custom-control-input" id="simp" onclick="simp()" name="escal"  >
                          <label class="custom-control-label hvc" for="simp">Aller simple</label>
                        </div>
                      </div>
                  
                    

                           <div class="input-group col-12  mb-4" >
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="far fa-calendar-alt text-muted"></i>
                              </span>
                            </div>
                            <input type="text" id="demo-11_1" required="required" name="depart" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="Date depart " >
                            
                          </div>

                             <div class="input-group col-12  mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fas fa-plane-departure text-muted"></i>
                  </span>
                </div>
                <input id="hrdep" type="text" required="required"  name="heuredepart" placeholder="Heure depart" class="form-control bg-white border-left-0 border-md">
              </div>
             


                           <div class="input-group col-12  mb-4">
                            
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="far fa-calendar-alt text-muted"></i>
                              </span>
                            </div>
                            <input id="demo-11_2" type="text" required="required" name="retour" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="Date arrivé" >
                            
                          </div>

 <div class="input-group col-12  mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fas fa-plane-departure text-muted"></i>
                  </span>
                </div>
                <input id="hrdep" type="text" required="required" name="heurearrivee" placeholder="Heure arrivé" class="form-control bg-white border-left-0 border-md">
              </div>

<div class="input-group col-12  mb-4" id="cacher2">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="far fa-calendar-alt text-muted"></i>
                              </span>
                            </div>
                            <input type="text" id="demo-11_3" name="escale" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="Date depart escale " >
                            
                          </div>
                          <div class="input-group col-12  mb-4" id="cacher3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fas fa-plane-departure text-muted"></i>
                  </span>
                </div>
                <input id="hrdep" type="text"  name="heuredateescale" placeholder="heure escale" class="form-control bg-white border-left-0 border-md">
              </div>
      
                            
           
              <div class="input-group col-12  mb-4">
             
                  <select class="form-control bg-white  border-md" name="airdep" required="required">
                    <option value="" disabled selected hidden>Aéroport Depart</option>
                       <?php $result=$bdd ->query('SELECT * FROM aeroport ');
        while ($data=$result->fetch())
             { ?>

              <option value="<?php echo $data['nom_aeroport']; ?>"><?php echo $data['nom_aeroport'];  ?></option>
                 <?php }?>
            </select>

              </div>


                 <div class="input-group col-12  mb-4" id="cacher1" >
             
                  <select class="form-control bg-white  border-md" name="airesc" >
                    <option value="" disabled selected hidden>Aéroport Escale</option>
                    
             <?php $result=$bdd ->query('SELECT * FROM aeroport ');
        while ($data=$result->fetch())
             { ?>

              <option value="<?php echo $data['nom_aeroport']; ?>"><?php echo $data['nom_aeroport'];  ?></option>
                 <?php }?>
            </select>

              </div>


              

      

                 <div class="input-group col-12  mb-4">
             
                  <select class="form-control bg-white  border-md" name="aerarrv" required="required">
                              <option value="" disabled selected hidden>Aéroport Déstination</option>
              
              <?php $result=$bdd ->query('SELECT * FROM aeroport ');
        while ($data=$result->fetch())
             { ?>

              <option value="<?php echo $data['nom_aeroport']; ?>"><?php echo $data['nom_aeroport'];  ?></option>
                 <?php }?>
            </select>

              </div>




              <div class="input-group col-12  mb-4" id="cacher1"required="required">
             
                  <select class="form-control bg-white  border-md" name="matravion">
                    <option value="" disabled selected hidden>Matricule Avion</option>
                    
              <?php $result=$bdd ->query('SELECT * FROM avion ');
        while ($data=$result->fetch())
             { ?>

              <option value="<?php echo $data['matricule_avion']; ?>"><?php echo 'GE-';echo $data['matricule_avion'];  ?></option>
                 <?php }?>
            </select>

              </div>
                 <div class="input-group col-12  mb-4">
                  <div class="col-12"><label>Prix classe affaire</label></div>
                

                <input type="text" name="ecoadulte" required="required" placeholder=" Adule  " class="form-control bg-white ">
                <input  type="text" name="ecoenfant" required="required" placeholder=" Enfant " class="form-control bg-white ">
                <input  type="text" name="ecobebe" required="required" placeholder=" Bébé" class="form-control bg-white ">
              </div>
              <div class="input-group col-12  mb-4">
                  <div class="col-12"><label>Prix classe économique</label></div>
                

                <input  type="text" name="adulte" required="required" placeholder=" Adule  " class="form-control bg-white ">
                <input  type="text" name="enfant" required="required" placeholder=" Enfant " class="form-control bg-white ">
                <input  type="text" name="bebe" required="required" placeholder=" Bébé" class="form-control bg-white ">
              </div>
              <div class=" text-center mx-auto">
              <input  type="submit" name="valider" value="valider" class="btn btn-block btncard">
              </div>



            </form>
          </div>
         
      
        </div>
      </div>
    </div>
    
    <!--details-->
   

    
      <?php 

$result=$bdd ->query('SELECT * FROM vol ');
$var =0;
while ($data=$result->fetch())
 { $var++; ?>
    <div class="modal fade mt-5" id="detvol<?php  echo $var?>">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header  text-white"style="background: gray">
            <h5 class="modal-title">Detail vol</h5>
            <button class="close" data-dismiss="modal">
            <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- DETAILS -->
             

     
            <form method="POST" action="admin.php">
              

                           <div class="input-group col-12  mb-4">
                            
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="far fa-calendar-alt text-muted"></i>
                              </span>
                            </div>
                            <input id="demo-11_2" type="text"  name="dep2" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="<?php echo $data['date_depart']?>" >
                            
                          </div>

<div class="input-group col-12  mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fas fa-plane-departure text-muted"></i>
                  </span>
                </div>
                <input id="hrdep" type="text"   name="hdep2" placeholder="<?php echo $data['heure_depart']?>" class="form-control bg-white border-left-0 border-md">
              </div>

                          <div class="input-group col-12  mb-4">
                            
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="far fa-calendar-alt text-muted"></i>
                              </span>
                            </div>
                            <input id="demo-11_2" type="text"  name="arr2" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="<?php echo $data['date_arrivee']?>" >
                            
                          </div>
                          <div class="input-group col-12  mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fas fa-plane-departure text-muted"></i>
                  </span>
                </div>
                <input id="hrdep" type="text"   name="harr2" placeholder="<?php echo $data['heure_arrivee']?>" class="form-control bg-white border-left-0 border-md">
              </div>
              
              <div class="input-group col-12  mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fas fa-plane-departure text-muted"></i>
                  </span>
                </div>
                <input id="aerdep" type="text" name="airdep2" placeholder="<?php echo $data['nom_aer_dep']?>" class="form-control bg-white border-left-0 border-md">
              </div>
              <!-- Last Name -->
              <div class="input-group col-12  mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white px-4 border-md border-right-0">
                    <i class="fas fa-plane-arrivalfas fa-plane-arrival text-muted"></i>
                  </span>
                </div>
                <input id="aerarr" type="text" name="aerarrv2" placeholder="<?php echo $data['nom_aer_arr']?>" class="form-control bg-white border-left-0 border-md">
              </div>
            
            
          </div>
          <div class="modal-footer">
            <div class="container">
              <div class="row">
                
                <div class="col-md-6">
                  <input type="hidden" name="save1" value="<?php echo $data['num_vol']?>" class="btn btn-danger btn-block"  class="fas fa-trash">
                  <input type="submit" name="save" value="Save Changes" class="btn btn-success btn-block"
                     class="fas fa-check" >
                  
                </div>
                <div class="col-md-6">
                  <input type="hidden" name="delete1" value="<?php echo $data['num_vol']?>" class="btn btn-danger btn-block"  class="fas fa-trash">
                  <input type="submit" name="delete" value="Delete Post" class="btn btn-danger btn-block"  class="fas fa-trash">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
 <?php
 } ?>
          
        </div>
      </div>
    </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="js/lightpick.js"></script>
 <script src="js/date.js"></script>
  <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>

          <script>
          $(function () {
          $('input, select').on('focus', function () {
          $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
          });
          $('input, select').on('blur', function () {
          $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
          });
          });
          </script>
          
          <script>
                $(document).ready(function(){
                $("#lmsg").show();
                $("#lfac").hide();
                $("#lvols").hide();
                $("#loffres").hide();
                $("#lavions").hide();
            
                $("#lof").click(function(){
                $("#loffres").show();
                $("#lfac").hide();
                $("#lvols").hide();
                $("#lmsg").hide();
                $("#lavions").hide();
                });
                $("#lvo").click(function(){
                $("#lvols").show();
                $("#lfac").hide();
                $("#lmsg").hide(); 
                $("#loffres").hide();
                $("#lavions").hide();
                });
                $("#lav").click(function(){
                $("#lavions").show();
                $("#lfac").hide();
                $("#lvols").hide();
                $("#lmsg").hide();
                $("#loffres").hide();
                });
                $("#msg").click(function(){
              
                $("#lmsg").show();
                $("#lfac").hide();
                $("#lvols").hide();
                $("#lavions").hide();
                $("#loffres").hide();
                });
                $("#fac").click(function(){
                $("#lavions").hide();
                $("#lfac").show();
                $("#lvols").hide();
                $("#lmsg").hide();
                $("#loffres").hide();
                });
          });
                 
          </script>
         
              <script >
                $("#esc").click(function(){
                        $("#cacher1").show();
                       $("#cacher2").show();
                       $("#cacher3").show();});
                
                         $("#simp").click(function(){
                        $("#cacher1").hide();
                        $("#cacher2").hide();
                        $("#cacher3").hide();
                        });

                      </script>
              

    <script>
  
  
    var a = new Lightpick({
    field: document.getElementById('demo-11_1'),
    repick: false,
    minDate : moment(),
    });

    var b = new Lightpick({
    field: document.getElementById('demo-11_2'),
    repick: false,
    minDate : moment(),
    });
      var c = new Lightpick({
    field: document.getElementById('demo-11_3'),
    repick: false,
    minDate : moment(),
    });
    </script>
        </body>
      </html>
      <?php
 


if (isset($_POST['valider'])) {
if ((isset($_POST['depart']))&& (!empty($_POST['depart']))&& (empty($_POST['airesc']))&& (empty($_POST['heuredateescale']))&& (!empty($_POST['retour']))&& (!empty($_POST['airdep']))&& (!empty($_POST['aerarrv']))&& (!empty($_POST['matravion']))&& (empty($_POST['escale'])) &&(isset($_POST['retour']))&&(isset($_POST['airdep']))&&(isset($_POST['aerarrv']))&&(isset($_POST['matravion']))&&(isset($_POST['heuredepart']))&& (!empty($_POST['heuredepart']))&&(isset($_POST['heurearrivee']))&& (!empty($_POST['heurearrivee']))&&(isset($_POST['ecoadulte']))&& (!empty($_POST['ecoadulte']))&&(isset($_POST['ecoenfant']))&& (!empty($_POST['ecoenfant']))&&(isset($_POST['ecobebe']))&& (!empty($_POST['ecobebe']))&&(isset($_POST['adulte']))&& (!empty($_POST['adulte']))&&(isset($_POST['enfant']))&& (!empty($_POST['enfant']))&&(isset($_POST['bebe']))&& (!empty($_POST['bebe']))) {


      //  $depart =$_POST['depart'];
        // $retour =$_POST['retour'];
         $airdep =$_POST['airdep'];
         $aerarrv =$_POST['aerarrv'];
         $matravion =$_POST['matravion'];
          $heuredepart=$_POST['heuredepart'];
          $heurearrivee=$_POST['heurearrivee'];
          $ecoadulte=$_POST['ecoadulte'];
          $ecoenfant=$_POST['ecoenfant'];
          $ecobebe=$_POST['ecobebe'];
          $adulte=$_POST['adulte'];
          $enfant=$_POST['enfant'];
          $bebe=$_POST['bebe'];
         //$depart2 = date("Y/m/d", strtotime($_POST['depart']));
        //$retour2 = date("Y/m/d", strtotime($_POST['retour']));

         $depart =$_POST['depart'];
$depart1 = str_replace('/', '-', $depart);
$depart2 =date('Y-m-d', strtotime($depart1));

$retour =$_POST['retour'];
$retour1 = str_replace('/', '-', $retour);
$retour2 =date('Y-m-d', strtotime($retour1));
         


 $bdd->exec('INSERT INTO `vol`(`date_depart`,`heure_depart`,`date_arrivee`,`heure_arrivee`,`nom_aer_dep`,`nom_aer_arr`,`matricule_avion`,`prix_eco_adulte`,`prix_eco_enfant`,`prix_eco_bebe`,`prix_premiere_adulte`,`prix_premiere_enfant`,`prix_premiere_bebe`) VALUES ("'.$depart2.'","'.$heuredepart.'","'.$retour2.'","'.$heurearrivee.'","'.$airdep.'","'.$aerarrv.'","'.$matravion.'","'.$ecoadulte.'","'.$ecoenfant.'","'.$ecobebe.'","'.$adulte.'","'.$enfant.'","'.$bebe.'")');  

?>
          <script>
     var url = "admin.php";
     window.location.replace (url);
     $('.close3').fadeOut(300);
</script>
<?php
       
  }

if ((isset($_POST['depart']))&& (!empty($_POST['depart']))&& (!empty($_POST['airesc']))&&(!empty($_POST['heuredateescale']))&& (!empty($_POST['retour']))&& (!empty($_POST['airdep']))&& (!empty($_POST['aerarrv']))&& (!empty($_POST['matravion']))&& (!empty($_POST['escale'])) &&(isset($_POST['retour']))&&(isset($_POST['airdep']))&&(isset($_POST['aerarrv']))&&(isset($_POST['matravion']))&&(isset($_POST['heuredepart']))&& (!empty($_POST['heuredepart']))&&(isset($_POST['heurearrivee']))&& (!empty($_POST['heurearrivee']))&&(isset($_POST['ecoadulte']))&& (!empty($_POST['ecoadulte']))&&(isset($_POST['ecoenfant']))&& (!empty($_POST['ecoenfant']))&&(isset($_POST['ecobebe']))&& (!empty($_POST['ecobebe']))&&(isset($_POST['adulte']))&& (!empty($_POST['adulte']))&&(isset($_POST['enfant']))&& (!empty($_POST['enfant']))&&(isset($_POST['bebe']))&& (!empty($_POST['bebe']))) {


     //$escale=($_POST['escale']);
      $heuredepart=$_POST['heuredepart'];
          $heurearrivee=$_POST['heurearrivee'];
          $heuredateescale=$_POST['heuredateescale'];
$airdep =$_POST['airdep'];
         $aerarrv =$_POST['aerarrv'];
         $matravion =$_POST['matravion'];
         $ecoadulte=$_POST['ecoadulte'];
          $ecoenfant=$_POST['ecoenfant'];
          $ecobebe=$_POST['ecobebe'];
          $adulte=$_POST['adulte'];
          $enfant=$_POST['enfant'];
          $bebe=$_POST['bebe'];

         $depart =$_POST['depart'];
$depart1 = str_replace('/', '-', $depart);
$depart2 =date('Y-m-d', strtotime($depart1));

$retour =$_POST['retour'];
$retour1 = str_replace('/', '-', $retour);
$retour2 =date('Y-m-d', strtotime($retour1));

     $airesc=($_POST['airesc']);

     $escale1=$_POST['escale'];
$escale2 = str_replace('/', '-', $escale1);
$escale =date('Y-m-d', strtotime($escale2));
      

 $bdd->exec('INSERT INTO `vol`(`date_depart`,`heure_depart`,`date_arrivee`,`heure_arrivee`,`nom_aer_dep`,`nom_aer_arr`,`matricule_avion`,`prix_eco_adulte`,`prix_eco_enfant`,`prix_eco_bebe`,`prix_premiere_adulte`,`prix_premiere_enfant`,`prix_premiere_bebe`) VALUES ("'.$depart2.'","'.$heuredepart.'","'.$retour2.'","'.$heurearrivee.'","'.$airdep.'","'.$aerarrv.'","'.$matravion.'","'.$ecoadulte.'","'.$ecoenfant.'","'.$ecobebe.'","'.$adulte.'","'.$enfant.'","'.$bebe.'")'); 

  $result=$bdd ->query("SELECT `num_vol` FROM `vol` WHERE `num_vol`=(select max(`num_vol`)FROM `vol`) ");
        while ($data=$result->fetch())
             { 
$numescal=$data['num_vol'];
             }

      $bdd->exec('INSERT INTO `escale`(`num_vol`,`date_depart`, `nom_aeroport`,`heure_depart`) VALUES ("'.$numescal.'","'.$escale.'", "'.$airesc.'","'.$heuredateescale.'")');
      ?>
          <script>
     var url = "admin.php";
     window.location.replace (url);
     $('.close3').fadeOut(300);
</script>
<?php

    }

             $matravion =$_POST['matravion'];


$result=$bdd ->query('SELECT v.num_vol,s.code_siege FROM vol v,siege s WHERE NOT EXISTS (SELECT sd.num_vol FROM siegedispo sd WHERE v.num_vol=sd.num_vol)AND v.matricule_avion=s.matricule_avion and v.matricule_avion="'.$matravion.'"');
    while ($data=$result->fetch())
     {

$code_siege=$data['code_siege'];
        $num_vol=$data['num_vol'];
        
$bdd->exec('INSERT INTO `siegedispo`(`code_siege`, `num_vol`) VALUES ("'.$code_siege.'", "'.$num_vol.'")');

}



}

 if (isset($_POST['valider2'])) {
if ((isset($_POST['nomavion']))&& (!empty($_POST['nomavion']))&&(isset($_POST['poidav']))&& (!empty($_POST['poidav']))&&(isset($_POST['nbr-s-e']))&& (!empty($_POST['nbr-s-e'])) &&(isset($_POST['nbr-s-p']))&& (!empty($_POST['nbr-s-p']))) {


      //  $depart =$_POST['depart'];
        // $retour =$_POST['retour'];
        
         $nomavion =$_POST['nomavion'];
         $poidav =$_POST['poidav'];

         //$depart2 = date("Y/m/d", strtotime($_POST['depart']));
        //$retour2 = date("Y/m/d", strtotime($_POST['retour']));

         $nbre =$_POST['nbr-s-e'];
         $nbrp=$_POST['nbr-s-p'];

 $bdd->exec('INSERT INTO `avion`(`nom_avion`,`poid`,`nbrrsiege_eco`,`nbrsiege_premiere`) VALUES ("'.$nomavion.'","'.$poidav.'","'.$nbre.'","'.$nbrp.'")'); 

         
}}
if (isset($_POST['delete']))
{
$delete=$_POST['delete1'];

  $bdd->exec('DELETE FROM vol WHERE num_vol="'.$delete.'"') ;
  ?>
 ?>
<script>
     var url = "admin.php";
     window.location.replace (url);
</script>
<?php
}
 if (isset($_POST['save'])) {
  $save=$_POST['save1'];

if (isset($_POST['dep2'])){
$dep=$_POST['dep2'];
$bdd->exec('UPDATE `vol` SET `date_depart`="'.$dep.'" WHERE `num_vol`="'.$save.'"'); 
}
  if (isset($_POST['hdep2'])){
    $hdep=$_POST['hdep2'];
    $bdd->exec('UPDATE `vol` SET `heure_depart`="'.$hdep.'" WHERE `num_vol`="'.$save.'"'); 
  }
    if (isset($_POST['arr2'])){
      $arr=$_POST['arr2'];
      $bdd->exec('UPDATE `vol` SET `date_arrivee`="'.$arr.'" WHERE `num_vol`="'.$save.'"'); 
    }
      if (isset($_POST['harr2'])){
        $harr=$_POST['harr2'];
        $bdd->exec('UPDATE `vol` SET `heure_arrivee`="'.$harr.'" WHERE `num_vol`="'.$save.'"'); 
      }
        if (isset($_POST['airdep2'])){
          $airdep2=$_POST['airdep2'];
          $bdd->exec('UPDATE `vol` SET `nom_aer_dep`="'.$airdep2.'" WHERE `num_vol`="'.$save.'"'); 
        }
          if (isset($_POST['aerarrv2'])){
            $aerarrv2=$_POST['aerarrv2']; 
            $bdd->exec('UPDATE `vol` SET `nom_aer_arr`="'.$aerarrv2.'" WHERE `num_vol`="'.$save.'"'); 
          }
          ?>
          <script>
     var url = "admin.php";
     window.location.replace (url);
</script>
<?php

}


?>






