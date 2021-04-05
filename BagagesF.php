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





	<title>Bagages</title>
</head>
<body>
	<style>
	

.card{
  margin-bottom: 30px;

}
.card-header{
  background-color:#0f1b54;
  

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
          <i class="fas fa-luggage-cart" style="font-size: 38px;color: #fff;">
          <h1 class="d-inline ml-2" style="color: #fff;" >Bagages</h1></i>

        </div>
        
         <div class="card-body">
          <blockquote class="blockquote ml-5">
            <h2 >Franchise bagages :</h2>
            <p>La franchise de bagages correspond aux limites imposées par les compagnies aériennes sur la quantité de bagages que chaque passager est autorisé à transporter. Ces limites sont différentes selon les compagnies aériennes et dépendent du tarif de votre billet.
            </p>

            <p><strong>Notez que les tarifs les plus restrictifs peuvent n'inclure aucune franchise de bagages gratuite ou imposer une limite de poids spécifique.</strong><p>

            <p>Lorsque vous effectuez votre réservation en ligne, vous pouvez vérifier la quantité de bagages autorisée en fonction de votre billet. </p>

            <p>Le poids maximum par pièce définit par notre compagnie est de <strong>20 kg</strong>.<br>
            En général, les dimensions autorisées des bagages en cabine sont <strong>55 cm x 40 cm x 23 cm</strong> et le poids <strong>jusqu'à 10 kg</strong> maximum.De plus, sur certains vols, vous pouvez également emporter un petit objet personnel.
            </p>
            <h2>Produits non autorisés à  l’aéroport :</h2>
            <p>Pour des raisons de sécurité, des restrictions sont appliquées aux types d'articles que vous pouvez embarquer, tant en bagages enregistrés qu'en bagages cabine.</p>
            <p>En général, les articles répertoriés ci-dessous <strong>ne sont pas autorisés</strong> en bagages cabine :</p>
            <ul type="disc">
              <li class="mb-1">Engins et équipements explosifs</li> 
              <li class="mb-1">Substances toxiques</li> 
              <li class="mb-1">Objets pointus ou tranchants</li> 
              <li class="mb-1">Appareils à effets paralysants</li> 
              <li class="mb-1">Revolvers et armes à feu</li> 
              <li class="mb-1">Objets et équipements inflammables</li> 
            </ul>
          

          <h2>Que faire si ma valise est perdue ?</h2>
          <p>Si vous n'avez pas encore quitté votre aéroport d’arrivée, vous devez signaler l’incident à notre compagnie aérienne (ou à notre représentant), afin de remplir un formulaire de réclamation. Les bureaux de service bagages de notre compagnie aérienne se trouvent à proximité des tapis à bagages.</p>
          notre compagnie aérienne dès que possible, dans un délai de 7 jours. </p>

          <p>En cas de <strong>retard de votre bagage</strong>, notre compagnie aérienne dispose de 21 jours pour localiser le bagage manquant et vous le remettre. Les dépenses pour les produits de première nécessité, tels que des produits d'hygiène ou vêtements, pourront être remboursés. Tous les justificatifs d'achat devront être présentés afin de soumettre une réclamation auprès de notre compagnie aérienne. </p>

          <p>Passés les 21 jours, votre bagage sera considéré comme perdu. Ayez un descriptif complet du contenu de votre bagage ainsi que la valeur (si possible sur présentation de justificatifs), afin d’établir une demande de dédommagement.</p>


          <h2>Conseils De Golden Eagle :</h2>
          <h5 style="color: #365390;text-decoration: underline;">Avant votre voyage:​</h5>
          <ul type="disc">
            <li>Inscrivez le nom et le numéro de téléphone de votre lieu de destination à l'intérieur et à l'extérieur de votre sac.</li>
            <li>Retirez les étiquettes et les autocollants laissés sur votre bagage lors de voyages précédents.</li>
            <li>Retirez les sangles ou les crochets qui dépassent et qui pourraient s'agripper à quelque chose et abîmer votre bagage.</li>
            <li>Veillez à ne pas trop remplir votre sac car il risque de s'abîmer.</li>
            <li>Respectez le poids autorisé.</li>
            <li>N'emballez pas les cadeaux car vos bagages sont susceptibles d'être fouillés.</li>
            <li>Ne rangez pas d'objets précieux dans vos bagages en soute.</li>
            <li>Emballez sous vide tout ce qui est susceptible de couler à l'intérieur d'un sac.</li>
            <li>Essayez de vous limiter à un seul bagage à main qui pourra être placé sous le siège devant vous.</li>
            <li>Assurez-vous de prendre vos médicaments, documents importants, objets de valeur et votre argent liquide dans votre bagage à main.</li>
            <li>Accrochez solidement quelque chose de souple à votre sac, afin de le distinguer des autres, de le repérer facilement et d'éviter que quelqu'un d'autre ne le prenne par erreur.</li>
            <li>Ne transportez pas de colis au contenu non identifié pour le compte d'une autre personne.</li>
            <li>Si un sac est trop rempli ou s'il n'est pas assez solide pour supporter le poids qu'il contient, il risque de se déchirer ou la lanière risque de lâcher pendant le voyage.</li>
            <li>Conservez passeports, visas et tout document important dont vous pourriez avoir besoin pendant le voyage dans votre sac à main.</li>
            <li>Laissez vos canifs, limes, ciseaux et tout objet tranchant chez vous ou placez-les dans vos bagages en soute.</li>

          </ul>

          <h5 style="color: #365390;text-decoration: underline;">A l'aéroport:</h5>
          <ul type="disc">
            <li>Vérifiez tous vos bagages au préalable afin que les contrôles de sécurité se passent le plus rapidement et le mieux possible.</li>
            <li>Réduisez au strict minimum le contenu de votre sac à main et retirez votre ordinateur portable de votre sac pour qu'il soit contrôlé séparément.</li>
            <li>Votre bagage à main sera contrôlé par le personnel de sécurité à l'aide d'un appareil de radiographie. Consultez les toutes dernières </li>
            <li>Retirez les pellicules dont la sensibilité est supérieure à 1000ASA/31 DIN et présentez-les séparément.</li>
            <li>Ne transportez pas de colis au contenu non identifié pour le compte d'une autre personne.</li>
            <li>Fermez vos sacs par un cadenas, sauf lorsque vous voyagez en provenance des Etats-Unis.</li>
            <li>Dans certains cas, vous devrez identifier ou récupérer des bagages pour des raisons de sécurité ou douanières, lors d'une escale entre deux vols.</li>

          </ul>

          <h5 style="color: #365390;text-decoration: underline;">A propos du contrôle des bagages:</h5>
          <ul type="disc">
            <li>A l'aéroport, l'agent chargé de l'enregistrement apposera une étiquette sur chaque bagage indiquant votre nom, le(s) numéro(s) de vol, et toutes les villes correspondant à votre itinéraire de voyage.</li>
            <li>A chaque étiquette correspond un talon que l'on vous remettra pour chaque sac. Ces talons sont la preuve que votre bagage a été enregistré.</li>
            <li>Il est important que vous conserviez ces talons jusqu'à la fin de votre voyage et jusqu'à ce que vous récupériez tous vos bagages. </li>
            <li>Assurez-vous que le nombre de talons remis correspond au nombre de sacs enregistrés.</li>
            <li>Ne perdez pas ces talons.</li>

          </ul>

          <h5 style="color: #365390;text-decoration: underline;">Conseils lorsque vous achetez de nouveaux bagages :</h5>
          <ul type="disc">
            <li>Achetez des bagages qui pourront répondre aux besoins les plus exigeants.</li>
            <li>Les personnes qui se déplacent fréquemment pour des raisons professionnelles n'ont pas les mêmes besoins que les personnes qui voyagent occasionnellement pour leur plaisir.</li>
            <li>Votre vendeur de bagages peut vous aider à faire le bon choix s'il connaît vos besoins et vos attentes.</li>
            <li>Lisez attentivement la garantie de vos bagages. Renseignez-vous sur les types de dommages couverts par le fabricant.</li>
            <li>Pour les bagages en soute, faites appel au bon sens.</li>
            <li>Choisissez des bagages suffisamment solides pour supporter les systèmes de manutention dans les aéroports.</li>
            <li>La plupart des porte-documents, sacs fourre-tout, protège-vêtements, et articles reçus dans le cadre de promotions ne sont pas des bagages adaptés aux soutes d'avions.​​</li>

          </ul>

          <h5 style="color: #365390;text-decoration: underline;">Réglementations GOLDEN EAGLE sur les produits dangereux</h5>
          <p>Conformément aux « Conditions générales de Transport » et aux « REGLEMENTATIONS GOLDEN EAGLE SUR LES PRODUITS DANGEREUX », les objets suivants sont formellement interdits dans les bagages (enregistrés ou non) des passagers et du personnel de bord, étant donné que ces objets sont dangereux pour la sécurité des personnes en vol :</p>
          <ul type="disc">
            <li>Les gaz comprimés (inflammables, non inflammables et toxiques) tels que les aérosols, le butane.</li>
            <li>Les explosifs, les munitions, les feux d'artifice et fusées éclairantes (sauf les armes à feu utilisées dans le cadre d'un sport, à condition que leur poids n'excède pas 5 kg de munitions par passager et 2 fusils maximum par passager).</li>
            <li>Agents biologiques (réactifs).</li>
            <li>Liquides et solides inflammables (tels que les briquets, allumettes, peintures et diluants).</li>
            <li>Corrosifs (tels que les acides, alcalis, piles liquides, etc.)</li>
            <li>Matériaux irritants</li>
            <li>Couteaux, poignards, épées, etc.</li>
            <li>Matières comburantes (chlorure décolorant, etc.)</li>
            <li>Matériau radioactif</li>
            <li>Divers matières dangereuses (comme le mercure, les substances nocives, les matériaux aimantés ou autres matériaux offensifs)
            </li>
            <li>Des porte-documents équipés d'alarmes ou de batteries au lithium</li>
            <li>Selon l'Administration Fédérale de l'Aviation (FAA), - Avertissement de Sécurité pour les Opérateurs (SAFO), il est recommandé que les cigarettes électroniques ainsi que les dispositifs connexes doivent être transportés dans les bagages à main et non pas dans les bagages enregistrés.</li>
            <li>​Les appareillages d'aide à la mobilité de loisir tels que les cartes de vol auto-équilibrées sont interdites à bord des vols Egyptair comme bagages enregistrés ou bagages de cabine.</li>


          </ul>

          <h2>Responsabilités de Golden Eagle relatives aux bagages</h2>
          <h5 style="color: #365390;text-decoration: underline;">Retard des bagages</h5>
          <p>En cas de retard des bagages, Golden Eagle est responsable à moins que toutes les mesures raisonnables n'aient été prises pour éviter le retard ou qu'il ait été impossible de prendre ces mesures. La responsabilité en cas de retard des bagages est limitée à 1,131 DTS.</p>

          <h5 style="color: #365390;text-decoration: underline;">Destruction, perte ou bagages endommagés</h5>
          <p>Golden Eagle est responsable de toute destruction, de toute perte ou de tout dommage aux bagages à hauteur de 1,131 DTS. Dans le cas de bagages enregistrés, la compagnie est responsable même si elle n'est pas fautive. La compagnie aérienne ne pourrait être tenue responsable si les bagages sont défectueux. Dans le cas de bagages non enregistrés, la compagnie aérienne est responsable uniquement si elle est fautive.</p>

          <h5 style="color: #365390;text-decoration: underline;">Réclamations concernant les bagages</h5>
          <p>Pour les bagages endommagés, retardés, perdus ou détruits, le passager doit remplir, aussitôt que possible, une fiche de réclamation adressée à Golden Eagle. Cette réclamation doit être faite dans un délai de 7 jours en cas de dommages aux bagages enregistrés, et dans un délai de 21 jours en cas de retard des bagages. Ces délais débutent à la date à laquelle les bagages ont été mis à la disposition du passager. Si une réclamation n'a pas été effectuée dans les délais indiqués ci-dessus, la compagnie ne sera pas responsable.<br>
          </p>



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