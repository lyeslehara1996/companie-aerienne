<?php
//$link = mysqli_connect('localhost', 'root', '', 'compagnie6');

/*if (!empty($_POST['reference'])) {
$reference = $_POST['reference'];
$reponse = ("SELECT num_res from reservation where num_res='$reference'");

if (!empty($con = mysqli_query($link, $reponse))) {
$row = mysqli_num_rows($con);
if ($row > 0) {
echo " ";
} else {
echo "<span class='error'  >Votre numéro de carte est incorrect !</span>";
}

} else {
echo "<span class='error>Champs obligatoire !</span>";
}*/

$link = mysqli_connect('localhost', 'id12337393_goldenf', '01172012', 'id12337393_compagnief');

if (!empty($_POST['reference'])) {

    $reference = $_POST['reference'];

    $reponse = ("SELECT num_res from reservation where num_res='$reference'");
    if (!empty($con = mysqli_query($link, $reponse))) {
        $row = mysqli_num_rows($con);
        if ($row > 0) {
            echo "<span ></span>";
        } else {
            echo "<script text/javascript> alert('votre reference est incorrect');
            document.location.href='index.php'; </script>";
        }
    }
} else {
    echo "<span class='error'>Champs obligatoire</span>";}
