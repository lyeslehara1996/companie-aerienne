<?php    
  require('connextion.php');
?>
<?php 
if ($conn)
{
      
      $num_Reservation=$_SESSION['num_Reservation'];
      $nom_Passager=$_SESSION['nom_Passager'];
      $code_siege=$_SESSION['code_siege'];
      $zone_siege=$_SESSION['zone_siege'];



      $num_vol_fin=$_SESSION['num_vol'];
      

      
      
      $query = "SELECT p.nom,p.prenom,p.date_nais,v.date_depart,v.heure_depart,v.nom_aer_arr,v.nom_aer_dep FROM passager p,vol v,reservation r,siege s WHERE  p.num_res=r.num_res and (r.num_vol_aller=v.num_vol or r.num_vol_retour=v.num_vol )and p.num_res= '".$num_Reservation."' and p.nom='".$nom_Passager."' and v.num_vol= '".$num_vol_fin."' " ;

      
      $result = mysqli_query($conn,$query);
      if($row =mysqli_fetch_assoc($result))
      { 
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $nom_aer_dep=$row['nom_aer_dep'];
        $nom_aer_arr=$row['nom_aer_arr'];
        $date_depart=$row['date_depart'];
        $heure_depart=$row['heure_depart'];
        

        $CodeBarre=$row['date_nais'];

        

      }     
  
    
}else{
        echo"conextions n'est pas ouvert";
}    
?>