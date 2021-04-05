<?php include "bd.php";?>
<?php include "function.php";?>

<?php 

 require 'bd.php';
   

   if(isset($_POST['password1'])){


      $emai = $_POST['email1'];
      $password = $_POST['password1'];
     // $query=$connection->query("SELECT * FROM abonnees WHERE email = '{$emai}'");
      $query = "SELECT * FROM abonnees WHERE email = '{$emai}' ";
     $select_connexion =  mysqli_query($connection, $query);
      if(!$select_connexion)
      {
        die("QUERY FAILED".mysqli_error($connection));
      }

      if($row = mysqli_fetch_array($select_connexion)){

        $db_password = $row['mdp'];
      }

       if(mysqli_num_rows($select_connexion) > 0){
   
        if(password_verify($password, $db_password)){
  //if(crypt($password ,$salt) == $row['password']){
              $user_ident=$row['identifiant'];
              $user_nom=$row['nom'];
              $user_prenom=$row['prenom'];
              $user_role=$row['role'];
              $user_email=$row['email'];


              $_SESSION['identifiant']=$user_ident;
              $_SESSION['nom']=$user_nom;
              $_SESSION['prenom']=$user_prenom;
            $_SESSION['email']=$user_email;

              
              $_SESSION['role']=$user_role;
              
              if($_SESSION['role'] == 'admin'){
                 
              //header("location:admin.php?user=$user_ident"); 	
             // echo "<script > var t=setTimeout('document.location.replace(\'admin.php')', 0);  </script>";
             echo '<script type="text/javascript">';
echo 'window.location.href="admin.php?user='.$user_ident.'";';
echo '</script>';

              }else{
                header("location:index.php?user=$user_ident");
              }

       }else{$erreur1="Mot de passe incorrecte";}
       }else{
            $erreur1= "E-mail ou mot de passe invalide";
           }

    }else{$erreur1= "";}




    if(isset($_POST["inscrire"])){
 
    $firstname = mysqli_real_escape_string($connection, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($connection, $_POST["lastname"]);
    $email = mysqli_real_escape_string($connection,$_POST["email"]) ;
    $password = mysqli_real_escape_string($connection,$_POST["password"]) ;
    $passwordd = mysqli_real_escape_string($connection, $_POST["passwordConfirmation"]) ;

if((!empty($_POST["firstname"])) && (!empty($_POST["lastname"])) && 
  (!empty($_POST["email"])) &&(!empty($_POST["password"])) && (!empty($_POST["passwordConfirmation"])) ){

  $errors = [];

  if (!preg_match("#^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$#",$firstname)) {
      $nameErr = "Le nom doit contenir au moins 3 lettres"; 

        $errors[] = "erreur" ; 
    }
 if (!preg_match("#^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$#",$lastname)) {
      $nameErr = "Le prénom doit contenir au moins 3 lettres"; 

        $errors[] = "erreur" ; 
    }
 /*if (mb_strlen($username) < 3) {
      $usernameErr = "le nom d'utilisateur ne doit pas faire moins de 3 caractères"; 
                $error[] = "erreur" ; 
    }*/
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Adresse mail invalide "; 
                $errors[] = "erreur" ; 
    }

   /* $query = "SELECT pseudo FROM abonnees WHERE pseudo = '$username' ";
    $result = mysqli_query($connection, $query);
    if(!$result){
       die("QUERY FAILED".mysqli_error($connection));
    }
    if(mysqli_num_rows($result) > 0){

    $usernameErr = "Le nom d'utilisateur existe déjà"; 
    $errors[] = "erreur" ; 
    }*/

    if (mb_strlen($password) < 8) {
      $passwordErr = "le mot de passe doit faire au moins 8 caractères"; 
                $errors[] = "erreur" ; 

    }

    $query = "SELECT email FROM abonnees WHERE email = '$email' ";
    $result = mysqli_query($connection, $query);
    if(!$result){
       die("QUERY FAILED".mysqli_error($connection));
    }
    if(mysqli_num_rows($result) > 0){

    $mailErrr = "Cette adresse mail existe déjà"; 
    $errors[] = "erreur" ; 
    }

    if ($passwordd != $password) {
      $passwordErrr = "Le mot de passe de confirmation doit être identique à celui d'origine"; 
                $errors[] = "erreur" ; 

    }
 /* $query_crypt ="SELECT randSalt FROM abonnees";
    $select_randsalt_query = mysqli_query($connection, $query);
    if(!$select_randsalt_query){
       die("QUERY FAILED".mysqli_error($connection));
    }
    $row1 = mysqli_fetch_array($select_randsalt_query);
    $salt = $row1['randSalt'];*/

   // $password = crypt($password , $salt);
    $password = password_hash($password, PASSWORD_DEFAULT,array('cost' => 12));


     if (count($errors) == 0) {

      $query_inscription ="INSERT INTO abonnees (nom, prenom, email, mdp) ";
      $query_inscription .= "VALUES('$firstname','$lastname','$email','$password') ";

      $register = mysqli_query($connection, $query_inscription);

       if(!$register){
        die("QUERY FAILED". mysqli_error($connection) . ' '.mysqli_errno($connection));
       }else{
        $query_id ="SELECT identifiant FROM abonnees where email='$email' ";
        $ide = mysqli_query($connection, $query_id);
        while($row = mysqli_fetch_array($ide)){
          $_SESSION['identifiant']=$row['identifiant'];
        }   
        $_SESSION['nom']=$firstname;
        $_SESSION['prenom']=$lastname;
        $_SESSION['role']="abonne";
        $user_ident= $_SESSION['identifiant'];
              
              if($_SESSION['role'] == 'admin'){
                 
              header("location:Administrateur.php?user=$user_ident");
              }else{
                header("location:index.php?user=$user_ident");
              }
       }
       /*if($register){
        $_SESSION['created']="Vous avez cree votre compte";
        echo json_encode(['status'=>'success']);
       }
       /*
       $qury_con ="SELECT identifiant FROM abonnees where prenom='$lastname' ";

       if( mysqli_query($connection, $register)){
         $qyconnexion =  mysqli_query($connection, $qury_con);
         $row1 = mysqli_fetch_array($qyconnexion);
         $id = $row1['identifiant'];
         

         $_SESSION['id']=$id;

         header("location:client.php?uder=$id");
         die();

      }*/


     }
  
 }}/*else{
     $message= "Tous les champs doivent etre requis";
   }

     }else {$message= "";}*/


?>
<?php if(!isset($_SESSION['identifiant'])){ ?> 
<nav class=" navbar navbar-expand navbar1 overflow-hidden "style="height:70px;">
        <div class="container">
          <a class="navbar-brand  " href="index.php"><img class="logo"src="img/LogoFinal.svg"></a>
          <ul class="navbar-nav d-flex">
            <li class="nav-item " >
              <!--  MODAL Nous contacter-->
              <a class="nav-link d-none d-md-inline d-lg-inline d-xl-inline  mr-5" style="color:#365390"  
              href="contacter.php" >Nous Contacter</a>
              
              
              
              
              
            </li>
            <li class="nav-item" >
              <label  class=" mr-5 d-none d-md-inline d-lg-inline d-xl-inline  " style="margin-top: 7px">|</label>
            </li>


             <!-- connecter MODAL  -->

      <li class="nav-item" >
              <!-- connecter MODAL  -->
              <a class="nav-link   d-inline hvc " data-toggle="modal" href="#loginModal" ><i class="mr-1 d-none d-sm-inline fas fa-user-circle"></i><strong>Connexion</strong></a>
              <!-- connecter MODAL -->
              <form  action="" method="POST" >
              <div class="modal" id="loginModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="color: #365390" class="modal-title ">Se connecter</h5>
                      <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                     
                    <div class="modal-body">
                      <form class="col-12">
                      <h6 class="text-center"><?php echo '<font color="red">' .$erreur1. '</FONT>';?></h6>
                          <div id="display"></div>
                        <div class="input-group col-lg-12 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="fa fa-user text-muted"></i>
                            </span>
                          </div>
                           
                          <input id="email1" type="email" name="email1" placeholder="Addresse Email" class="form-control bg-white border-left-0 border-md"required>
                        <div style="color:#f44336" id="erreuremail1"></div>
                        </div>
                        
                          <!-- mot de passe -->
                        <div class="input-group col-lg-12 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                              <i class="fa fa-lock text-muted"></i>
                            </span>
                          </div>
                          <input id="password1" type="password" name="password1" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md"required>
                          <div  style="color:#f44336" id="erreurpas"></div>
                        </div>
                           
                    </div>
                    <div class="row form-group col-lg-10 col-xl-10 mx-auto ">
                      <button type="submit" id="submit" a href="" class="btn btn-primary btn-block py-2" name="submit" value="connexion">
                          
                        <span class="font-weight-bold"> Connexion</span>
                      </a>
                    </div>

                    </form><div id="response"></div>

                    <!--<?PHP
                          if(isset($error))
                            {echo '<font color="red">' .$error. "</FONT>";}
                     ?>-->
                    
                    
                    <div class="text-center w-100 mb-5"><a href="mdp_oblie.php">Mode passe oublié?</a></div>
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
                     <form  action="" method="POST">
                        <div class="row ">
                         <!-- <h6 class="text-center"><?php echo '<font color="red">'.$message.'</FONT>';?></h6>-->
                          <!--  <?php if(isset($_SESSION['created'])): ?>
                              <div class="alert alert-succes">
                                <?php echo $_SESSION['created'];?>
                              </div>
                            <?php endif;?>-->
                          <!-- First Name -->
                          <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                              </span>
                            </div>
                           
                            <input id="lastName" type="text" name="firstname" placeholder="Nom" class="form-control bg-white border-left-0 border-md">
                            <div style="color:#f44336" id="erreurnom" ></div>
                          </div>
                          <!-- Last Name -->
                          <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                              </span>
                            </div>
                            <input  id="firstName" type="text" name="lastname" placeholder="Prenom" class="form-control bg-white border-left-0 border-md"required >
                            <div style="color:#f44336" id="erreurprenom" ></div>
                          </div>
                          <!-- Username -->
                         <!-- <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                              </span>
                            </div>
                            <input id="Username" type="text" name="Username" placeholder="Nom d'utilisateur" class="form-control bg-white border-left-0 border-md" required>
                            <div style="color:#f44336" id="erreurpseudo" ></div>
                          </div>-->
                          
                          <!-- Email Address -->
                          <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                              </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Addresse Email" 
                            class="form-control bg-white border-left-0 border-md" required>
                            <div style="color:#f44336" id="erreurmail" ></div> 
                          </div>
                          
                          <!-- Password -->
                          <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                              </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md" required>
                            <div style="color:#B80000" id="erreurpwd1" ></div>
                          </div>
                          <!-- Password Confirmation -->
                          <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                              </span>
                            </div>
                            <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirmer mot de passe" class="form-control bg-white border-left-0 border-md" required>
                            <div style="color:#f44336" id="erreurpwd2" ></div>
                          </div>
                          
                          <!--check confirmation-->
                     
                          
                          <!-- Submit Button -->
                          <div class="clearfix">
    
        <button type="submit" class="btn-info btn-block" name="inscrire" value="inscrire"id="inscrire">Inscription</button>
      </div>
                          
                        </div>
                      </form>
                      </div>

                    </div>
                    
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>

  <script src=js/jquery-3.4.1.min.js></script>
   
  <script>
     $(document).ready(function(){

      $("#lastName").blur(function(){
        valid1=true;
      if($("#lastName").val()==""){
      valid1=false;
      $("#lastName").css('border','1px solid #f44336');
      $("#lastName").next("#erreurnom").show().text("Nom obligatoire");
      }
     else if(!$("#lastName").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#lastName').val().length<3){
      valid1=false;
      $("#lastName").css("border","1px solid #f44336");
      $('#lastName').next("#erreurnom").show().text("Nom invalide et trop court minimum 3 caractères");

     }
     else if(!$("#lastName").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) ){
                valid3=false;
              $('#lastName').css('border','1px solid #f44336');
              $('#lastName').next("#erreurnom").show().text("Nom invalide.");
          }   
          else if($('#lastName').val().length<3){

                valid3=false;
              $('#lastName').css('border','1px solid #f44336');
              $('#lastName').next("#erreurnom").show().text("Nom trop court minimum 3 caractères.");
            } 
         else{
              $('#lastName').css('border','1px solid #00ff40');
              $('#lastName').next("#erreurnom").hide().text('');
             }
        });


             $('#lastName').keyup(function(){
             if($('#lastName').val().length>=3 && $("#lastName").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#lastName').val()!=""){

                $('#lastName').css('border','1px solid #00ff40');
                $('#lastName').next("#erreurnom").show().text("");
          }
        });


    $("#firstName").blur(function(){
        valid2=true;
    if($("#firstName").val()==""){
      valid2=false;
      $("#firstName").css('border','1px solid #f44336');
      $("#firstName").next("#erreurprenom").show().text("Prénom obligatoire");
    }
    else if(!$("#firstName").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#firstName').val().length<3){
      valid2=false;
      $("#firstName").css("border","1px solid #f44336");
      $('#firstName').next("#erreurprenom").show().text("Prénom invalide et trop court minimum 3 caractères.");

    }
    else if(!$("#firstName").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) ){
              valid2=false;
              $('#firstName').css('border','1px solid #f44336');
              $('#firstName').next("#erreurprenom").show().text("Prénom invalide.");
          }   
          else if($('#firstName').val().length<3){
                valid2=false;
                $('#firstName').css('border','1px solid #f44336');
                $('#firstName').next("#erreurprenom").show().text("Prénom trop court minimum 3 caractères.");
          } 
          else{
                $('#firstName').css('border','1px solid #00ff40');
                $('#firstName').next("#erreurprenom").hide().text('');
          }});


               $('#firstName').keyup(function(){
               if($('#firstName').val().length>=3 && $("#firstName").val().match(/^(([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+)?)+([A-Za-zéçàè]+[ \-']?)*([A-Za-zéçàè]+[])?$/) && $('#firstName').val()!=""){
                $('#firstName').css('border','');
                $('#firstName').next("#erreurprenom").show().text("");}
             });
/*

               $('#Username').blur(function(){
              valid3=true;
              pseudo= $('#Username').val();
              $.ajax({
                type:"POST",
                url:"pseudo.php",
                data:'pseudo=' + pseudo,
                success:function(data){               
          if(data == 1){
              valid3=false;
              $('#Username').css('border','1px solid #f44336');
              $('#Username').next("#erreurpseudo").fadeIn().text("Nom d'utilisateur est déjà utilisé. Essayez un autre .");
                      }
          else if($('#Username').val()==""){
              valid3=false;
              $('#Username').css('border','1px solid #f44336');
              $('#Username').next("#erreurpseudo").show().text("Nom d'utilisateur obligatoire.");
                }
          else if(!$("#Username").val().match(/^[a-zéçàè0-9]+$/i)){
              valid3=false;
              $('#Username').css('border','1px solid #f44336');
              $('#Username').next("#erreurpseudo").show().text("Nom d'utilisateur invalide.");
                  }
          else  if($('#Username').val().length<3){
                valid3=false;
                $('#Username').css('border','1px solid #f44336');
                $('#Username').next("#erreurpseudo").show().text("Nom dutilisateur trop court minimum 3 caractères.");
                  }
          else{ 
              $('#Username').css('border','1px solid #00ff40');
              $('#Username').next("#erreurpseudo").hide().text("");    
              }}});      
              });
        $('#Username').keyup(function(){
            if($('#Username').val().length>=3 && $("#Username").val().match(/^[a-zéçàè0-9]+$/i) && $('#Username').val()!=""){
                 $('#Username').css('border','1px solid #00ff40');
                 $('#Username').next("#erreurpseudo").show().text("");}
        });*/
       

        $('#email').blur(function(){
         valid4=true;
         mail= $('#email').val();
         $.ajax({
          type :"POST",
          url: "mail.php",
          data:'mail=' + mail,
          success:function(data){
      if(data == 1){
        valid4=false;
        $('#email').css('border','1px solid #f44336');
        $('#email').next("#erreurmail").fadeIn().text("Cette adresse e-mail est déjà enregistrer. Essayez un autre e-mail.");
                    }
      else if($('#email').val()==""){
              valid3=false;
              $('#email').css('border','1px solid #f44336');
              $('#email').next("#erreurmail").show().text("E-mail obligatoire");
                }            
      else if(!$("#email").val().match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)){
          valid4=false;
          $('#email').css('border','1px solid #f44336');
          $('#email').next("#erreurmail").show().text("Adress mail invalide");
            }
      else  if($('#email').val().length<3){
          valid4=false;
          $('#email').css('border','1px solid #f44336');
          $('#email').next("#erreurmail").show().text("Nom trop court minimum 3 caractères");
            }
      else{ 
          $('#email').css('border','1px solid #00ff40');
          $('#email').next("#erreurmail").hide().text('');    
                    } } });});
        
          $('#email').keyup(function(){
             valid4=true;
             mail= $('#email').val();
            $.ajax({
                type:"POST",
                url:"mail.php",
                data:'mail=' + mail,
                success:function(data){
        if(data == 1){
                valid4=false;
                    }
        else if(!$("#email").val().match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)){
                valid4=false;
            }
        else if($('#email').val().length<3){
                valid4=false;
            } }});  });
        
    $('#password').blur(function(){
              valid5=true;
          if($('#password').val()==""){
                valid5=false;
              $('#password').css('border','1px solid ##f44336');
              $('#password').next("#erreurpwd1").show().text("Entrez un mot de passe.");
          }                                     
          else if($('#password').val().length<8){
                valid5=false;
              $('#password').css('border','1px solid #f44336');
              $('#password').next("#erreurpwd1").show().text("Utilisez 8 caractères ou plus pour votre mot de passe.");
          } 
          else{
               $('#password').css('border','1px solid #00ff40');
               $('#password').next("#erreurpwd1").hide().text('');
          }});
    
        $('#password').keyup(function(){
            if($('#password').val().length>=8 && $('#password').val()!=""){
                $('#password').css('border','1px solid #00ff40');
                $('#password').next("#erreurpwd1").hide().text("");}
        });
        $('#passwordConfirmation').blur(function(){
              valid6=true;
          if($('#passwordConfirmation').val()=="" && $('#password').val()!=""){
                valid6=false;
              $('#passwordConfirmation').css('border','1px solid #f44336');
              $('#passwordConfirmation').next("#erreurpwd2").show().text("Confirmez votre mot de passe.");
          }                                     
          else if($('#password').val() != $('#passwordConfirmation').val()){
                valid6=false;
              $('#passwordConfirmation').css('border','1px solid #f44336');
              $('#passwordConfirmation').next("#erreurpwd2").show().text("Les mots de passe ne correspondent pas.");


          } 
           else if( $('#passwordConfirmation').val()==""){
                valid6=false;
              $('#passwordConfirmation').css('border','1px solid #f44336');
             
          }

          else{
               $('#passwordConfirmation').css('border','1px solid #00ff40');
               $('#passwordConfirmation').next("#erreurpwd2").hide().text('');
          }});
        $('#passwordConfirmation').keyup(function(){
            if($('#password').val() == $('#passwordConfirmation').val() && ($('#passwordConfirmation').val()!="" && $('#password').val()!="")){

                $('#passwordConfirmation').css('border','1px solid #00ff40');
                $('#passwordConfirmation').next("#erreurpwd2").hide().text("");}
        });


   //  $('#inscrire').click(function(){
      /*  $("#form_register").submit(function(){
      var status = $("#status");
      var nom= $("#lastName").val();
      var prenom= $("#firstname").val();
      var pseudo= $("#Username").val();
      var emmail= $("#email").val();
      var pas1= $("#password").val();
      var pas2= $("#passwordConfirmation").val();

     if(nom=="" && prenom == "" && pseudo == "" && emmail == "" pas1 == "" && pas2 == "" && ){
        status.html("Veuillez remplir tous les champs").fadeIn(400);
      }

});*/
     
('#inscrire').click(function(){
          if(valid1==true && valid2==true && valid4==true && valid5==true && valid6 == true){
                valid=true;
                return valid; 
            }else{

                valid=false;
               return valid;
            } 
        });

      //Verifie la connexion


     $("#email1").blur(function(){
        valid1=true;
        mail=$("#email1").val();
        $ajax({
          type:"POST",
          url:"connexion.php",
          data:'mail='+mail,
          success:function(data){
      if(data== 2){
        valid1=false;
        $('#email1').css('border','1px solid #f44336');
        $('#email1').next("#erreuremail1").fadeIn().text("Cette adresse e-mail n'existe pas.");}
         
       else if($("#email1").val()==""){
          valid1=false;
          $("#email1").css('border','1px solid #f44336');
          $('#email').next("#erreuremail1").show().text("E-mail obligatoire.");}
          else if(!$("#email1").val().match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)){
        valid1=false;
        $('#email1').css('border','1px solid #f44336');
        $('#email1').next("#erreuremail1").show().text("mail invalide.");}

        else{
        $('#email1').css('border','1px solid #00ff40');
        $('#email1').next("#erreuremail1").hide().text('');  

        }} }); });
      $("#email1").keyup(function(){
        valid1=true;
        mail= $('#email1').val();
            $.ajax({
                type:"POST",
                url:"connexion.php",
                data:'mail=' + mail,
                success:function(data){
        if(data == 2){
                valid2=false;
                    }
        else if($("#email1").val().match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)){
          valid1=false;
        }}
       });
      });

      $("#password1").blur(function(){
        valid2=true;
        mail=$("#password1").val();
        $ajax({
          type:"POST",
          url:"connexion.php",
          data:'pass='+pass,
          success:function(data){
      if(data== 1){
        valid2=false;
        $('#password1').css('border','1px solid #f44336');
        $('#password1').next("#erreurpas").fadeIn().text("Mot de passe incorrecte");}
         
       else if($("#password1").val()==""){
          valid2=false;
          $("#password1").css('border','1px solid #f44336');
          $('#password1').next("#erreurpas").show().text("Mot de passe obligatoire.");}

        else{
        $('#password1').css('border','1px solid #00ff40');
        $('#password1').next("#erreurpas").hide().text('');  

        }} }); });
      $("#password1").keyup(function(){
        valid2=true;
        pass= $('#password1').val();
            $.ajax({
                type:"POST",
                url:"connexion.php",
                data:'pass=' + pass,
                success:function(data){
        if(data == 1){
                valid2=false;
                    }
                    else{
                      valid2=true;
                    }
        }
       });
      });

       $('#submit').click(function(){
            if(valid2==false){
                  $('#email1').css('border','');
                    $('#email1').next("#erreuremail1").hide().text(''); 
                $('#password1').css('border','1px solid #f44336');
             $('#password1').next("#erreurpas").fadeIn().text('mot de passe incorrecte ');
                 return false;
            }else if(valid1==false){
                 $('#password1').css('border','');
                  $('#password1').next("#erreurpas").hide().text(''); 
             $('#email1').next("#erreuremail1").fadeIn().text("E-mail incorrecte ");
                $('#email1').css('border','1px solid #f44336');
                return false;
            }else{
                valid=true;
                return valid;
                    }
        });


     
     /*  $('#email1').keyup(function(){
            valid1=true;
            valid2=true;
           
            mail= $('#email1').val();
            pass=$('#password1').val();
            
            $.ajax({
                type:"POST",
                url:"connexion.php",
                data:'mail=' + mail +'&pass='+pass,
                success:function(data){

                 if(data == 1){
                  valid1=false;
                       

                    valid1=false;
       
                 }else if( data==2)
                    {
                       valid2=false;
                    }
              }
            });
            
        });
        
             $('#password1').keyup(function(){
              valid1=true;//mot de passe
              valid2=true;//email
           
              mail= $('#email1').val();
              pass=$('#password1').val();
            
              $.ajax({
                type:"POST",
                url:"connexion.php",
                data:'mail=' + mail +'&pass='+pass,
                success:function(data){
                    
                if(data == 1){
                      if(('#password1').val()=""){

                           $('#password1').css('border','1px solid #f44336');
                           $('#password1').next("#erreurpas").fadeIn().text('Mot de passe obligatoire ');

                        }

                        valid1=false;
       
               }else if( data==2){
                      

                       valid2=false;
        
                    }
                }
            }); 
        });

        $('#submit').click(function(){
          
            if(valid1==false){

                  $('#email1').css('border','1px solid #00ff40');
                  $('#email1').next("#erreuremail1").hide().text(''); 
                  $('#password1').css('border','1px solid #f44336');
                  $('#password1').next("#erreurpas").fadeIn().text('Mot de passe incorrecte ');

                 return false;

            }else if(valid2==false){

                 $('#password1').css('border','1px solid #00ff40');
                 $('#password1').next("#erreurpas").show().text(''); 
                 $('#email1').next("#erreuremail1").fadeIn().text("E-mail incorrecte ");
                 $('#email1').css('border','1px solid #f44336');

                return false;

          }else{

                valid=true;
                return valid;
                    }
        });*/
  
    });
     </script>
  <?php }else{  ?>
    <nav class=" navbar navbar-expand navbar1  "style="height:70px;">
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
             <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle nav-link d-inline" style="color:#365390"  data-toggle="dropdown">
                  <i class="fas fa-user"></i><?php echo $_SESSION['prenom']?>
                </a>
                <div class="dropdown-menu" >
                  
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-cog"></i> Paramétres
                  </a>
                  <a href="logout.php" class="dropdown-item">
                    <i class="fas fa-user-times"></i> Déconnexion
                  </a>
                </div>
              </li>
              
            </ul>
             
            </li>
          </ul>
        </div>
      </nav>
      <?php }  ?>
