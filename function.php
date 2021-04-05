<?PHP
function ifItIsMethod($method=null){

    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){

        return true;

    }

    return false;

}
function redirect($location){


    header("Location:" . $location);
    exit;

}


function email_exists($email){

    global $connection;


    $query = "SELECT email FROM abonnees WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    if(!$result)
{
	die("QUERY FAILED".mysqli_error($connection));
}

    if(mysqli_num_rows($result) > 0) {

        return true;

    } else {

        return false;

    }



}
function username_exists($username){

    global $connection;


    $query = "SELECT username FROM abonnees WHERE pseudo = '$username'";
    $result = mysqli_query($connection, $query);
    if(!$result)
{
    die("QUERY FAILED".mysqli_error($connection));
}

    if(mysqli_num_rows($result) > 0) {

        return true;

    } else {

        return false;

    }



}
function generateNewString($leng = 10){

    $token = "01234hlpoyreza56789qsdazerthyuiknbgxmopncxsw";
    $token = str_shuffle($token);
    $token = substr($token, 0, $leng);

    return $token;
}
function redirecttoLoginPage(){
    header("Location: index.php");
    exit();

}
?>