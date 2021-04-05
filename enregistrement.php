<?php session_start() ; ?>

<!DOCTYPE html>
<html>
<head>
       <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="css/compte.css">
	<title>Enregistrement</title>
</head>
<body>


	    <header>
      
      
      <!--le premier meneu header-->
       <?php include "navigation.php";?>
      <!-- le menu-->
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
    











<form  action="repas.php" method="post">
  <h3 class="titre my-5"> Enregistrement en ligne</h3>
  <div class="container my-5">
    <div class="row ">
      <div class="col-md-6 col-md-offset-6 text-center mx-auto">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="text-center">
              <h3><i class="fas fa-money-check-alt fa-4x"></i></h3>
                  <p>Saisissez vos données.</p>
                  <div class="panel-body">
                    
                      <div class="form-group">
                        <div class="ml-5 mb-2 float-left">
                          <form class=" mt-5">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" id="vol1" name="vol" checked="" value="Aller">
                              <label class="custom-control-label" for="vol1">Vol Aller</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" id="vol2" name="vol" value="Retour" >
                              <label class="custom-control-label" for="vol2">Vol Retour</label>
                            </div>
                          </form>
                        </div>

                        <span  id="erreurnomenr" style="margin-left: 2.6rem;color:red;" class=" redText col l4 offset-l2 s5 offset-s1 hide" ></span>

                        <div class="input-group   mb-2 ">
                          <div class="input-group-prepend">
                            <span  class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="fa fa-user text-muted"></i>
                            </span>
                          </div>
                          <input id="nomenr" type="text" name="nom_Passager" placeholder="* Nom" class="form-control bg-white border-left-0 border-md"required>
                        </div>

                        <div class="input-group  mb-4 ">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="far fa-clipboard text-muted"></i>
                            </span>
                          </div>
                          <input id="rbei" type="text" name="num_Reservation" placeholder="* Reference billet" class="form-control bg-white border-left-0 border-md" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="valider" class="btn btncard btn-block" value="Accéder" type="submit">
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	     </div>  
      </div>
</form>











<?php include "footers.php";?>


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


<script src="js/jquery.min.js"></script>
<script src="js/controlP.js"></script>