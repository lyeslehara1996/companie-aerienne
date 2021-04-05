<?php

if(!empty($_POST['mail']) && !empty($_POST['pass']))
{
   
    $email=mysqli_real_escape_string($_POST['mail']);
    $pass=mysqli_real_escape_string($_POST['pass']);

    $connection =
    mysqli_connect('localhost', 'id12337393_golden','01172012','id12337393_compagnie');

    if(!$connection)
    {
        die("Database connection failed");
    }


        $query_connexion=$connection->query("SELECT * FROM abonnees WHERE email = '{$email}' ");
       
       if($row = mysqli_fetch_array($query_connexion)){
              $user_id = $row['identifiant'];
              $user_mdp = $row['mdp'];
              $user_email = $row['email'];
       }
             
             if(($query_connexion->num_rows == 1))
             {
                if(password_verify($pass, $user_mdp)
            
                 {   
                     echo "5"; //email et mot de passe sont correcte

                  }else{

                       echo"1";// Mot de passe incorrecte

                      }
            }else{
                 echo"2";// Email incorrecte
                 }
}

//  5: EMAIL et mdp correcte
//  1: Mot de passe INCORRECTE
//  2: Email incorrecte

   



?>