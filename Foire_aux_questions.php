<?php session_start() ; ?>

<!DOCTYPE html>
<html>
<head>
   <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet"  href="css/compte.css">
        <link rel="stylesheet" href="css/bagages.css">
        <link rel="stylesheet" href="css/menu.css">
		 




	<title>Foire aux questions</title>
</head>
<body>
	<style>
	
.row-hl {
      background: #f4f4f4;
    }
.item-hl {
      border: 1px solid #333;
    }
	.input-hidden {
  position: absolute;
  margin-right:20px;
  left: -9999px;
}

a{
  color: #fff;
}
a:hover{
  text-decoration: : none;
  color: #f9a602;
}
.card{
margin-top:40px;
}
.card-header{
background-color:#0f1b54;
display:flex;
height: 60px;
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



/*
 | //lea.verou.me/css3patterns
 | Because white bgs are boring.
*/

}

</style>

      <!-- le menu-->
      <header>
	 <?php include "navigation.php";?>
      <nav class="navbar navbar-expand-md  navbar2 " >

        <div class="container ">

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span><img style="height:30px" src="img/Menu1.png"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav" style="justify-content: center">
            <ul class="navbar-nav " >
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="index.php">Accueil</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="list_destination.php">Destinations</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="list_offr.php">Promotions</a>
              </li>

              <li class="nav-item dropdown  ">
                <a href="#" class="nav-link hv dropdown-toggle " data-toggle="dropdown">Informations Voyages</a>
                <div class="dropdown-menu  " style="background: #365390;border: none" >
                  <ul class="list-unstyled " >
                    <li><a href="DocumentsVoyage.php" class="dropdown-item hvlist">Documents de voyage</a></li>
                    <li><a href="BagagesF.php" class="dropdown-item hvlist">Bagages</a></li>
                    <li><a href="Aide.php" class="dropdown-item hvlist">Aide</a></li>
                    <li><a href="contacter.php" class="dropdown-item hvlist">Page de Contact</a></li>

                  </ul>
                </div>
              </li>


              <li class="nav-item dropdown  ">
                <a href="#" class="nav-link hv dropdown-toggle " data-toggle="dropdown">Langue</a>
                <div class="dropdown-menu  " style="background: #365390;border: none" >
                  <ul class="list-unstyled " >
                    <li><a href="#googtrans(fr|en)" class="lang-en lang-select dropdown-item hvlist" data-lang="en">
          <img src="img/usa.png" alt="USA" class="drapo">
        </a></li>
                    <li><a href="#googtrans(en|es)" class="lang-es lang-select dropdown-item hvlist" data-lang="es">
          <img src="img/spain.png" alt="MEXICO" class="drapo">
        </a></li>
                    <li> <a href="#googtrans(fr|fr)" class="lang-es lang-select dropdown-item hvlist" data-lang="fr">
          <img src="img/france.png" alt="FRANCE" class="drapo">
        </a></li>
                    <li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select dropdown-item hvlist" data-lang="zh-CN">
          <img src="img/china.png" alt="CHINA" class="drapo"></a></li>
                    <li>
        <a href="#googtrans(en|ja)" class="lang-es lang-select dropdown-item hvlist" data-lang="ja">
          <img src="img/japan.png" alt="JAPAN" class="drapo"></a></li>
                    <li><a href="#googtrans(en|ar)" class="lang-es lang-select dropdown-item hvlist" data-lang="ja">
          <img src="img/saudi_arabia.png" alt="saudi_arabia" class="drapo"></a>  </li> 
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>

    </header>
	
	
	
<body>



    <div class="container" style="padding-bottom:60px;">
	<div class="jumbotron" style=";padding-top:20px;">
  <h1 style="color: #365390">Foire aux questions</h1><br>
  <p class="text-justify" >
  Voici quelques questions fréquemment posées à propos de notre compagie. Choisissez un thème et ça vous mènera aux questions et aux réponses le concernant . Si vous n’avez pas trouvé ici la réponse à l’une de vos questions, veuillez communiquer avec nous.</p>
</div>
<div style="margin-top: -60px;"></div>
<!--l'accordion-->
<div id="accordion" >

  <div class="card">
          <a class="card-link" data-toggle="collapse" href="#collapseOne">

    <div class="card-header" >
        <h4>Réservation</h4>
    </div>
    </a>
	
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
	
      <div class="card-body">
	  
       <div class="row">
             <a href="#demo"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px;'></i>Comment faire pour réserver en ligne ?</h5></a>
             <div id="demo" class="collapse">
             IL suffit de chercher un depart et une distination sur la page d'accueil, vous serez alors dirigé vers la liste des vols disponibles,vous n'aurez alors qu'a en choisir un et à confirmer !
              </div>
      </div>

       <div class="row">
          <a href="#demo1" data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>Comment faire pour payer les frais du déplacement ?</h5></a>
          <div id="demo1" class="collapse">
                Une fois que vous aurez choisis un vol,
                vous serez amenez à fournir un certain nombre d'informations d'identification relatives au vol,
                vous devriez fournir vos identifiants bancaires afin de finaliser le paiement.
           </div>
       </div>
	   
	    <div class="row">
          <a href="#demo2"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>Qu'en est-ils de la confidentialié des information fournées lors de la réservation ?</h5></a>
          <div id="demo2" class="collapse">
               Les informations fourniées sont hautement confidentielles et manipulées avec une extrême rigueure.
           </div>
       </div>
	   <div class="row">
          <a href="#demo22"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>J'ai perdu mon billet, que faire ?</h5></a>
          <div id="demo22" class="collapse">
               Les informations relatives au passager et à son voyage sont enregistrées sur la base de données de la compagie. La notion de perte du billet n’est plus applicable pour les billets électroniques.

Vous n’aurez qu’à vous présentez à n’importe quelle agence <b>GOLDEN EAGEL</b> pour réimprimer votre billet.
           </div>
       </div>
	      <div class="row">
          <a href="#demo33"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>J'ai pas reçu ma confirmation de réservation, que faire ?</h5></a>
          <div id="demo33" class="collapse">
             Vérifier toujours le courrier SPAM de l’adresse mail utilisée, l’email de confirmation peut s’y trouver.

             En cas de doute ou si vous avez effectué un paiement en ligne contactez nous. 
           </div>
       </div>

     </div>
     </div>
	 </div>

  <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
    <div class="card-header">
        <h4>Enregistrement</h4>
     
    </div>
     </a>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
          <div class="row">
             <a href="#demo3"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>Comment faire pour effectuer un enregistrement ?</h5></a>
             <div id="demo3" class="collapse">
             Vous avez le chois d'effectuer votre enregistrement à l’aéroport avant l'embarquement, ou bien en ligne sur l'anglet enregistrement de ce site.
			 
              </div>
      </div>

       <div class="row">
          <a href="#demo4"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>A quoi sert l'enregistrement ?</h5></a>
          <div id="demo4" class="collapse">
                L'enregistrement sert à fournir des informations complémentaires relatives au vol, vous pouvez préciser à ce stade les baggages à embarquer,le repas à bord, ainsi que le choix de votre siege.
           </div>
       </div>
	   
	    <div class="row">
          <a href="#demo5"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>L'enregistrement peut-il induire des frais supplémentaires à la réservation ?</h5></a>
          <div id="demo5" class="collapse">
               Oui, ou cas ou vous choisissez un repas payant hormis les repas offerts gratuitement.
           </div>
       </div>
	     <div class="row">
          <a href="#demo55"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>L'enregistrement en ligne me disponse t'il de l'enregistrement au niveau de l’aéroport ?</h5></a>
          <div id="demo55" class="collapse">
               L’enregistrement en ligne ne remplace pas l’enregistrement à l’aéroport, mais réduit le temps de traitement de vos informations par le personnel au sol de la compagnie à l’aéroport.
           </div>
       </div>
	     <div class="row">
          <a href="#demo56"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>J'ai effectué mon enregistrement en ligne, à quel heure dois-je arriver à l’aéroport ?</h5></a>
          <div id="demo56" class="collapse">
             Au moins 3 heures avant le départ pour les passagers avec bagages, 1 heure avant pour les passagers sans baggages.
           </div>
       </div>
      </div>
    </div>
  </div>

  <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" >

    <div class="card-header" >
        <h4>Remboursement</h4>
      
    </div>
    </a>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
       

       <div class="row">
          <a href="#demo7"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>Comment pourrais-je demander un remboursement de mon billet ?</h5></a>
          <div id="demo7" class="collapse">
            Le remboursement de votre billet dépend du mode de paiement utilisé, pour cela veuillez nous contacter via mail ou téléphone.
           </div>
       </div>
	   
	    <div class="row">
          <a href="#demo8"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>Quel est le délais maximum pour rembourser mon billet acheté via internet ?</h5></a>
          <div id="demo8" class="collapse">
             Le traitement des demandes de remboursement se fait dans un délais de 6 mois à compter de la date de réception. 
           </div>
       </div>
	    <div class="row">
          <a href="#demo88"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>Puis je rembourser un billet sur un autre compte que celui utilisé pour le paiement ?</h5></a>
          <div id="demo88" class="collapse">
             Le remboursement se fait automatiquement et uniquement sur le compte de la carte utilisée lors du paiement. 
           </div>
       </div>
      </div>
    </div>
  </div>
  
    <div id="collapseOne" class="collapse card-link" data-parent="#accordion">
      <div class="card-body">
        
      </div>
    </div>
  </div>

  <div class="card" >
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">

    <div class="card-header" >
         <h4>Contact clients</h4>
      
    </div>
    </a>
    <div id="collapseFour" class="collapse" data-parent="#accordion">
      <div class="card-body">
          <div class="row">
             <a href="#demo9"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>Comment puis-je vous contactez ?</h5></a>
             <div id="demo9" class="collapse">
             Si vous désirez nous faire part de vos demandes, remarques et suggestions ou si vous désirez déposer une réclamation, vous pourrez le faire via nos formulaires de contact. Pour toute information supplémentaire vous pourrez vous adressez à n’importe quelle agence <b>GOLDEN EAGEL</b>.
              </div>
			
      </div>

       <div class="row">
          <a href="#demo10"  data-toggle="collapse" style="text-decoration:none;color:black"><h5><i class='fas fa-angle-right' style='font-size:15px;padding-right:5px'></i>Quelles informations dois-je fournir dans le cadre de ma réclamation ?</h5></a>
          <div id="demo10" class="collapse">
                Vous devez fournir tous les renseignements nécéssaires au traitement de votre demande à savoir les informations du client et de son voyage, en mentionnant l’objet de la demande et en joignant les pièces justificatives.
           </div>
       </div>
	   
	   
      </div>
    </div>
  </div>
  


 

</div>
	
         
				 
				 
				 
	
	
	</div>
				
</body>
     
	 
	 
	 
	 
  <!-- Footer -->
    <?php include "footers.php";?>
    <!-- Footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




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