<?php include "bd.php";?>
<?php include "function.php"; ?>
<?php 
 if(isset($_POST['recover-submit']))
{
  $email= $_POST['email'];
  $email = mysqli_real_escape_string($connection, $email);

  if(filter_var($email,FILTER_VALIDATE_EMAIL)){

  $data=$connection->query("SELECT identifiant,prenom FROM abonnees WHERE email = '{$email}' " );
  if(($data->num_rows > 0))
 {       
        $row=mysqli_fetch_assoc($data);
        $prenom=$row['prenom'];
         
           
          $token= generateNewString();
          $connection->query("UPDATE abonnees SET token='{$token}' WHERE email = '{$email}' ");
         
          include  "PHPMailer/PHPMailer.php";
          include "PHPMailer/Exception.php";

          $mail = new \PHPMailer\PHPMailer\PHPMailer();
          $mail->addAddress($email);
          $mail->setFrom("lyeslehara77@gmail.com","Golden Eagle");
          $mail->Subject = "Réinitialiser le mot de passe";
          $mail->isHTML(true);
          $mail->CharSet = "UTF-8";
          $mail->Body = "<p>

             Bonjour ".$prenom." <br><br>
             Afin de Réinitialiser Votre Mot de Passe, Veuillez Cliquer sur ce lien ci-dessous:<br>
             <a href='
             http://localhost/pprojetfina/resetPassword.php?email=$email&token=$token'>http://localhost/pprojetfina/resetPassword.php?email=$email&token=$token</a><br>
             
              <p>Ceci est un email automatique, merci de ne pas y répondre </P>";

                 if($mail->send())
                   {
                     $emailSend= "true";  
                   }
                 else
                 {
                  $error=  "S'il Vous plait Ressayer à Nouveau !!";
                 }


      }
      else
      {
        $error ="Vous avez peut-etre entré une adresse e-mail inconnue !!";
      } 
 
}
 else
  {
  $error ="Adress email invalide !!";
  }
}
else
  {
    $error="Veuillez Saisir Votre Email !!";
  }
?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link rel="stylesheet"  href="css/compte.css">
    <link rel="stylesheet" href="css/style.css">
  <title>Mot_de _passe_oblié</title>
</head>
<body>
    
    <header>
      
      
      <!--le premier meneu header-->
      <nav class=" navbar navbar-expand navbar1 overflow-hidden "style="height:70px;">
        <div class="container">
          <a class="navbar-brand  " href="#"><img class="logo"src="img/LogoFinal.svg"></a>
          <ul class="navbar-nav d-flex">
            <li class="nav-item " >
              <!--  MODAL Nous contacter-->
              <a class="nav-link d-none d-md-inline d-lg-inline d-xl-inline  mr-5" style="color:#365390"  href="" >Nous Contacter</a>
              
              
            </li>
            <li class="nav-item" >
              <label  class=" mr-5 d-none d-md-inline d-lg-inline d-xl-inline  " style="margin-top: 7px">|</label>
            </li>
            <li class="nav-item" >
              <!-- connecter MODAL  -->
              <a class="nav-link   d-inline hvc " data-toggle="modal" href="#loginModal" ><i class="mr-1 d-none d-sm-inline fas fa-user-circle"></i><strong>Connexion</strong></a>
              
              <!-- connecter MODAL -->
              <div class="modal" id="loginModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="color: #365390" class="modal-title ">Se connecter</h5>
                      <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form class="col-12">
                        <div class="input-group col-lg-12 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="fa fa-user text-muted"></i>
                            </span>
                          </div>
                          <input id="username" type="text" name="username" placeholder="Nom utilisateur" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- mot de passe -->
                        <div class="input-group col-lg-12 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="fa fa-lock text-muted"></i>
                            </span>
                          </div>
                          <input id="password" type="password" name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <div class="text-center w-100 "><a class="text-muted" href="">Mode passe oublié?</a></div>
                        
                      </form>
                    </div>
                    
                    <div class="row form-group col-lg-10 col-xl-10 mx-auto ">
                      <a href="#" class="btn btn-primary btn-block py-2 btn-voirplus mb-3" >
                        <span class="font-weight-bold "> Connexion</span>
                      </a>
                    </div>
                    
                    
                  </div>
                </div>
              </div>              
            </li>
            <li class="nav-item ">
              <!-- MODAL inscription -->
              <a class=" nav-link  d-inline hvc " data-toggle="modal" href="#Inscription" ;><i class="mr-1 d-none d-sm-inline far fa-user-circle"></i><strong>Inscription</strong></a>
              <!-- MODAL -->
              <div class="modal" id="Inscription">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header ">
                      <h5 style="color: #365390" class="modal-title">Inscription a Golden Eagle!</h5>
                      <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="#">
                        <div class="row ">
                          <!-- First Name -->
                          <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                              </span>
                            </div>
                            <input id="firstName" type="text" name="firstname" placeholder="Nom" class="form-control bg-white border-left-0 border-md">
                          </div>
                          <!-- Last Name -->
                          <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                              </span>
                            </div>
                            <input id="lastName" type="text" name="lastname" placeholder="Prenom" class="form-control bg-white border-left-0 border-md">
                          </div>
                          <!-- Username -->
                          <div class="input-group col-lg-12 mb-4">
                            
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                              </span>
                            </div>
                            <input id="Username" type="text" name="Username" placeholder="Nom d'utilisateur" class="form-control bg-white border-left-0 border-md">
                          </div>
                          <!-- Email Address -->
                          <div class="input-group col-lg-12 mb-4">
                            
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                              </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Addresse Email" class="form-control bg-white border-left-0 border-md">
                          </div>
                          <!-- Password -->
                          <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                              </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md">
                          </div>
                          <!-- Password Confirmation -->
                          <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                              </span>
                            </div>
                            <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirmer mot de passe" class="form-control bg-white border-left-0 border-md">
                          </div>
                          <!--check confirmation-->
                          
                          <div class="input-group col-lg-12 mb-4 ">
                            
                            <label class="container">
                              <input type="checkbox">
                              <span class="checkmark"></span>
                              J'accepte les conditions et les termes de confidentialités
                            </label>
                            
                          </div>
                          <div class="input-group col-lg-12 mb-4 ">
                            <label class="container">
                              <input type="checkbox" >
                              <span class="checkmark"></span>
                              Je souhaite recevoir les meilleures promotions
                            </label>
                            
                          </div>
                          
                          <!-- Submit Button -->
                          <div class="form-group  col-lg-12 mx-auto mb-5">
                            <a href="#" class="btn btn-primary btn-block py-2 btn-voirplus">
                              <span class="font-weight-bold">créer votre compte</span>
                            </a>
                          </div>
                          
                        </div>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- le menu-->
      <nav class="navbar navbar-expand-md  navbar2 " >
        <div class="container ">
          
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span><img style="height:30px" src="img/Menu1.png"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav" style="justify-content: center">
            <ul class="navbar-nav " >
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="index.html">Accueil</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="list_destination.html">Destinations</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="list_offr.html">Promotions</a>
              </li>
              
              <li class="nav-item dropdown  ">
                <a href="#" class="nav-link hv dropdown-toggle " data-toggle="dropdown">Informations Voyages</a>
                <div class="dropdown-menu  " style="background: #365390;border: none" >
                  <ul class="list-unstyled " >
                    <li><a href="#" class="dropdown-item hvlist">Programme des vols</a></li>
                    <li><a href="#" class="dropdown-item hvlist">Documents de voyage</a></li>
                    <li><a href="#" class="dropdown-item hvlist">Bagage</a></li>
                    <li><a href="#" class="dropdown-item hvlist">Paiment </a></li>
                    <li><a href="#" class="dropdown-item hvlist">Aide</a></li>
                    <li><a href="#" class="dropdown-item hvlist">Page de Contact</a></li>
                    
                  </ul>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      
    </header>
    









<h3 class="titre my-5"> Mot de passe oublié</h3>
<div class="container my-5">
  <div class="row ">
    <div class="col-md-6 col-md-offset-6 text-center mx-auto">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                
                <?PHP if(!isset($emailSend)) :?>
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h3 class="text-center titre">Mot de passe oublié?</h3>
                  <p>Vous pouvez le récuperer d'ici.</p>
                  <div class="panel-body">
    
                    <form action="" id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group col-lg-12 mb-4">
                            
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                              </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Addresse Email" class="form-control bg-white border-left-0 border-md" required>
                          </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btncard btn-block" value="Envoyer" type="submit">
                      </div>
                      
                     
                    </form>
                     <?PHP
                                       if(isset($error))
                                      {echo '<font color="red">' .$error. "</FONT>";}
                                    ?>
                
    
                  </div>
                
                  <?PHP else: ?>
                   <h5 font color="green">Merci de Consulter Vos Email</h5>

                  <?php endif; ?>

                </div>

              </div>
            </div>
          </div>
  </div>
</div>

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
                <a href="#!">ENREGESTREMENT</a>
              </li>
              <li>
                <a href="#!">DESTINATIONS</a>
              </li>
              
              <li>
                <a href="#!">PLANNING VOL</a>
              </li>
              <li>
                <a href="#!">BAGAGES</a>
              </li>
              <li>
                <a href="#!">DOCUMENTS VOYAGE</a>
              </li>
              
            </ul>
            
          </div>
          
          <!-- Grid column -->
          
          <div class="col-12 col-sm-6 col-lg-3 col-xl-3  " style="margin-top:5%">
            
            
            
            <!-- Links -->
            <h5 class="text-uppercase"><strong>Nous Contacter</strong></h5>
            
            <ul class="list-unstyled">
              <li>
                <a href="#!">FAQS</a>
                
                <li>
                  <a href="#contact" data-toggle="modal"><strong></strong>NOUS CONTACTER</a>
                  <!--  MODAL -->
                  <div class="modal" id="contact">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 style="color: #365390" class="modal-title">Contactez Nous</h5>
                          <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form id="form">
                            <div class="row">
                              <!-- First Name -->
                              <div class="input-group col-lg-6 mb-4">
                                
                                <input id="firstName" type="text" name="firstname" placeholder="Nom" class="form-control bg-white  border-md" data-constraints="@Required @JustLetters">
                              </div>
                              <!-- Last Name -->
                              <div class="input-group col-lg-6 mb-4">
                                
                                <input id="emailcontact" type="email" name="emailcontact" placeholder="Email" class="form-control bg-white  border-md" data-constraints="@Required @Email">
                              </div>
                            </div>
                            <textarea placeholder="Message:" class="form-control bg-white  border-md" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                            
                            
                            <div>
                              
                            </form>
                          </div>
                          <div class="modal-footer">
                            
                            <div class="btns">
                              
                              <a href="#" data-type="submit" class="btn btn-primary">Envoyer</a>
                              
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a href="#!">RECLAMMATION</a>
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
                    <a href="#!">AIDE</a>
                  </li>
                  <li>
                    <a href="#!">PLAN DU SITE</a>
                  </li>
                  <li>
                    <a href="#!">INFORMATIONS LEGALES</a>
                  </li>
                  <li>
                    <a href="#!">POLITIQUE ET CONFIDENTIALITE</a>
                  </li>
                </ul>
                
              </div>
           <div class="col-12 col-sm-6 col-lg-3 col-xl-3  " style="margin-top:5%">
                <div ><div><label for="mailf" style="font-size: 14px">Recevez nos meilleurs offres</label></div>
                <div class="input-group">
                <input class="col-9 " type="email" name="mailf" placeholder="Votre e-mail"><button   type="button" class="col-2 btn btn-primary btn-sm">ok</button></div></div>
                <div class="mt-3"style="font-size: 14px">Nous suivre via :</div>
                <div><a href=""><img src="img/icon/fcb.png" alt=""></a>
                <a href=""><img src="img/icon/inst.png" alt=""></a>
                <a href=""><img src="img/icon/twit.png" alt=""></a>
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