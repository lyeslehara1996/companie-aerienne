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
		<link rel="stylesheet" href="css/card.css">
		
		
		<!-- Lightpick CSS -->
		<link rel="stylesheet" href="css/lightpick.css">
		<link rel="stylesheet" href="css/btn_count.css">
		<!--google font-->
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<title>Liste des offres</title>
		<style>
		


		</style>
	</head>
	<body>
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
		<div class="boxx">
			<div class="container">
				 <h1 class="titre mb-5 mt-3">Profitez de nos offres</h1>
				<div class="row">
					
					
					
					<div  class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">

					<div class="hover hover-4 text-white rounded"><img class="card_img " src="img/dest/par.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-4-content">
                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"  ><span class="" class=""style="background: rgba(0,0,0,0.20);" >Paris  <br>17000 DZA</span><form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="paris">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger Paris</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:17000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>
					<div  class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">

					<div class="hover hover-4 text-white rounded"><img class="card_img " src="img/dest/hamburg.jpg" alt="">
		          <div class="hover-overlay"></div>
		          <div class="hover-4-content">
		            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="" style="background: rgba(0,0,0,0.20)">hamburg<br>Prix 33000DZA </span><form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="hamburg">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger Hamburg</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:33000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>
					<div  class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">

					<div class="hover hover-4 text-white rounded"><img class="card_img " src="img/dest/istanbul.jpg" alt="">
		          <div class="hover-overlay"></div>
		          <div class="hover-4-content">
		            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="" style="background: rgba(0,0,0,0.20)">Istanbul <br>Prix26000 DZA</span><form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="istambul">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger Istanbul</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:26000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>
					<div  class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">

					<div class="hover hover-4 text-white rounded"><img class="card_img " src="img/dest/las.jpg" alt="">
		          <div class="hover-overlay"></div>
		          <div class="hover-4-content">
		            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class=""style="background: rgba(0,0,0,0.20)">las-vegas<br>Prix 180000DZA </span><form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="las-vegas">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger las-vegas</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:180000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>
			
					<div  class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">

					<div class="hover hover-4 text-white rounded"><img class="card_img" src="img/dest/beirut.jpg" alt="">
		          <div class="hover-overlay"></div>
		          <div class="hover-4-content">
		            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class=""style="background: rgba(0,0,0,0.20)">beirut <br>Prix 23000DZA</span><form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="beirut">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger Beirut</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:23000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>

					<div  class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">

					<div class="hover hover-4 text-white rounded"><img class="card_img " src="img/dest/strasbourg.jpg" alt="">
		          <div class="hover-overlay"></div>
		          <div class="hover-4-content">
		            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class=""style="background: rgba(0,0,0,0.20)">strasburg<br>Prix 43000DZA </span><form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="strasbourg">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger strasburg</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:43000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>
				
         
				
			</div>


		</div>





<?php include "footers.php";?>


		<!-- jQuery library -->
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