<?php
if (!isset($_SESSION))
{ 
	session_start();
}	
?>
<?php    
  require('php/connextion.php');
?>
<?php
	//Recuperation id de siege
	$code_siege = $_GET['idsiege'];
	//Recuperation le num de vol a partire de page siege-classe-pre 
	$num_vol=$_SESSION['num_vol'];

	$query ="UPDATE siegedispo SET disponibilite='dispo' WHERE disponibilite='selectionne'";
	mysqli_query($conn,$query);

	$query= "UPDATE siegedispo SET disponibilite='selectionne' WHERE code_siege='".$code_siege."' 
	and num_vol='".$num_vol."'";

	$_SESSION['code_siege']=$code_siege;

	mysqli_query($conn,$query);

	
	//Recuperation le Zone de siege
	$zone_siege =
	"SELECT zone_siege from siege s,siegedispo sd WHERE s.code_siege=sd.code_siege and sd.num_vol='".$num_vol."' and s.code_siege='".$code_siege."'";

    $result=mysqli_query($conn,$zone_siege);

    while($rows=mysqli_fetch_assoc($result))
    { 
        $zone_siege= $rows['zone_siege']; 
        $_SESSION['zone_siege']=$zone_siege;   
    }


	echo "<script > var t=setTimeout('document.location.replace(\'siege-classe-pre.php#val\')', 0);  </script>";

	//header("Location:siege-classe-pre.php#val");
	mysqli_close($conn);
?>



