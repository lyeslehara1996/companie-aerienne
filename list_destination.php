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
        <link rel="stylesheet"  href="css/compte.css">
		 <link rel="stylesheet" href="css/card.css">
		<link rel="stylesheet" href="css/style.css">

		
		

		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<title>Liste des déstinations</title>
		
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
		<div class="box">
			<div class="container">
				 <h1 class="titre mb-5 mt-5">Découvrir nos meilleurs destinations</h1>
				<div class="row">
					
					
					
			
              <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="">
              <div class=" hover-1 text-white "><img src="img/dest/par.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">Paris </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
               <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/kuala-lumpur.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">kuala-lumpur </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
            <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/be.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">beirut</h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
                         <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/istanbul.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">Istanbul </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
                         <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/beirut.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">Beirut</h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
					
                        <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/stockholm.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">stockholm </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
			            <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/bangkok.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">Bangkok</h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
                          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/new-york.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">New-york </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
                         <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/marrakech.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">Marrakech </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
                          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/barcelona.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">barcelona </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
                         <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/bilbao.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">bilbao </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
                         <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/caracas.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">caracas </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>

          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/copenhagen.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">copenhagen </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>

           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/djerba.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">djerba </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/djibouti.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">djibouti </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/johannesburg.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">johannesburg </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/khartoum.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">khartoum </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/las.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">Las-vegas </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/london.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">london </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/los-angeles.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">las-angeles </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/madrid.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">madrid </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/maldives.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">maldives </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/mexico.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">mexico </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/mumbai.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">mumbai </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/yakarta.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">jakarta </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/toronto.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">toronto </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/strasbourg.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">strasbourg </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/milan.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">milan </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/tunis.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">tunis </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/budapest.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">budapest </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/new_delhi.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">new-delhi </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3">
            <a class="" >
              <div class=" hover-1 text-white "><img src="img/dest/rome.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-1-content px-5 py-4">
                  <h4 class="hover-1-title text-uppercase  mb-0" style="background: rgba(0,0,0,0.30); color: white">rome </h4> <span class="font-weight-light sp "> <br> </span>
                  
                </div>
              </div>
            </a>
          </div>
					
				</div>
			
		
         
				
			</div>


		</div>
		<!-- Footer -->


<?php include "footers.php";?>




		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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