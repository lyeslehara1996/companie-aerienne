<?php  
$link = mysqli_connect('localhost', 'id12337393_goldenf', '01172012', 'id12337393_compagnief'); 	
//numero de carte 
if (!empty($_POST['numero'])) {
    $num = $_POST['numero'];
    $reponse = ("SELECT num_carte from carte_banquaire where num_carte='$num'");

    if (!empty($con = mysqli_query($link, $reponse))) {
        $row = mysqli_num_rows($con);
        if ($row > 0) {
            echo " ";
        } else {
            echo "<span class='error' class='error'style='color:#000000' >Votre numéro de carte est incorrect !</span>";
        }
    }
}
//date d'expiration 
$link2 = mysqli_connect('localhost', 'id12337393_goldenf', '01172012', 'id12337393_compagnief');

if (!empty($_POST['date']) && !empty($_POST['num_carte'])) {

    $date = $_POST['date'];
    $dat = date('Y', strtotime($date));
    $dat1 = date('m', strtotime($date));
    $num = $_POST['num_carte'];

    $reponse2 = ("SELECT MONTH(date_expiration) ,YEAR(date_expiration)
FROM carte_banquaire
WHERE  MONTH(date_expiration)='$dat1'
AND YEAR(date_expiration)='$dat' AND num_carte='$num'");

    if (!empty($con2 = mysqli_query($link2, $reponse2))) {
        $row2 = mysqli_num_rows($con2);
        if ($row2 > 0) {
            echo "<span ></span>";
        } else {
            echo "<span class='error' style='color:#ff0000'>Votre date d'expiration est incorrect </span>";
        }
    }

}

$link3 = mysqli_connect('localhost', 'id12337393_goldenf', '01172012', 'id12337393_compagnief');
// verification de numero de carte et cryptogramme 
if (!empty($_POST['pwd']) && !empty($_POST['num'])) {

    $pwd = $_POST['pwd'];
    $num = $_POST['num'];

    $reponse3 = ("SELECT cryptogramme from carte_banquaire where cryptogramme='$pwd' AND num_carte='$num'");

    if (!empty($con3 = mysqli_query($link3, $reponse3))) {
        $row3 = mysqli_num_rows($con3);
        if ($row3 > 0) {
            echo "<span ></span>";
        } else {
            echo "<span class='error' style='color:#000000'>Votre cryptogramme est incorrect </span>";
        }
    }
}
