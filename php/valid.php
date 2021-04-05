<?php
$link = mysqli_connect('localhost', 'id12337393_goldenf', '01172012', 'id12337393_compagnief');

if (!empty($_POST['pwd']) && !empty($_POST['num'])) {

    $pwd = $_POST['pwd'];
    $num = $_POST['num'];

    $reponse = ("SELECT cryptogramme from carte_banquaire where cryptogramme='$pwd' AND num_carte='$num'");

    if (!empty($con = mysqli_query($link, $reponse))) {
        $row = mysqli_num_rows($con);
        if ($row > 0) {
            echo "<span ></span>";
        } else {
            echo "<span class='error' style='color:#fff'>Votre cryptogramme est incorrect </span>";
        }
    }
} else {
    echo "<span class='error' style='color:#fff'>Veuillez entrer votre cryptogramme</span>";
}
