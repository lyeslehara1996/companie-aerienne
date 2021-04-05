<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/compte.css">





	<title>Aide</title>
</head>
<body>
	<style>
	

.card{
  margin-bottom: 30px;

}
.card-header{
  background-color:#0f1b54;
  height: 60px;
  

}
h2{
  margin-top: 30px;
}

li{
  margin-bottom: 15px;
}

a{
	color: #fff;

}
a:hover{
	text-decoration: : none;
	color: #f9a602;
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
   

    <!-- ACCORDION -->
    <div id="accordion">


       <div class="card">
    <a href="#collapse4" data-parent="#accordion" data-toggle="collapse">
        <div class="card-header ">
            
              <i class="fas fa-plane-departure" style="font-size: 25px;">
              <h4 class="d-inline ml-2" >Réservation</h4>
              </i>
            
        </div>
        </a>

        <div id="collapse4" class="collapse">
          <div class="card-body">
            <blockquote class="blockquote ml-5">
              <h2>Comment effectuer votre recherche de réservation en ligne ?</h2>
              
              <ul type="disc">
                <li>Accédez au <a href="#" style="color: #365390;">site de notre compagnie</a> </li>
                <li>Remplissez les champs:
                  <ul type="circle">
                    <li>Départ: la ville de votre départ</li>
                    <li>Destination: la ville de votre destination</li>
                    <li>Date départ: la date de votre vol</li>
                    <li>Date d'arrivée: la date de votre retour (Si c'est un aller-retour)</li>
                    <li>Sélectionnez si c'est un aller simple ou un aller retour</li>
                    <li>Sélectionnez si c'est vous désirerez voyager dans la classe affaire ou la classe économique</li>
                    <li>Après avoir saisies ces informations cliquez sur rechercher</li>
                    
                  </ul>
                </li>
                
              </ul>
            
          </div>
        </div>
      </div>
    
      <div class="card">
      <a href="#collapse1" data-parent="#accordion" data-toggle="collapse" >     	
        <div class="card-header ">
              <i  class="fas fa-money-check-alt" style="font-size: 25px;">
             <h4 class="d-inline ml-2" >Enregistrement</h4></i>
            
        </div>
        </a>

        <div id="collapse1" class="collapse ">
          <div class="card-body">
            <blockquote class="blockquote ml-5">
          	
            <h2>Comment faire l'enregistrement en ligne ?</h2>
            <p>Vous voyagez plus rapidement et plus facilement avec l'enregistrement en ligne. Ainsi, vous évitez les éventuelles taxes d'aéroport, le temps perdu dans les files d'attente et le risque de refus d'embarquement du fait de surréservations.
            </p>

            <p>L'enregistrement en ligne vous permet d'obtenir votre carte d'embarquement avant de vous rendre à l'aéroport. Autrement dit, vous n'avez plus qu'à vous diriger directement vers les contrôles de sécurité. Ou, si vous avez des bagages en soute, vous n'avez qu'à les déposer au comptoir de la compagnie aérienne. </p>

            <p>Pour s’enregistrer en ligne suivez les étapes suivantes : </p>

            <ul type="disc" >
           <li > Accédez au <a href="#" style="color: #365390;">site de notre compagnie</a>       
           </li>

           <li>Accédez à votre réservation en saisissant  le numéro de votre réservation et votre nom

           <li>Choisissez un siège, un repas personnalisé et ajoutez vos bagages
           </li>

           <li>Payez les frais de l’enregistrement
           </li>

           <li>Recevoir votre carte d’embarquement
           </li>

            </ul>
          

          <h2>Quand vais-je recevoir ma carte d'embarquement ?</h2>
          <p>Notre<strong> compagnie aérienne ouvre l’enregistrement en ligne que 24 heures avant le départ</strong>, vous recevrez automatiquement vos cartes d’embarquement peu après.</p>

          <p>Toutefois, si vous avez accordé peu de temps de traitement et que vous n’avez toujours pas reçu votre/vos carte(s) d’embarquement, veuillez <a href="#" style="color: #365390;">nous contacter</a> .</p>

          <p>Si votre départ n’est pas prévu dans les prochaines 24 heures, nous vous prions de patienter, car votre/vos carte(s) d’embarquement vous seront généralement envoyée(s) dans les 24 heures précédant le départ.</p>

          <h2>A quel heure dois-je arriver à l’aéroport ?</h2>
          <p>Vous prenez un <strong>vol intérieur</strong> ? Nous vous recommandons de vous présenter à l'aéroport au moins <strong>une heure et demie</strong> avant l'heure de départ. </p>

          <p>Vous prenez un <strong>vol international</strong> ? Il est alors préférable de vous présenter à l'aéroport <strong>2 à 3 heures</strong> avant le décollage.</p>

          

           
           
          </blockquote>
          </div>
        </div>
      </div>


        <div class="card">
    <a href="#collapse6" data-parent="#accordion" data-toggle="collapse">
        <div class="card-header ">
            
              <i class="fas fa-utensils" style="font-size: 25px;">
              <h4 class="d-inline ml-2" >Repas</h4></i>
            
        </div>
        </a>

        <div id="collapse6" class="collapse">
          <div class="card-body">
            <blockquote class="blockquote ml-5">
            <h2>Comment choisir votre repas ?</h2>
            <p>Dans le service repas vous pouvez choisir un repas seulement et une boisson de plus ajouté à nos boissons standars gratuites </p>
              
              <ul type="disc">
                <li>Si vous ne choisissez pas un repas, un repas standard gratuit est séléctionné pour vous </li>
                <li>Si vous ne choisissez pas une boisson, nos boissons standards gratuites sont séléctionnées pour vous </li>
                <li>Nos boissons standards sont :l'eau et le café </li>

                
              </ul>
            </blockquote>
          </div>
        </div>
      </div>


       <div class="card">
         <a href="#collapse3" data-parent="#accordion" data-toggle="collapse">
        <div class="card-header ">
            
              <i class="fas fa-luggage-cart" style="font-size: 25px;">
              <h4 class="d-inline ml-2" >Bagages</h4></i>
            
        </div>
        </a>

        <div id="collapse3" class="collapse">
          <div class="card-body">
            <blockquote class="blockquote ml-5">
            <h2>Comment enregistrer vos bagages ?</h2>
            <p>Lorsque vous effectuez votre enregistrement en ligne, vous pouvez vérifier la quantité de bagages autorisée.</p>
            <h5 style="color: #365390;text-decoration: underline;">Poids maximum:</h5>

            <p>Le poids maximum par pièce en cabine est définit par notre compagnie de:</p>
            <ul type="disc">
              <li>Classe affaire:
              <ul type="circle">
                <li>18 Kg pour tout ce qui comporte Poches, roues et poignées comprises</li>
                <li>14 Kg pour tout ce qui est sac</li>
              </ul>
              </li>
              <li>Classe économique:
                <ul type="circle">
                <li>12 Kg pour tout ce qui comporte Poches, roues et poignées comprises</li>
                <li>8 Kg pour tout ce qui est sac</li>
              </ul>
              </li>
            </ul>
            <p>Le poids maximum par pièce en soute est définit par notre compagnie de:</p>
            <ul type="disc">
              <li>Classe affaire:
              <ul type="circle">
                <li>32 Kg</li>
              </ul>
              </li>
              <li>Classe économique:
                <ul type="circle">
                <li>23 Kg</li>
              </ul>
              </li>
            </ul>
          
            <h5 style="color: #365390;text-decoration: underline;">Dimensions:</h5>
            <p>Les dimensions autorisées des bagages en cabine sont de:</p>
            <ul type="disc">
              <li>Pour tout ce qui comporte Poches, roues et poignées comprises:
              <ul type="circle">
                <li>55 * 35 * 25 cm</li>
              </ul>
              </li>
              <li>Pour tout ce qui est sac:
                <ul type="circle">
                <li>40 * 30 * 15 cm</li>
              </ul>
              </li>
            </ul>
            <p>Les dimensions autorisées des bagages en soute sont de:</p>
            <ul type="circle">
              <li>longueur + largeur + hauteur= 158 cm
            </ul>
            </blockquote>
          </div>
        </div>
      </div>

      
      <div class="card">
      	<a href="#collapse2" data-parent="#accordion" data-toggle="collapse">
        <div class="card-header ">
            
              <img src="img/seat.png" height="45px;" width="50px;" style="margin-left: -8px;">
              <h4 class="d-inline" >Siège</h4></i>
            

        </div>
        </a>

        <div id="collapse2" class="collapse">
          <div class="card-body">
            <blockquote class="blockquote ml-5">

            <h2>Comment choisir mon siège ?</h2>
          <p>Vous préférez voyager côté <strong>hublot</strong> ou côté <strong>couloir</strong> ? Faites-le nous savoir  durant votre enregistrement et nous réserverons votre siège pour vous.</p>

          <p>Gardez à l'esprit que la réservation de sièges est un service qui n'est pas disponible avec toutes les compagnies aériennes ni sur tous les itinéraires. Dans certains cas, notamment pour les billets à bas prix, des <strong>frais supplémentaires</strong> sont à prévoir. </p>
          	
            <h2 >​​​​​​​Sélectionnez votre siège</h2>
            <p>Que vous aimiez le siège côté hublot ou couloir, ou encore un emplacement plus spacieux, voici toutes les informations nécessaires à la réservation de vos emplacement à bord de nos lignes.
            </p>

            <h2 >​​​​​​​Réservations de sièges</h2>
            <p>Vous pouvez choisir votre siège préféré sur les vols opérés par Golden Eagle à l’international pendant la réservation. La sélection de siège standard est gratuite pour les clients :
            </p>
            <ul type="disc">
            	<li>Voyageant à l'étranger en classe économique à tarif flexible</li>
            	<li>Voyageant à l'étranger en classe première</li>
            </ul>

            <h2 >​​​​​​​Sélectionnez votre siège maintenant</h2>
            <p>Pour sélectionner votre siège, connectez-vous à <a href="">mes réservations</a> .
            </p>

            <h5><strong>Frais des sièges</strong></h5>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Type de siège</th>
                    <th>​Charge en Dinars Algérien</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Siège de sortie 789/773/333</td>
                    <td>40 DZA</td>
                </tr>
                <tr>
                    <td>Siège de sortie sur d'autres types</td>
                    <td>25 DZA</td>
                </tr>
                <tr>
                    <td>Siège côté couloir</td>
                    <td>20 DZA</td>
                </tr>
                <tr>
                    <td>Siège de fenêtre</td>
                    <td>15 DZA</td>
                </tr>
                <tr>
                    <td>Autres sièges</td>
                    <td>10 DZA</td>
                </tr>
            </tbody>
        </table>

        <h2 >​​​​​​​Termes et conditions:</h2>
        <h5>Exigences et conditions relatives aux sièges des rangées de sorties de secours:</h5>
            
            <ul type="disc">
            	<li>Nous sommes heureux d'appliquer les demandes de sièges dans la rangée à côté  des sorties. Cependant, nous ne pouvons garantir aucun siège particulier.  ​</li>
            	<li>Seuls les passagers physiquement aptes à partir de 16 ans peuvent s'assoir dans la rangée de la sortie d'urgence.</li>
            	<li><strong>Les catégories de passagers suivantes ne sont pas autorisées à s'assoir  dans la rangée de Sortie:​</strong> 
            		<ol type="1">
            			<li>Les passagers à mobilité réduites tels que, sans s'y limiter:
            				<ol type="a">
            					<li>Les passagers en fauteuil roulant.</li>
            					<li>Les passagers ayant les jambes dans le plâtre.</li>
            					<li>Les passagers ayant besoin d'oxygène durant le vol.</li>
            					<li>Les passagers qui ont récemment eu une crise cardiaque.</li>
            					<li>Les passagers ayant subi une intervention chirurgicale récente.</li>
            					<li>Les passagers ayant leur propre concentrateurs d'oxygène portatifs ou un ventilateur à pression positive des voies aériennes.</li>
            					<li>Non applicable aux personnes souffrant d'une déficience visuelle ou une vision absente.</li>
            					<li>Les passagers ayant des problèmes de santé mentale.</li>
            					<li>Non applicable aux passagers malentendants.</li>
            					<li>Non applicable aux passagers ayant des membres artificiels.</li>
            				</ol>

            			</li>
            			<li>Les passagers incapables de comprendre et de suivre les instructions données par l'équipage.</li>
            			<li>Les passagers incapables d'atteindre, ouvrir, soulever et jeter vers l'extérieur la porte de sortie en cas d'urgence.</li>
            			<li>Les passagers qui, à cause de leur stature physique, de leur âge ou d'une maladie, ayant des difficultés à se déplacer rapidement.</li>
            			<li>Les passagers voyageant avec une personne qui aurait besoin de leur assistance en cas d'urgence.</li>
            			<li>Les passagères voyageant pendant la grossesse.</li>
            			<li>Non applicable aux passagers voyageant avec un enfant ou un bébé.</li>
            			<li>Non applicable aux mineurs non accompagnés.</li>
            			<li>Non applicable aux passagers détenant des animaux vivants.</li>
            			<li>Non applicable aux passagers détenteurs d'aides sur la mobilité ou d'équipements médicaux.</li>
            			<li>Non applicable aux clients qui ont acheté un siège supplémentaire   pour transporter des bagages ou des instruments de valeur à l'intérieur   de la cabine des passagers tels que les instruments de musique (les conditions générales s'appliquent aux sièges achetés).</li>
            		</ol>
            		<li>N'utilisez aucune partie de la porte de l'aéronef (ou de ses abords) pour reposer vos pieds, ni aucun autre objet personnel.</li>
            	</li>
            </ul>
        


            <p><small>Golden Eagle a la discrétion exclusive, lors de l’enregistrement ou de l’embarquement, de déterminer si un passager remplit les conditions pour s’asseoir dans un siège dans la rangée de sortie. Si le passager ne satisfait pas aux exigences, un siège différent lui sera attribué.</small></p>

            
           
          </blockquote>
          </div>
        </div>
      </div>


  

 


  <div class="card">
  	<a href="#collapse5" data-parent="#accordion" data-toggle="collapse">
        <div class="card-header ">
            
              <i class="fas fa-credit-card" style="font-size: 25px;">
              <h4 class="d-inline ml-2" >Paiement</h4>
              </i>
            
        </div>
        </a>

        <div id="collapse5" class="collapse">
          <div class="card-body">
            <blockquote class="blockquote ml-5">
            <h2>Comment effectuer votre paiement ?</h2>

            
              
              <ul type="disc">
                <li>Saisissez votre numéro de carte </li>
                <li>Mentionnez la date d'expiration de votre carte </li>
                <li>Saisissez le crypthogramme de votre carte </li>

                
              </ul>
              <p>Après validation des informations mentionnées ci-dessus, le client est redirigé sur la page de:</p>
              <ul type="disc">
                <li>billet après votre réservation</li>
                <li>carte d'embarquement après votre enregistrement</li>
              </ul>
          </blockquote>
          </div>
        </div>
      </div>
    



</div>

</div>

  <div style="margin-top:50px;"></div>




      	
     
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