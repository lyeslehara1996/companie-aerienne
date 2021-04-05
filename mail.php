<?php
$mail= $_POST['mail'];
include "includes/bd.php";

$reponse = $connection->query("SELECT email FROM abonnees WHERE email='{$mail}' ");
       
if($reponse->num_rows > 0){
    echo "1";
}else{
    echo "2";
}

?>