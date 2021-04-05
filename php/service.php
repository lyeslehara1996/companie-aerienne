<?php  
  if ($conn)
    {
        if (isset($_POST['continuer']))
        {
          if((isset($_POST['emotion1']))&&(isset($_POST['emotion2'])))
          {
              if($_POST['emotion1']==0)  {$repas='plat-de-jours';}
              if($_POST['emotion1']==400){$repas='vegan';}
              if($_POST['emotion1']==500){$repas='sans-gluten';}
              if($_POST['emotion1']==600){$repas='vegetarien';}
              if($_POST['emotion1']==800){$repas='Hypocalorique';}
              if($_POST['emotion1']==450){$repas='sans-sel';}
             

              if($_POST['emotion2']==0) {$boisson='Nos-offres';}
              if($_POST['emotion2']==60){$boisson='jus-de-fruits';}
              if($_POST['emotion2']==50){$boisson='jus-de-legumes';}
              if($_POST['emotion2']==55){$boisson='Infusion';}
              if($_POST['emotion2']==65){$boisson='Lemonade';}
              if($_POST['emotion2']==40){$boisson='Nectar-de-fruits';}
              

              $prix=$_POST['Total'];

              $sql1 = "INSERT INTO service (repas,boisson,prix) VALUES ('".$repas."','".$boisson."','".$prix."')";
              mysqli_query($conn, $sql1);
              header("Location: bagages.php");
              //ob_end_flush();
              
          }else{
              header("Location: repas.php");
          }    
        }
    }
    else
    {
      echo "error";
    }
    mysqli_close($conn);
?>