<?php
  session_start();
  require  "bd.php";






 $errors =array();

 extract($_POST);
if (isset($_POST)) {
  
    $depart = $_POST['depart'];
    $arriver = $_POST['destination'];

    $date1 = $_POST['demo1'];
    $date2= str_replace('/', '-', $date1);
    $post_date =date('Y-m-d', strtotime($date2));

    $datear = $_POST['demo2'];
    $datearr = str_replace('/', '-', $datear);
    $post_date1 =date('Y-m-d', strtotime($datearr));
    
    

    $_SESSION['id']= $_POST['Adulte'];
    $adulte =$_SESSION['id'];
  
    $_SESSION['id1']= $_POST['Enfant'];
    $enfant = $_SESSION['id1'];
  
    $_SESSION['id2']= $_POST['bebe'];
    $bebe = $_SESSION['id2'];
    $nbrtotalpassage = $adulte + $enfant + $bebe ;
    $_SESSION['nbrP'] = $nbrtotalpassage ;
  



    //prix adulte
    require 'bd.php';
            //prix enfant
    
     

    $aller_status = 'unchecked';
    $simple_status = 'unchecked';
    if (!empty($depart) && !empty($arriver) && !empty($post_date) && !empty($post_date1)) {
        if (isset($depart)  && isset($arriver) && isset($post_date) && isset($post_date1)) {
            $selected_radio1 = $_POST ['alerretour'] ;
            if ($selected_radio1 =='retour') {
                $aller_status = 'checked';
                $date = date("Y-m-d") ;
                $arriver=$post_date;
                $query ="SELECT num_vol  FROM vol where  nom_aer_dep like '$depart' ";
                $query2 ="SELECT num_vol  FROM vol where nom_aer_arr like '$destination' ";
                $query3 ="SELECT num_vol  FROM vol where date_depart ='$depart' ";
                $query4 ="SELECT num_vol  FROM vol where date_arrivee like '$arriver' ORDER BY num_vol ";
                $con = mysqli_query($connection, $query);
                $row = mysqli_num_rows($con);
                $cons = mysqli_query($connection, $query2);
                $rows = mysqli_num_rows($cons);
                $conn = mysqli_query($connection, $query3);
                $roww = mysqli_num_rows($con);
                $conns = mysqli_query($connection, $query);
                $rowws=mysqli_num_rows($cons);

                $depart=preg_replace('#[^a-zA-Z]#i', '', $depart);
                $destination=preg_replace('#[^a-zA-Z]#i', '', $destination);


                if (strlen($depart)<4 || strlen($depart)>16) {
                    $errors['depart'] ='<br/>  4 a 16 svp. ';
                    header('location:index.php');
                    exit();
                } elseif (strlen($destination)<4 || strlen($destination)>16) {
                    $errors['destination'] ='<br/>  4 a 16 svp. ';
                    exit();
                } elseif ($row <= 0) {
                    $errors['depart'] = 'le de depart n existe pas';
                    header('location:index.php');
                    exit();
                } elseif ($rows <=0) {
                    $errors['destination'] = '<br/>la destination  n existe pas';
                    header('location:index.php');
                } elseif ($post_date < $date) {
                    $errors= 'la date de  depart doit etre superieur a la date d aujourdhui ';
                    header('location:index.php');
                } elseif ($row <= 0) {
                    $errors= 'la date de  depart n existe pas';
                    header('location:index.php');
                    exit();
                } elseif ($post_date == $post_date1) {
                    $errors['$post_date']= 'impossible de reserver dans la meme date ';
                    header('location:index.php');
                    exit();
                } elseif ($post_date> $post_date1) {
                    echo 'la date de destination doit etre superieur a la date de depart !' ;
                    header('location:index.php');
                    exit();
                } elseif ($rowws< 0) {
                    $errors['$post_date1']='la date n existe pas';
                    header('location:index.php');
                }
            } elseif ($selected_radio1 =='simple') {
                $simple_status = 'checked';

                $date = date("Y-m-d") ;
                $arriver=$post_date;
                $query ="SELECT num_vol  FROM vol where  nom_aer_dep like '$depart' ";
                $query2 ="SELECT num_vol  FROM vol where nom_aer_arr like '$destination' ";
                $query3 ="SELECT num_vol  FROM vol where date_depart ='$depart' ";
                $query4 ="SELECT num_vol  FROM vol where date_arrivee like '$arriver' ORDER BY num_vol ";
                $con = mysqli_query($connection, $query);
                $row = mysqli_num_rows($con);
                $cons = mysqli_query($connection, $query2);
                $rows = mysqli_num_rows($cons);
                $conn = mysqli_query($connection, $query3);
                $roww = mysqli_num_rows($con);
                $conns = mysqli_query($connection, $query);
                $rowws=mysqli_num_rows($cons);

                $depart=preg_replace('#[^a-zA-Z]#i', '', $depart);
                $destination=preg_replace('#[^a-zA-Z]#i', '', $destination);


                if (strlen($depart)<4 || strlen($depart)>16) {
                    $errors['depart'] ='<br/>  4 a 16 svp. ';
                    header('location:index.php');
                    exit();
                } elseif (strlen($destination)<4 || strlen($destination)>16) {
                    $errors['destination'] ='<br/>  4 a 16 svp. ';
                    exit();
                } elseif ($row <= 0) {
                    $errors['depart'] = 'le de depart n existe pas';
                    header('location:index.php');
                    exit();
                } elseif ($rows <=0) {
                    $errors['destination'] = '<br/>la destination  n existe pas';
                    header('location:index.php');
                } elseif ($post_date < $date) {
                    $errors= 'la date de  depart doit etre superieur a la date d aujourdhui ';
                    header('location:index.php');
                } elseif ($row <= 0) {
                    $errors= 'la date de  depart n existe pas';
                    header('location:index.php');
                    exit();
                }
            }
        }
    }else{
        header('Location:index.php');
    }
}

/*
$aller_status = 'unchecked';
$simple_status = 'unchecked';
$eco_status = 'unchecked';
$aff_status = 'unchecked';
$selected_radio1 = $_POST ['alerretour'] ;
$selected_radio = $_POST ['disabledGroupExample'] ;
*/
if (empty($errors)) {


    
        // header('location:aller.php');
        require 'aller.php';
   
    
}