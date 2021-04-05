

<?php
$db['db_host']="localhost";
$db['db_user']="id12337393_golden";
$db['db_pass']="01172012";
$db['db_name']="id12337393_compagnie";
	
$connect= mysqli_connect('localhost', 'id12337393_golden','01172012','id12337393_compagnie');

if (isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_message']))
{
    $name = $_POST['user_name'] ;
    $email = $_POST['user_email'];
    $message = $_POST['user_message'];

    $query ="INSERT INTO reclamation (nom,email,text) " ;
    $query .= "VALUES('$name', '$email', '$message') " ;
    $result = mysqli_query($connect, $query ) ;

    if(!$result) {
        die('query failed' .mysqli_error()) ; 
    }
}




