<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<?php    
  require('php/connextion.php');
?>
<?php  
	if ($conn)
    {
    	/*Récuperation le num de reservation er le nom de passager*/  
	    $nom_Passager=$_SESSION['nom_Passager'];
	    $num_Reservation=$_SESSION['num_Reservation'];
	        
	    $query='SELECT * FROM  reservation  where num_res="'.$num_Reservation.'"';
	    $result=mysqli_query($conn,$query);
	    if($row=mysqli_fetch_assoc($result))
	    {
	        $_SESSION['num_vol_aller']=$row['num_vol_aller'];
	        $_SESSION['num_vol_retour']=$row['num_vol_retour'];
	        	
			if($row['classe']=="premiere") 
	        {
	            include"siege-classe-pre.php";
	            	
	        }
	        if($row['classe']=="eco")
	        {
	            include"siege-classe-eco.php";
	        }
	    }
	}
  	else
  	{
      	echo "error";
  	}             
?>

