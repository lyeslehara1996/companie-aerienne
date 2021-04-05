<?php

session_start();
//verificatio de champs destination 

if (!empty($_POST['depart_check'])) {
    $depart=$_POST['depart_check'];
    $depart=preg_replace('#[^a-zA-Z]#i', '', $depart);
    if (strlen($depart)<4 || strlen($depart)>16) {
        echo '<br>Ce champ doit être compris entre 4 à 16 caractères. ';
        exit();
    }
     require  "bd.php";
     $query ="SELECT num_vol  FROM vol where  nom_aer_dep like '$depart' ";

     if( $con = mysqli_query($connection, $query)){
            $row = mysqli_num_rows($con);
            if ($row >0){
                echo 'l';
                exit();
    } else {
        echo '<br>Cette ville de départ n&#039est pas disponible.';
        
        exit();
    }
   
}}

//verificatio de champs destination 
if (!empty($_POST['destination_check'])) {
    $destination=$_POST['destination_check'];
    $destination=preg_replace('#[^a-zA-Z]#i', '', $destination);
    if (strlen($destination)<4 || strlen($destination)>16) {
        echo '<br>Ce champ doit être compris entre 4 à 16 caractères.  ';
        exit();
    }
    require 'bd.php';

    $query ="SELECT num_vol  FROM vol where nom_aer_arr like '$destination' ";
    if( $con = mysqli_query($connection, $query)){
        $row = mysqli_num_rows($con);
        if ($row >0){
        echo 'l1';
        
        exit();
    } else {  echo '<br>Cette ville de destination n&#039est pas disponible.';
       
        
        exit();
    }
}}


//verification date de destination !!

if (!empty($_POST['demo1_check']) && !empty($_POST['demo2_check'])) {
   require "bdpdoo.php";
    $date1 = $_POST['demo1_check'];
    $date2= str_replace('/','-',$date1);
    $post_date =date('Y-m-d', strtotime($date2));

     $datear =   $_POST['demo2_check'];
     $datearr= str_replace('/','-',$datear);
    $post_date1 =date('Y-m-d', strtotime($datearr));



 
        $req=$pdo->prepare("SELECT num_vol from vol where date_arrivee=? ");
        $req->execute([ $post_date1]);
    
        $numRows =$req->rowCount();
        if ($numRows > 0) {
            if ( $post_date == $post_date1) {
                echo '<br>Ce vol aller-retour dans le même jour n&#039existe pas.';
                exit();
            } elseif ($post_date >$post_date1) {
                echo '<br>La date de destination doit être supérieure à la date de départ!' ;
                exit();
            } else {
                echo 'success';
                exit();
            }
        } else {
            echo '<br>Cette date d&#039arrivée n&#039est pas disponible.';
            exit();
        }
    }

    /*
    $arriver= $_POST['demo2_check'];
    $query ="SELECT num_vol  FROM vol where date_arrivee like '$arriver' ";
     $con = mysqli_query($link, $query);
        $row = mysqli_num_rows($con);
  
    if ($row > 0) {
        if (strtotime($_POST['demo1_check']) == strtotime($_POST['demo2_check'])) {
            echo 'impossible de reserver dans la meme date ';
            exit();
        } else if (strtotime($_POST['demo1_check']) > strtotime($_POST['demo2_check'])) {
            echo 'la date de destination doit etre superieur a la date de depart !' ;
            exit();
        } else{
            echo 'success';
            exit();
        }
    } else {
        echo 'la date d arrivee n existe pas';
        exit();
    }
 
}*/

//verification date de depart 
if (!empty($_POST['demo1']) ) {

        require 'bd.php';
        
     
        $date1 = $_POST['demo1'];
        $date2= str_replace('/','-',$date1);
    
        $post_date =date('Y-m-d', strtotime($date2));
        $query ="SELECT num_vol  FROM vol where date_depart ='$post_date' ";
     
         $con = mysqli_query($connection, $query);
            $row = mysqli_num_rows($con);
        if($post_date <= date('Y-m-d')){
            echo '<br>La date de  départ doit être supérieure à la date d&#039aujourdhui. ';
        }elseif ($row > 0) {
            echo 'ssucess';
            exit();
        } else {
            echo '<br>Cette date de départ n&#039est pas disponible.';
            exit();
        }
    }

if(isset($_POST['Adulte']) ){
if( isset($_POST['Enfant'])) {
if( isset($_POST['bebe'])){
    require 'bd.php';

    // slection de nombre total des siege eco
$siege= "SELECT nbrrsiege_eco from avion a , vol v 
where a.matricule_avion = v.matricule_avion  LIMIT 1";
if(!empty($res = mysqli_query($connection, $siege))){
$row = mysqli_num_rows($res);
while($row = mysqli_fetch_assoc($res)){
$nbr=  $row['nbrrsiege_eco'] ;

//nbr de place reserver dans eco    
$place= "SELECT Sum(nbr_passager) from reservation r , vol v
where r.num_vol =v.num_vol
 and r.classe='eco'" ;
 $resu= mysqli_query($connection, $place);

 $lig = mysqli_num_rows($resu);
 while($lig = mysqli_fetch_assoc($resu)){
    $nbr2= $lig['Sum(nbr_passager)'] ;
$rester =$nbr - $nbr2 ;
echo $rester; }
   


}}
}}}




//autocompil


