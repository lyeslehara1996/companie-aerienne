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
        <link rel="stylesheet" href="css/compte.css">





	<title>Informations légales</title>
</head>
<body>
	<style>
	

.card{
  margin-bottom: 30px;

}
.card-header{
  background-color:#0f1b54;
  

}
li{
  margin-bottom: 15px;
}

h2{
  margin-top: 30px;
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


 <div class="container " style="margin-top: 50px;">
   

   

    

      <div class="card bg-white  shadow">
        <div class="card-header text-center">
          <i class="far fa-clipboard " style="font-size: 38px;color: #fff;">
          <h1 class="d-inline ml-2" style="color: #fff;" >Informations légales</h1></i>

        </div>
         <div class="card-body mt-4">
          <blockquote class="blockquote ml-5">
            <h2>Le site <a href="#" style="color: #365390;">www.goldeneagle.dz</a></h2>
            <p>Golden Eagle a mis en place son Site Web afin d’offrir à sa clientèle une plus grande facilité pour effectuer
             des réservations, des achats de billets d’avion et des services auxiliaires sur ses lignes aériennes.<br>
           
              Golden Eagle met à la disposition de sa clientèle le site web www.goldeneagle.dz, dénommé le site.
            Nous vous invitons à lire attentivement les conditions d'utilisation de ce site et des services offerts.
            L’utilisation du site vaut acceptation, sans réserves, des conditions énoncées ci-dessous.
             </p>

             <h2>Propriété des données et objets multimédias</h2>
             <p>Le site et son contenu sont la propriété exclusive de GOLDEN EAGLE, et ce pour un usage par sa clientèle à des
             fins strictement privées. Aucune donnée obtenue à partir de ce site ne peut être reproduite, vendue,
             transférée, modifiée, redistribuée, retransmise, publiée ou exploitée commercialement sans l'autorisation
             préalable et écrite de Golden Eagle.
             </p>

             <h2>Garantie et confidentialité des données recueillies </h2>
             <p>Golden Eagle s'engage à respecter la confidentialité des données transmises et à ne pas les divulguer, vendre
             ou louer à un tiers, sauf si Golden Eagle est légalement tenue de le faire, notamment dans le cadre d’une
             action en justice ou si de telles informations sont requises par les autorités compétentes. 
             </p>

             <h2>Obligations de l’utilisateur </h2>
             <p> Il est fait obligation à l’utilisateur de:</p>
             <ul type="disc">
               <li>Ne pas utiliser le site pour des réservations spéculatives, fausses ou frauduleuses ;</li>
               <li>Fournir des informations exactes. Il sera tenu responsable de toute information erronée, incomplète
               ou obsolète. </li>
             </ul>
             <h2>Réclamation </h2>
             <p>Pour toute demande ou réclamation sur notre site, veuillez utiliser nos formulaire de contact <a href="">Formulaires de contact</a> </p>
             <h2>Choix du siège</h2>
             <p>Golden Eagle offre pour sa clientèle le pouvoir de choisir un siège</p>
             <h2>Modification des conditions</h2>
             <p>Golden Eagle se réserve le droit de modifier ces Conditions Générales à tout moment et sans préavis. Les
modifications entreront en vigueur dès leur publication sur le site web, et n'auront pas d'effet rétroactif sur
les dispositions existantes. </p>



         
          </blockquote>
            
          </div>
          
        </div>
      </div>


        

  <div style="margin-top:50px;"></div>

</div>


  







      	
     
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
