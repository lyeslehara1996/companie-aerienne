<?php session_start(); ?>
<?php
$_SESSION['identifiant'] = NULL;
$_SESSION['nom'] = NULL;
$_SESSION['prenom'] = NULL;
$_SESSION['role'] = NULL;
session_destroy();

header("location:index.php");


?>