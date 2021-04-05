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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/compte.css">

    <link rel="stylesheet" href="css/style.css">
  <title>Nous contacter</title>
    <script type="text/javascript">
        function post() {
            var name = document.getElementById("name").value ;
            var email = document.getElementById("mail").value ;
            var message = document.getElementById("message").value ;
            console.log(name+' '+' '+email+' '+message);
            if(name && email && message) {
                $.ajax ({
                    type: 'post' ,
                    url: 'post_data.php' ,

                    data :
                    {
                        user_name:name,
                        user_email:email,
                        user_message:message
                    },

                    success: function(response){
                        document.getElementById("status").innerHTML ="Votre message a bien été envoyé" ;;
                    }


                });
            }

            return false ; 
        }
        
    </script>

</head>
<body>
    
    <header>
      
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
     <h2 class="titre mt-5">Contactez Nous</h2>

<div class="row col-12"> 

<div class="col-12 col-md-6"> 
<h3 class="titre mt-5">Formulaire</h3>
 <div class="container-fluid rounded my-5 " style=" ;margin-bottom:30px;">
  <form action="" method="post" onsubmit="return post();">

                       <div class="input-group col-lg-12 mb-4">
                           
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                              </span>
                            </div>
                            <input id="name" type="text"  placeholder="Nom" class="form-control bg-white border-left-0 border-md">
                          </div>
                          <!-- Email Address -->
                          <div class="input-group col-lg-12 mb-4">
                            
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                              </span>
                            </div>
                            <input id="mail" type="email" name="" placeholder="Addresse Email" class="form-control bg-white border-left-0 border-md">
                          </div>
                         

                            <div class="input-group col-12">
                         
                            <textarea id="message"  placeholder="Message" class="form-control bg-white border-md"></textarea>
                          </div>
                          <div class="mx-auto text-center"><input type="submit" id="submit" value="Envoyer"  class="btn mt-3 mx-auto " style="background-color:#365390 ;color:white"></div>
                          
                          <p id="status"></p>

    
  </form>
</div>
</div>







<div class="col-12 col-md-6"> 
<h3 class="titre mt-5">Contacter</h3>
<div class="container my-5" style="font-size: 18px;
    color: #616161;
    margin-top: 20px;">

<ul class="list-unstyled text-center">
  <li><b>ALGÉRIE :</b> + 213 21 98 63 63 </li>
  <li><b>FRANCE :</b>  +331 76 54 40 00</li>
  <li><b>Suisse :</b>  +41 21 530 94 83</li>
</ul>
<h3 class="titre mt-5">Direction</h3>
<ul class="list-unstyled text-center">
  <li><b>Siege :</b>1, PLACE BASTOS TIZI OUZOU- ALGÉRIE </li>
  <li><b>Fax :</b> +213(0)23 50 41 25 - 021 50 34 21</li>

</ul>
<h3 class="titre mt-5">Réseaux Sociaux</h3>
<div class="text-center">
  <a href=""><img src="img/icon/fcb.png" alt=""></a>
  <a href=""><img src="img/icon/inst.png" alt=""></a> 
  <a href=""><img src="img/icon/twit.png" alt=""> </a>
  <a href=""><img src="img/icon/you.png" alt=""></a> 

</div>


</div></div>


</div>
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