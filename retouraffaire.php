<?php
session_start();

require "navigation.php";

$adulte =$_SESSION['id'];
$enfant = $_SESSION['id1'];
$bebe = $_SESSION['id2'];
$_SESSION['clas'] ;
$id = $_GET['num_vol'];
$mas_status = 'unchecked';
$femi_status = 'unchecked';

require "bdpdoo.php";;
     
$req=$pdo->prepare("SELECT v.num_vol, v.nom_aer_dep, v.nom_aer_arr , v.date_depart , v.heure_depart , v.heure_arrivee , TIMEDIFF( `heure_arrivee`, `heure_depart` ) AS Temps 
from vol v  WHERE num_vol=? ");
$req->execute([$id]);
while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
    $_SESSION['num_vola']= $row ['num_vol'];
    $_SESSION['num_vola']= $row ['num_vol'];
    $_SESSION['dep']= $row ['nom_aer_dep'];
    $_SESSION['arr']= $row ['nom_aer_arr'];
    $_SESSION['heurdep']= $row ['heure_depart'];
    $_SESSION['heurarr']= $row ['heure_arrivee'];
    $_SESSION['date']= $row ['date_depart'];
    $_SESSION['duree']= $row ['Temps'];
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet"  href="css/compte.css">
        <link rel="stylesheet" href="css/bagages.css">
        <link rel="stylesheet" href="css/menu.css">
		 




	<title>vol_aller</title>
</head>

<body>


	
	
	




<div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>

<style>
.card{
margin-top:40px;
}
.card-header{
background-color:#808080;
display:flex;
justify-content:space-around;
}
.row{
margin-top:10px;
}
.i:hover{
   font-size:20px;
   -webkit-transition:all 0.5s ease;
   -o-transition:all 0.5s ease;
   -moz-transition:all 0.5s ease;
   -ms-transition:all 0.5s ease;
   transition:all 0.5s ease;
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
    <?php 
   
  // rpix total
  
extract($_POST);

$eco_status = 'unchecked';
$aff_status = 'unchecked';



if (isset($_POST)) {
$depart =  $_SESSION['dep'];
$arriver = $_SESSION['arrivee'] ;
$post_date =  $_SESSION['date1'];
$post_date1 = $_SESSION['date2'];
    
    require 'bd.php';

    

       
 
    //requete de la recherche

    $req= "SELECT v.num_vol, v.nom_aer_dep, v.nom_aer_arr , prix_premiere_adulte, prix_premiere_enfant,prix_premiere_bebe,v.date_depart , v.heure_depart , v.heure_arrivee , TIMEDIFF( `heure_arrivee`, `heure_depart` ) AS Temps , s.classe_siege,s.classe_siege
           from vol v ,avion a , siege s ,siegedispo de
           where v.matricule_avion = a.matricule_avion 
             and v.num_vol =de.num_vol
           and a.matricule_avion= s.matricule_avion 
           and s.classe_siege like 'premiere' 
          and v.nom_aer_arr  ='$depart'
           and v.nom_aer_dep = '$arriver'
           
           and v.date_depart='$post_date1'
        
       group by num_vol

";
require "bdpdoo.php";
         
 
                 
                
    
      $result = mysqli_query($connection, $req) or die("bad");
 
          
               $req2=$pdo->prepare('SELECT * from vol v ,avion a ,siege s , escale e 
                where v.matricule_avion = a.matricule_avion 
                and a.matricule_avion = s.matricule_avion 
                and s.classe_siege="premiere" 
                and e.num_vol=? 

limit 4 ');

      $rows=$req2->fetch();
             ?>
    
 
    <div class="container">
         <!--card-->
                <div class="card">
                        <div class="card-header">
	                          <i class='fas fa-plane-departure' style='font-size:29px;color:#f9a602'></i>
	                           <p class="font-weight-bolder" style="font-size:20px;color:white"><?php echo $_SESSION['arrivee']?></p>
                               <i class='fas fa-plane-arrival' style='font-size:29px;color:#f9a602;'></i>
	                           <p class="font-weight-bolder" style="font-size:20px;color:white"><?php echo $_SESSION['dep'] ?></p>
			                    <p class="font-weight-bolder" style="font-size:17px;color:white"><?php echo $post_date1 ?></p>
                        </div><!--div de card header-->
		 
                        <!--card body-->
	 
	 
                         <div class="card-body">
	 
	                         <ul class="nav nav-tabs nav-justified">
                             <li class="nav-item">
                             <a class="nav-link " style="color:#365390;font-size:20px"><p >Veuillez choisir votre vol de retour </p></a>
                             </li>
                             </ul>
	
		         <?php   $var =0; 

  
          while ($row = mysqli_fetch_assoc($result)) {
              $num_vol= $row['num_vol'];
 $req2->execute([$num_vol]);
            $_SESSION['clas']=$row['classe_siege'] ;
                    $prixa = $row['prix_premiere_adulte'];
                    $nbr=  $row['prix_premiere_enfant'] ;
                    $beb= $row['prix_premiere_bebe'] ;
                    $prixt = $_SESSION['id'] *  $prixa;
                             
                    $prite= $_SESSION['id1'] *    $nbr ;
                 
          
                    $prixb = $_SESSION['id2'] *$beb;
          
            
                    $prix_total =  $prixt + $prite +  $prixb ;
                    $_SESSION['prix']= $prix_total;
                    $var++; ?>
	
	
	                         <!--ligne 11111111111111111111111111111111111111-->
			
	 	                    <div class="row"  style="border-bottom:7px solid #365390;margin-top:30px;margin-bottom:10px">
							         <!--colonne1-->
                                     <div class="col-sm-5  " style=" border:1px solid #365390;height:88px;margin-right:2px">
					                         <div class="d-flex justify-content-between bg mb-3" style="margin-top:10px">
                                                 <div class="p-2 bg"><i class='fas fa-plane-departure' style='font-size:14px;color:#365390'></i><?php echo $row['nom_aer_dep'] ?> <?php   echo $row['heure_depart']?></div>
                                                                                                 <?php $rows=$req2->fetch();
                                                 if ($rows=$req2->fetch()){
                                                 ?>
                
                                                  <div class="p-2 bg"><i class='fas fa-map-marker-alt' style='font-size:14px;color:#365390'></i><?php echo $rows['nom_aeroport']; ?></div><?php } ?>
                                                 <div class="p-2 bg"><i class='fas fa-plane-arrival' style='font-size:14px;color:#365390'></i><?php echo $row['nom_aer_arr'] ?> <?php  echo $row['heure_arrivee']?></div>
                                            </div> 
				                    </div><!--div colonne 1-->
							         <!--colonne 2-->
									 
                                     <div class="col-sm-2"style=" border:1px solid #365390;height:88px;padding-top:15px;margin-right:2px"><p><i class='fas fa-stopwatch' style="margin-right:2px"></i> Durée<?= $row['Temps']?></p></div>
									 <!--colonne 3-->
                                     <div class="col-sm-2" style=" border:1px solid #365390;height:88px;padding-top:15px;margin-right:2px;font-size:17px"><?php echo            $_SESSION['prix']  ; ?> DA</br> 
							             <a  class="i" href="detail.php?select=<?php echo $num_vol ?>" style="color:#365390;font-size:17px" data-target="#myModal<?php echo $var ?>" data-toggle="modal" >Voir détails</a>
				  
				                             <!-- The Modal -->
                                             <div class="modal fade" id="myModal<?php echo $var ?>">
                                             <div class="modal-lg modal-dialog  modal-dialog-centered mx-auto">
									 
                                                  <div class="modal-content">
      
                                                     <!-- Modal Header -->
                                                     <div class="modal-header" style="background-color:#365390;color:white;height:70px">
                                              
												      <div><h5 class="text-center">Détails du vol</h5></div>
												 
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                     </div>
        
                                                     <!-- Modal body -->
													 
                                                     <div class="modal-body"">
											             <div class="row" >
		                                                     <div class="col-sm-8"><i class='fas fa-calendar-alt' style='font-size:25px;margin-right:10px;color:#365390'></i><?php echo $row['date_depart'] ?></div>
											                 <div class="col-sm-4"> Classe  <?php  echo  $_SESSION['clas']?></div>
											             </div>
											
		 

		                                                 <div class="row">
                                                             <div class="col-sm-4 col-lg-4"><i class='fas fa-plane-departure' style='font-size:25px;color:#365390;padding-right:15px'></i><?=$row['nom_aer_dep']?> <i class='fas fa-clock' style='font-size:20px;color:#365390'></i><?= $row['heure_depart']?>   </div>
                                                                      <?php $rows=$req2->fetch();
                                                 
                                                                                             if ($rows=$req2->fetch()){
                                                                                                 ?>
                                                             <div class="col-sm-4 col-lg-4"><i class='fas fa-map-marker-alt ' style='font-size:25px;color:#365390;padding-right:15px'></i><?php echo $rows['nom_aeroport']; ?>(<?php echo $rows['heure_depart']; ?>)</div>
                                                                                           <?php }?>
                                                             <div class="col-sm-4 col-lg-4"><i class='fas fa-plane-departure' style='font-size:25px;color:#365390;padding-right:15px'></i><?php echo $row['nom_aer_arr'] ?> <i class='fas fa-clock' style='font-size:20px;color:#365390'></i><?php echo $row['heure_arrivee'] ?></div>
  
                                                         </div>
											 
	                                                     <div class="row" style="margin-left:2px">
		                                                     <i class='fas fa-stopwatch' style="margin-right:10px;padding-top:5px;font-size:24px;color:#365390"></i> Durée <?php  echo $row['Temps'] ; ?><br>
		                                                 </div>

		
		
		                                                 <div class="row">
		                                                      <div class="col-sm-3">Passagers</div>
                                                                                            <?php if ($adulte >0) {?>
		                                                      <div class="col-sm-3"> <i class='fas fa-male' style='font-size:24px;padding-right:15px;color:#365390'></i><?php echo $adulte;?>Adultes</div>
                                                                                        <?php } ?>
                                                                                     <?php if ($enfant >0) {?>
												              <div class="col-sm-3"> <i class='fas fa-child' style='font-size:24px;padding-right:15px;color:#365390'></i><?php echo $enfant;?>Enfant</div>
                                                                                       <?php } ?>
                                                                                      <?php if ($bebe >0) {?>
                                                               <div class="col-sm-3"><i class='fas fa-baby mr-2' style="font-size:24px;color:#365390"></i><?php echo $bebe;?> Bébé</div>
                                                                                         <?php } ?>                         
                                                      
                                                                </div>
														
		                                                 <div class="row" style="pading-top:10px">
		                                  
                                                             <div class="col-sm-12" style="margin-top:10px"><h4 class="text-center">Prix:  <?php echo $_SESSION['prix']  ; ?>DA</h4></div>
			                                             </div>
											
								                    </div><!--div du modal body-->
        
                                                    <!-- Modal footer -->
                                                     <div class="modal-footer" style="background-color:#365390;color:white">
                                   
                                                     </div>
        
                                                    </div><!--div du model content-->
                                                </div>
                                                </div>
  
				                            </div><!--div de colonne 3-->
				 
				
		
				
				 
				                     <!--colonne 4-->
			                        <button class="btn btn col-sm-2" type="button"  data-target="#myModal2<?php echo $var ?>" data-toggle="modal"  class="btn col-sm-12" style="background-color:#f9a602;color:#365390;width:100%">Réserver</button>
				 
				                     <!-- The Modal -->
                                     <div class="modal fade" id="myModal2<?php echo $var ?>">
                                     <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
      
                                             <!-- Modal Header -->
                                             <div class="modal-header" >
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             </div>
        
                                             <!-- Modal body -->
                                             <div class="modal-body">
                                                 <p class="text-center"> Voulez vous confirmer la réservation de ce vol?</p>
		
                                             </div>
		
                                             <!-- Modal footer -->
                                             <div class="modal-footer">
                                                       <a href="reservationretourAff.php?num_vol=<?php echo $row['num_vol'] ; ?>" class="btn"style="background-color:#808080;color:white"> Oui </a> 
                                                 <button  class="btn btn" data-dismiss="modal" style="background-color:#808080;color:white">Non</button>
                                             </div>
		
		                                </div>
		                            </div>
				                    </div>
 
 
                            </div><!--div de row FIN DE LIGNE 111111-->
							
							
							
				 <?php
            
        }
    ?>			
				
</div>
							

			
        </div>
    
    </div>
           
<?php
    }
       
       
?>                                                                                                                                      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
 
        <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>

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