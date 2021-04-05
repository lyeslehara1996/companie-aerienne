<?php
if (!isset($_SESSION))
{ 
    session_start();
}    

if ($conn)
{
    if (isset($_POST['valider']))
    {
        if ((isset($_POST['Numero_carte']))&&(isset($_POST['Date_expiration']))&&(isset($_POST['cryptogramme'])))
        {
            $dinars = 200 ; 
            $montant ==$_SESSION['montant']+$dinars;
            $Numero_carte = $_POST['Numero_carte'];
            $Date_expiration = $_POST['Date_expiration'];
           
            $dat1=date('y',strtotime($Date_expiration));
            $dat2=date('M',strtotime($Date_expiration));
            $cryptogramme = $_POST['cryptogramme'];

            if ((!empty($Numero_carte))&&(!empty($Date_expiration))&&(!empty($cryptogramme)))
            {

                $requete = "SELECT montant FROM carte_banquaire WHERE 
                                num_carte='".$Numero_carte."' and cryptogramme='".$cryptogramme."'";

                $res = mysqli_query($conn,$requete);
                if ($row = mysqli_fetch_assoc($res))
                {
                    if ($row['montant'] < $montant)
                    {
                        $reste=$row['montant'];
                        $_SESSION['reste'] = $reste;

                        $rester = $_SESSION['reste'];

                        $update = "UPDATE carte_banquaire SET montant ='".$rester."' where 
                                num_carte='".$Numero_carte."'and cryptogramme='".$cryptogramme."'";
                        $res = mysqli_query($conn,$update);
                        echo "<script type='text/javascript'>
                                alert('Votre montant est inssffisant');
                                document.location.href = 'paiement-enregistrement.php';
                            </script>";
                    }else
                    {
                        $reste = $row['montant']- $montant;
                        $_SESSION['reste'] = $reste;


                        $select="SELECT revenu FROM compagnie";
                        $res1=mysqli_query($conn,$select);
                        if ($rows1=mysqli_fetch_assoc($res1))
                        {
                            $total = $rows1['revenu'] + $montant;
                            $comp = "UPDATE compagnie SET revenu='".$total."'";
                            $res1=mysqli_query($conn,$comp);
                        }

                        $rester = $_SESSION['reste'];

                        $update = "UPDATE carte_banquaire SET montant ='".$rester."' where 
                                num_carte='".$Numero_carte."'and cryptogramme='".$cryptogramme."'";
                        $res = mysqli_query($conn,$update);


                        /*Insertion dans la table Enregistrement*//*Insertion dans la table Enregistrement*/

                        /*Récuperation le num de service*/                
                        $num_service="SELECT num_service,prix FROM service WHERE num_service=(SELECT MAX(num_service)FROM service)";

                        $result=mysqli_query($conn,$num_service);
                        while ($rows=mysqli_fetch_assoc($result))
                        {    
                            $_SESSION['num_service']=$rows['num_service'];
                            $_SESSION['prix_service']=$rows['prix'];   
                        }
                        /*Récuperation le num de bagage*/

                        $num_bagage="SELECT num_bagage,prix FROM bagage WHERE num_bagage=(SELECT MAX(num_bagage)FROM bagage)";

                        $result=mysqli_query($conn,$num_bagage);
                                      
                        while ($rows=mysqli_fetch_assoc($result))
                        {
                            $_SESSION['num_bagage']=$rows['num_bagage'];
                            $_SESSION['prix_bagaga']=$rows['prix'];
                        } 

                        /*La session pour le num_service , num_bagage,prix_service et prix_bagaga */
                        $Repas=$_SESSION['num_service'];    
                        $Bagage=$_SESSION['num_bagage'];
                        $prix_service=$_SESSION['prix_service'];
                        $prix_bagaga=$_SESSION['prix_bagaga'];
                                      
                        $montant=$prix_bagaga+$prix_service;
                        $_SESSION['montant']=$montant;

                        /*Recuperation  les champs de formulaire nom_passage et aller_retour*/
                        $nom_Passager=$_SESSION['nom_Passager'];
                        $aller_retour=$_SESSION['vol'];

                        /*Recuperatio le num de passager*/            
                        $num_passager="SELECT num_passager FROM passager WHERE nom='".$nom_Passager."'";
                        $result=mysqli_query($conn,$num_passager);
                        while ($rows=mysqli_fetch_assoc($result))
                        {
                            $_SESSION['num_passager']=$rows['num_passager'];      
                        }
                        $num_passager= $_SESSION['num_passager'];
                                      


                        $sql="INSERT INTO enregistrement( num_bagage,num_service,date_enregistrement,montant,num_passager,type,num_carte) VALUES ('".$Bagage."','".$Repas."','".date("Y-m-d H:i:s")."','".$montant."','".$num_passager."','".$aller_retour."','"
                        .$Numero_carte."')";
                        mysqli_query($conn,$sql);




                        $select_enregistrement= "SELECT num_enreg,date_enregistrement,montant 
                        FROM enregistrement 
                        WHERE num_enreg = (SELECT MAX(num_enreg) FROM enregistrement)";

                        $con = mysqli_query($conn, $select_enregistrement);

                        while ($row =mysqli_fetch_assoc($con))
                        {
                            $num_enreg = $row['num_enreg'];
                            $date_enregistrement = $row['date_enregistrement'];
                            $montant = $row['montant'];


                            $facture = "INSERT INTO facture_enregistrement(nom_comp,num_enregi,date_fac_enregi,sous_tot_enregi,etat_facture) 
                            VALUES ('golden Eagle','$num_enreg','$date_enregistrement','$montant','paye')";
                            $query = $conn->query($facture);
                        }





                        header("Location: Carte_Embarquement.php");
                        //ob_enf_flush();
             
                    }    
                }else{
                    echo "<script type='text/javascript'>
                                alert('les champs sont incoorect');
                                document.location.href = 'paiement-enregistrement.php';
                            </script>";
                }
                              
            }else{
                echo "<script type='text/javascript'>
                                alert('les champs sont vide');
                                document.location.href = 'paiement-enregistrement.php';
                            </script>";
            }     
        }else{
           echo"<script type='text/javascript'>alert('veuillez remplir tous les champs svp')</script>"; 
        }                
    }
}    
?>
