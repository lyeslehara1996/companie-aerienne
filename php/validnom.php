<?php
$link = mysqli_connect('localhost', 'id12337393_goldenf', '01172012', 'id12337393_compagnief'); 

if (!empty($_POST['nom']) && !empty($_POST['reference'])) {

    $nom = $_POST['nom'];
    
    $reference = $_POST['reference'];

    $reponse = ("SELECT nom from passager p ,reservation r where p.nom='$nom' and r.num_res='$reference'");

    if (!empty($con = mysqli_query($link, $reponse))) {
        $row = mysqli_num_rows($con);
        if ($row > 0) {
            echo "<span ></span>";
        } else {
            echo "<script text/javascript> alert('Votre nom est incorrect');
            document.location.href='index.php'; </script>";
        }
    }

} else {
    echo "<span class='error' >champs obligatoire</span>";
}
