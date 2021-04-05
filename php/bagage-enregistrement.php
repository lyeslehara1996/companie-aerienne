<?php  
  if ($conn)
  {
    if (isset($_POST['continuer']))
    {
      /*Insertion dans la table Bagage*/
      $Bagage_soute=$_POST['Bagage_soute'];
      $Bagage_main=$_POST['Bagage_main'];
      $Bagage_sac=$_POST['Bagage_sac'];

      /*la sesion de Bagage_soute,Bagage_main et Bagage_sac pour le utilise dans recuperation de etiquette */
      $_SESSION['Bagage_soute']=$Bagage_soute;
      $_SESSION['Bagage_main']=$Bagage_main;
      $_SESSION['Bagage_sac']=$Bagage_sac;

      $Nprix_Bagage_soute=8000*$Bagage_soute;
      $Nprix_Bagage_main=7000*$Bagage_main;
      $Nprix_Bagage_sac=6000*$Bagage_sac;

      $Totalprix=$Nprix_Bagage_soute+$Nprix_Bagage_main+$Nprix_Bagage_sac;
                
      $sql = "INSERT INTO bagage (qtt_bagage_ensoute,qtt_bagage_amain,qtt_sac,prix) VALUES ('".$Bagage_soute."','".$Bagage_main."','".$Bagage_sac."','".$Totalprix."')";
      mysqli_query($conn, $sql);

      /*Récuperation le num de service*/                
      $num_service="SELECT num_service,prix FROM service WHERE num_service=(SELECT MAX(num_service)FROM service)";

      $result=mysqli_query($conn,$num_service);
      while ($rows=mysqli_fetch_assoc($result))
      {    
        $_SESSION['num_service']=$rows['num_service'];
        $_SESSION['prix_service']=$rows['prix'];   
      }
      /*Récuperation le num de bagage*/

      $num_bagage="SELECT num_bagage,prix FROM bagage WHERE num_bagage=(SELECT MAX(num_bagage)FROM bagage)";

      $result=mysqli_query($conn,$num_bagage);
                                      
      while ($rows=mysqli_fetch_assoc($result))
      {
        $_SESSION['num_bagage']=$rows['num_bagage'];
        $_SESSION['prix_bagaga']=$rows['prix'];
      } 

      /*La session pour le num_service , num_bagage,prix_service et prix_bagaga */
      $Repas=$_SESSION['num_service'];    
      $Bagage=$_SESSION['num_bagage'];
      $prix_service=$_SESSION['prix_service'];
      $prix_bagaga=$_SESSION['prix_bagaga'];
                  
      $montant=$prix_bagaga+$prix_service;
      $_SESSION['montant']=$montant;


      /*Recuperatio le num de reservation*/
      $_SESSION['num_Reservation'];


      header("Location: avion.php");
      //ob_enf_flush();
    }    
  }
  else
  {
      echo "error";
  }
  
?>