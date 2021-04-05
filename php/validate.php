<?php
$link = mysqli_connect('localhost', 'id12337393_goldenf', '01172012', 'id12337393_compagnief');

if (!empty($_POST['date']) && !empty($_POST['num'])) {

    $date = $_POST['date'];
    $dat = date('Y', strtotime($date));
    $dat1 = date('m', strtotime($date));
    $num = $_POST['num'];

    $reponse = ("SELECT MONTH(date_expiration) ,YEAR(date_expiration)
FROM carte_banquaire
WHERE  MONTH(date_expiration)='$dat1'
AND YEAR(date_expiration)='$dat' "); 

    if (!empty($con = mysqli_query($link, $reponse))) {
        $row = mysqli_num_rows($con);
        if ($row > 0) {
            echo "<span ></span>";
        } else {
            echo "<span class='error' style='color:#fff'>Votre date d'expiration est incorrect </span>";
        }
    }

} else {
    echo "<span class='error' style='color:#fff'>Veuillez entrer la date d'expiration</span>";
}
