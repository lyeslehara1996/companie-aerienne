<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet"  href="css/compte.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/tabed.css">
    <link rel="stylesheet" href="css/d-flexs.css">
   
    
    <!-- Lightpick CSS -->
    <link rel="stylesheet" href="css/lightpick.css">
    <link rel="stylesheet" href="css/btn_count.css">
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  
    <title>Index_cpi</title>
    <style>
    .row{
    margin-left: 0;
    margin-right: 0;
    }
    </style>
    
    

    
  </head>
<body>
    


<footer class="page-footer footer d-sm-block ">
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
        
        
        <!-- Grid row -->
        
        <div class="row col-12">
          
          <!-- Grid column -->
          
          <div class="col-12 col-sm-6 col-lg-3 col-xl-3 " style="margin-top:5%">
            
            
            
            <!-- Links -->
            <h5 class="text-uppercase "><strong>Voyage</strong></h5>
            
            <ul class="list-unstyled text-light">
              <li>
                <a href="enregistrement.php">ENREGISTREMENT</a>
              </li>
              <li>
                <a href="list_destination.php">DESTINATIONS</a>
              </li>
              
              <li>
                <a href="list_offr.php">OFFRES</a>
              </li>
              <li>
                <a href="BagagesF.php">BAGAGES</a>
              </li>
              <li>
                <a href="DocumentsVoyage.php">DOCUMENTS VOYAGE</a>
              </li>
              
            </ul>
            
          </div>
          
          <!-- Grid column -->
          
          <div class="col-12 col-sm-6 col-lg-3 col-xl-3  " style="margin-top:5%">
            
            
            
            <!-- Links -->
            <h5 class="text-uppercase"><strong>Nous Contacter</strong></h5>
            
            <ul class="list-unstyled">
              <li>
                <a href="Foire_aux_questions.php">FAQS</a>
                
                <li>
                  <a href="contacter.php"><strong></strong>NOUS CONTACTER/<br> RECLAMATION</a>
                  
                  </li>
                  
                </ul>
                
              </div>
              <!-- Grid column -->
              
              <!-- Grid column -->
              <div class="col-12 col-sm-6 col-lg-3 col-xl-3  " style="margin-top:5%">
                
                <!-- Links -->
                <h5 class="text-uppercase"><strong>Notre compagnie</strong> </h5>
                
                <ul class="list-unstyled">
                  <li>
                    <a href="Aide.php">AIDE</a>
                  </li>                  
                  <li>
                    <a href="InformationsLegales.php">INFORMATIONS LEGALES</a>
                  </li>
                  <li>
                    <a href="PolitiqueDeConfidentialite.php">POLITIQUE DE CONFIDENTIALITE</a>
                  </li>
                </ul>
                
              </div>
           <div class="col-12 col-sm-6 col-lg-3 col-xl-3  " style="margin-top:5%">
                <div ><div><label for="mailf" style="font-size: 14px">Recevez nos meilleures offres</label></div>
                <div class="input-group">
                <input class="col-9 " type="email" name="mailf" placeholder="Votre e-mail"><button   type="button" class="col-2 btn btn-primary btn-sm">ok</button></div></div>
                <div class="mt-3"style="font-size: 14px">Nous suivre via :</div>
                <div><a href="https://web.facebook.com/Golden-eagle-officiel-108757734003607/"><img src="img/icon/fcb.png" alt=""></a>
                <a href="https://www.instagram.com/golden_eagle_offciel/"><img src="img/icon/inst.png" alt=""></a>
                <a href="https://twitter.com/GoldenE67081132?fbclid=IwAR1GupqMgC1sffSp5uXHMpvRkhaetHIXD_KwOfc3oSEXo8UulcORkLbt0c4"><img src="img/icon/twit.png" alt=""></a>
                <a href=""><img src="img/icon/you.png" alt=""></a>
              </div>
            </div>
            <!-- Grid column -->
            
          </div>
          <!-- Grid row -->
          
        </div>
      </div>
      <!-- Footer Links -->
      
      <!-- Copyright -->
      <hr class="bg-white" style="width: 95%">
      <div class="footer-copyright text-center py-3">© 2019-2020 Copyright M2-ISI.
        
      </div>
      <!-- Copyright -->
      
    </footer>
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