<?php  
  ob_start();
?>
<?php 
  session_start();
?>
<?php    
  require('php/connextion.php');
?>
<?php
  if ($conn)
    {
        if (isset($_POST['valider']))
        {
          if((isset($_POST['nom_Passager']))&&(isset($_POST['num_Reservation']))&&(isset($_POST['vol'])))
          {
           
            $type_vol ='SELECT e.type FROM passager p,enregistrement e 
            WHERE 
            p.num_res="'.$_POST['num_Reservation'].'" 
            and p.nom="'.$_POST['nom_Passager'].'" 
            and e.num_passager=p.num_passager ';
            
            $req = mysqli_query($conn,$type_vol);
            while($rows=mysqli_fetch_assoc($req)>0)
            {
              $vol=$_POST['vol'];                 
              $_SESSION['type']=$vol;
              $vvv=$_SESSION['type'];
            }
             
            $num_passager='SELECT p.num_passager from enregistrement e ,passager p WHERE p.num_passager=e.num_passager and e.type="'.$vvv.'" and p.nom="'.$_POST['nom_Passager'].'" ';                                    
            $result = mysqli_query($conn,$num_passager);
            
            if (mysqli_fetch_assoc($result))
            {
              echo "<script type='text/javascript'>
                      alert('Vous avez déjà fait un enregistrement pour ce vol');
                      document.location.href = 'index.php';
                    </script>";
            }else
            {  
                  $sql ='SELECT * FROM passager WHERE num_res="'.$_POST['num_Reservation'].'" 
                          and nom="'.$_POST['nom_Passager'].'" ';
                  $req = mysqli_query($conn,$sql);
                  if($rows=mysqli_fetch_assoc($req)>0)
                  {
                    $num_Reservation=$_POST['num_Reservation'];
                    $nom_Passager=$_POST['nom_Passager'];
                    $vol=$_POST['vol'];
                    $_SESSION['num_Reservation']=$num_Reservation;
                    $_SESSION['nom_Passager']=$nom_Passager;
                    $_SESSION['vol']=$vol; 
                    header("Location: repas.php"); 
                  }else
                  {
                    echo "<script type='text/javascript'>
                      alert('le numéro de réservation est incorrect');
                      document.location.href = 'index.php';
                    </script>";
                    
                  }
              }
          }
        }            
    }
  else
  {
      echo "error";
  }
?>
<?php    
  require('php/service.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link   href="img/dessinFINAL.png"/>
    	       <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
    <link rel="stylesheet" type="text/css" href="css/loading.css">
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
    <!-- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="css/compte.css">
    <link rel="stylesheet" href="css/bagages.css">
    <link rel="stylesheet" href="css/guide.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

		<title>repas_aller</title>

</head>
<body>
  <div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>
	<style>
    .row-hl
    {
      background: #f4f4f4;
    }
    .item-hl
    {
      border: 1px solid #333;
    }
    .input-hidden
    {
      position: absolute;
      margin-right:20px;
      left: -9999px;
    }
    input[type=radio]:checked + label>img
    {
      border:none;
      box-shadow: 0 0 5px 5px #f9a602;
      width: 260px;
      height: 190px;
    }
    /* Stuff after this is only to make things more pretty */
    input[type=radio] + label>img
    {
      border: ridge #365390;
      width: 250px;
      height: 180px;
      transition: 500ms all;
    }
    img:hover
    {
    	cursor: pointer;
    }
    input[type=radio]:checked + label>img
    {
      transform: 
        rotateZ(0deg) 
        rotateX(10deg);
    }
    .breadcrumb {

    /*centering*/
    width: 100%;
    display: inline-block;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.35);
    overflow: hidden;
    border-radius: 5px;
    height: 100px;
    /*Lets add the numbers for each link using CSS counters. flag is the name of the counter. to be defined using counter-reset in the parent element of the links*/
    counter-reset: flag; 
}

.breadcrumb a {
    text-decoration: none;
    outline: none;


    display: block;
    float: left;
    font-size: 14px;
    line-height: 36px;
    color: white;
  
    padding: 15px 50px 15px 40px;
    background: #365390;
   
    position: relative;
}

.breadcrumb a.active{
    background: #f9a602;
    cursor: auto;
    color: white;
    font-weight: 700;
    color:  #365390;;

}
.breadcrumb a.active:after {
    background: #f9a602;
     box-shadow: 
        2px -2px 0 2px rgba(0, 0, 0, 0.1), 
        3px -3px 0 2px rgba(255, 255, 255, 0.1);

    border-radius: 0 5px 0 50px;


}


.breadcrumb a:after {
    content: '';
    position: absolute;
    top: 0; 
    right: -32px; 
    width: 69px; 
    height: 67px;
 
    transform: scale(0.680) rotate(45deg);

    z-index: 1;
 
    background: #365390;
  

    box-shadow: 
        2px -2px 0 2px rgba(0, 0, 0, 0.1), 
        3px -3px 0 2px white;

    border-radius: 0 5px 0 50px;
}

.breadcrumb a:last-child:after {
    content: none;
}
</style>

      <!--le premier meneu header-->
      <?php include "navigation.php";?>
<!--page en cours-->
<div class="breadcrumb text-center text-white d-inline d-sm-none ">

        <a href="#" class=" col-12 active mb-5" style="margin-top: -10px" >Repas</a>

</div>

<div class="breadcrumb text-center d-none d-sm-block">
    <a href="#" class=" col-3 active">Repas</a>
    <a href="#" class="col-3 " >Bagages</a>
    <a href="#" class=" col-3 ">Siège</a>
        <a href="#" class=" col-3 ">Paiement</a>

</div>











<!--serviceserviceserviceserviceserviceserviceserviceserviceserviceserviceserviceserviceservice-->

<!--repaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa cooooooooooooooooooooooooooooooooooorps-->
<form action="repas.php" name="repas_boisson"  method="post">
  <div class="container">
    <div class="card">
      <div class="card-header" style="background-color:#365390">
        <h5><p style="color:white"><i class='fas fa-utensils' style='font-size:30px;padding-right:10px;color:white'></i>Choisissez votre repas à bord</p></h5>
      </div>
      <div class="card-body">
        <p style="font-family:italic;font-size:20px"><blockquote class="blockquote">Notre compagnie mets à votre disposition un repas gratuit disponible pour tous, cela dit un certain nombre de repas payant s'offre à vous, merci de choisir votre repas en cliquant ci-dessous !</p></div>
        <div class="card-deck">
          <div class="card bg-primary">
            <div class="card-body text-center">
              <p class="card-text">
                <input 
                  type="radio" name="emotion1" 
                  id="sad" class="input-hidden" onclick="pris(repas_boisson)" value="0" checked/>
                <label for="sad">
                  <img class="rounded"
                    src="img/repas/1.jpg" 
                    alt="plat du jour" />
                  <h3 class="display-6" style="color:green;margin-bottom:0rem">Plat du jour</h3>
                  <h3 Style="color:green">gratuit</p>
                </label></p>
            </div>
          </div>

          <div class="card bg-warning">
            <div class="card-body text-center">
              <p class="card-text">
              <input 
                type="radio" name="emotion1"
                id="happy" class="input-hidden" onclick="pris(repas_boisson)" value="1400"/>
                <label for="happy">
                  <img class="rounded" 
                      src="img/repas/5.jpg" 
                      alt="végan" />
  	              <h3 class="display-6" style="margin-bottom:0rem;color:#000">Végétalien</h3>
                  <h3>1400 DA</h3>
                </label></p>
            </div>
          </div>
  
          <div class="card bg-success">
            <div class="card-body text-center">
              <p class="card-text">
                <input 
                  type="radio" name="emotion1" 
                  id="mdr" class="input-hidden" onclick="pris(repas_boisson)" value="2000"/>
                  <label for="mdr">
                    <img class="rounded" 
                      src="img/repas/3.jpg" 
                      alt="Sans gluten" />
	                  <h3 style="margin-bottom:0rem" >Sans gluten</h3>
                    <h3>2000 DA</h3>
                  </label></p>
            </div>
          </div>
        </div>

        <div class="card-deck">
          <div class="card bg">
            <div class="card-body text-center">
              <p class="card-text">
	            <input 
                type="radio" name="emotion1" 
                id="lol" class="input-hidden" onclick="pris(repas_boisson)" value="1600"/>
                <label for="lol">
                  <img class="rounded" 
                    src="img/repas/4.jpg" 
                    alt="Végétarien"/>
	                <h3 style="margin-bottom:0rem">Végétarien</h3>
                  <h3>1600 DA</h3>
              </label></p>
            </div>
          </div>

          <div class="card bg-danger">
            <div class="card-body text-center">
              <p class="card-text">
	            <input 
                type="radio" name="emotion1" 
                id="a" class="input-hidden"  onclick="pris(repas_boisson)" value="1800"/>
              <label for="a">
                <img class="rounded" 
                  src="img/repas/2.jpg" 
                  alt="Hypocalorique" />
	              <h3 style="margin-bottom:0rem">Hypocalorique</h3>
                <h3>1800 DA</h3>
              </label></p>
            </div>
          </div>

          <div class="card bg-danger">
            <div class="card-body text-center">
              <p class="card-text">
                <input 
                  type="radio" name="emotion1"
                  id="b" class="input-hidden"  onclick="pris(repas_boisson)" value="1500"/>
              <label for="b">
                <img class="rounded"
                  src="img/repas/6.jpg" 
                  alt="sans sel"/>
	              <h3 style="margin-bottom:0rem" >Sans lactose</h3>
                <h3>1500 DA</h3>
              </label></p>
            </div>
          </div> 
        </div>

        <div class="card-footer">
          <div class="row" style="background-color:#DCDCDC;padding-top:20px;padding-bottom:15px;">
            <div class="col-sm-8">
              <p class="text-right" style="font-size:19px;color:#365390">Le montant de cette opération : <input type="text" id="P_repas" name="P_repas" value="0"> DZD</p>
            </div>
          </div>
        </div>
<!---BOISOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO--> 
  <div class="card">
        <div class="card-header"  style="background-color:#365390">
          <h4 id="mon_oncre"><p style="color:white"><i class='fas fa-glass-martini-alt' style='font-size:30px;padding-right:10px;color:white'></i>Choisissez votre boisson à bord</p></h4>
        </div>
        <div class="card-body"> 
          <div class="card-deck">
            <div class="card bg-primary">
              <div class="card-body text-center">
                <p class="card-text">
    	          <input 
                  type="radio" name="emotion2" 
                  id="00" class="input-hidden" onclick="pris(repas_boisson)" value="0" checked/>
                  <label for="00" >
                    <img class="rounded"
                      src="img/repas/gratos.jpg" 
                      alt="offres gratuites"/>
      	            <h3 style="color:green;margin-bottom:0rem">Nos offres</h3>
                    <h3 style="color:green">Gratuit</h3>
                  </label></p>
              </div>
            </div>

            <div class="card bg-warning">
              <div class="card-body text-center">
                <p class="card-text">	
                  <input 
                    type="radio" name="emotion2"
                    id="11" class="input-hidden"  onclick="pris(repas_boisson)" value="300"/>
                    <label for="11">
                      <img 
                        src="img/repas/44.jpg" 
                        alt="jus de fruits" />
      	              <h3 style="margin-bottom:0rem" >Jus de fruits</h3>
                      <h3>300 DA</h3>
                    </label>
                </p>
              </div>
            </div>
      
            <div class="card bg-success">
              <div class="card-body text-center">
                <p class="card-text">
      	          <input 
                    type="radio" name="emotion2" 
                    id="22" class="input-hidden"  onclick="pris(repas_boisson)" value="200"/>
                    <label for="22">
                      <img class="rounded" 
                        src="img/repas/legumes.jpg" 
                        alt="jus de légumes" />
      	              <h3 style="margin-bottom:0rem">Jus de légumes</h3>
                      <h3>200 DA</h3>
                    </label>
    	          </p>
              </div>
            </div>
          </div>
        </div>
      
        <div class="card-deck">
          <div class="card bg-danger">
            <div class="card-body text-center">
              <p class="card-text">
      	        <input 
                  type="radio" name="emotion2" 
                  id="33" class="input-hidden" onclick="pris(repas_boisson)" value="250"/>
                  <label for="33">
                    <img class="rounded"
                      src="img/repas/55.jpg" 
                      alt="Limonades" />
                  	<h3 style="margin-bottom:0rem">Limonade</h3>
                    <h3>250 DA</h3>
                  </label>
              </p>
            </div>
          </div>

          <div class="card bg-danger">
            <div class="card-body text-center">
              <p class="card-text">
      	        <input 
                  type="radio" name="emotion2" 
                  id="44" class="input-hidden" onclick="pris(repas_boisson)" value="100"/>
                  <label for="44">
                    <img class="rounded"
                      src="img/repas/66.jpg" 
                      alt="Infusion" />
                    	<h3 style="margin-bottom:0rem">Infusion</h3>
                      <h3>100 DA</h3>
                  </label>
              </p>
            </div>
          </div>

          <div class="card bg-danger">
            <div class="card-body text-center">
              <p class="card-text">
      	        <input 
                  type="radio" name="emotion2"
                  id="55" class="input-hidden" onclick="pris(repas_boisson)" value="600"/>
                  <label for="55">
                    <img class="rounded"
                      src="img/repas/77.jpg" 
                      alt="Nectar de fruits" />
                  	<h3 style="margin-bottom:0rem">Nectar de fruits</h3>
                    <h3>600 DA</h3>
                  </label>
    	       </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-3" style="background-color:#DCDCDC;padding-top:20px;padding-bottom:15px;">
        <div class="col-sm-8">
          <p class="text-right" style="font-size:19px;color:#365390">Le montant de cette opération : 
            <input type="text" id="P_boisson" name="P_boisson" value="0"> DZD
          </p>
        </div>
        <div class="col-sm-4">
          <!--<button type="submit" class="btn btn-primary continuer1 mr-5 ml-5"  name="servi"><a style="text-decoration:none;color:white">Valider</a></button>--> 
        </div>
      </div>
        </div> 
        </div>
        <!---Montant tooooooooooooooooooooooooooooooooooootal-->
        <div class="row  salaire">
          <div class="col-md-8 col-12">
             <h3 class=" ml-5 mr-4">Montant total des opérations: 
              <input type="text" id="Total" name="Total" value="0"> DZD</h3>
          </div> 
          <div class="col-md-4 col-12 mt-4">
            <button type="submit" class="btn btn-primary float-right continuer mr-5" name="continuer">Continuer</button> 
          </div> 
        </div>
</form> 
        </div>
        </div>
        </div>
        </div> 
        </div>
<script type="text/javascript">
            function pris(repas_boisson)
            {
              var checkRadio1 = document.querySelector
              ( 
                'input[name="emotion1"]:checked'); 
                var checkRadio2 = document.querySelector( 
                'input[name="emotion2"]:checked'); 
                if(checkRadio1 != null)
                { 
                  document.getElementById("P_repas").value = checkRadio1.value ; 
                } 
                if(checkRadio2 != null)
                { 
                  document.getElementById("P_boisson").value = checkRadio2.value ; 
                } 
                  document.getElementById("Total").value = Number(checkRadio1.value) + Number(checkRadio2.value);    
            } 
</script>
<style>
  input[type=text] 
  {
    width: 70px;
    height: 35px;
    padding: 0;
    font-family: Lato;
    font-weight: 700;
    font-size: 1.2em;
    text-transform: uppercase;
    text-align: center;
    color:#365390;
    border: 2px transparent solid;
    background: none;
    outline: none;
    pointer-events: none;
    background-color: transparent;
  }
 input[type=text]::-webkit-inner-spin-button, input[type=text]::-webkit-outer-spin-button
 {
    -webkit-appearance: none;
  }
</style>

<!--serviceserviceserviceserviceserviceserviceserviceserviceserviceserviceserviceserviceservice-->























     
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


   <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>


</body>
</html>
<?php  
ob_end_flush();
?>
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

  function triggerHtmlEvent(element, eventName) {
    var event;
    if (document.createEvent) {
    event = document.createEvent('HTMLEvents');
    event.initEvent(eventName, true, true);
    element.dispatchEvent(event);
    } else {
    event = document.createEventObject();
    event.eventType = eventName;
    element.fireEvent('on' + event.eventType, event);
    }
  }

  jQuery('.lang-select').click(function() {
    var theLang = jQuery(this).attr('data-lang');
    jQuery('.goog-te-combo').val(theLang);

    //alert(jQuery(this).attr('href'));
    window.location = jQuery(this).attr('href');
    location.reload();

  });
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style type="text/css">
  .drapo{
    width: 30px;
    height: 30px;
    border-radius: 2px;
  }

</style>
<script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "0stLrpqg"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>
