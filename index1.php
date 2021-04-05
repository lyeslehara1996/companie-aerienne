<?php
session_start();

$eco_status = 'unchecked';
$aff_status = 'unchecked';
$aller_status = 'unchecked';
$simple_status = 'unchecked';

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" 
     type="image/png" 
     href="img/dessinFINAL.png">
     



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet"  href="css/compte.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/tabed.css">
    <link rel="stylesheet" href="css/d-flexs.css">
    <link rel="stylesheet" type="text/css" href="css/loading.css">


    <!-- Lightpick CSS -->
    <link rel="stylesheet" href="css/lightpick.css">
    <link rel="stylesheet" href="css/btn_count.css">
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <title>GOLDEN EAGLE</title>
    <style>
    .row{
    margin-left: 0;
    margin-right: 0;
    }
    </style>
<style type="text/css">

.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important;
  color: #ffffff;
}
</style>



  </head>

  <body >
   <div class="ring">
    loading
    <span class="loa"><img src="img/dessinFINAL.png" style="width: 60px"></span>
  </div>
      <!-- le menu-->
      <header>
	 <?php include "navigation.php";?>
      <nav class="navbar navbar-expand-md  navbar2 " >

        <div class="container ">

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span><img style="height:30px" src="img/Menu1.png"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav" style="justify-content: center">
            <ul class="navbar-nav " >
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="index.php">Accueil</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="list_destination.php">Destinations</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link   mr-5 hv" href="list_offr.php">Promotions</a>
              </li>

              <li class="nav-item dropdown  ">
                <a href="#" class="nav-link hv dropdown-toggle " data-toggle="dropdown">Informations Voyages</a>
                <div class="dropdown-menu  " style="background: #365390;border: none" >
                  <ul class="list-unstyled " >
                    <li><a href="DocumentsVoyage.php" class="dropdown-item hvlist">Documents de voyage</a></li>
                    <li><a href="BagagesF.php" class="dropdown-item hvlist">Bagages</a></li>
                    <li><a href="Aide.php" class="dropdown-item hvlist">Aide</a></li>
                    <li><a href="contacter.php" class="dropdown-item hvlist">Page de Contact</a></li>

                  </ul>
                </div>
              </li>


              <li class="nav-item dropdown  ">
                <a href="#" class="nav-link hv dropdown-toggle " data-toggle="dropdown">Langue</a>
                <div class="dropdown-menu  " style="background: #365390;border: none" >
                  <ul class="list-unstyled " >
                    <li><a href="#googtrans(fr|en)" class="lang-en lang-select dropdown-item hvlist" data-lang="en">
          <img src="img/usa.png" alt="USA" class="drapo">
        </a></li>
                    <li><a href="#googtrans(en|es)" class="lang-es lang-select dropdown-item hvlist" data-lang="es">
          <img src="img/spain.png" alt="MEXICO" class="drapo">
        </a></li>
                    <li> <a href="#googtrans(fr|fr)" class="lang-es lang-select dropdown-item hvlist" data-lang="fr">
          <img src="img/france.png" alt="FRANCE" class="drapo">
        </a></li>
                    <li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select dropdown-item hvlist" data-lang="zh-CN">
          <img src="img/china.png" alt="CHINA" class="drapo"></a></li>
                    <li>
        <a href="#googtrans(en|ja)" class="lang-es lang-select dropdown-item hvlist" data-lang="ja">
          <img src="img/japan.png" alt="JAPAN" class="drapo"></a></li>
                    <li><a href="#googtrans(en|ar)" class="lang-es lang-select dropdown-item hvlist" data-lang="ja">
          <img src="img/saudi_arabia.png" alt="saudi_arabia" class="drapo"></a>  </li> 
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>

    </header>



    <!--Content-->
    <div class="">
      <!--slider-->
      <div style="width:100%;">
        <div class="slider"></div>
      </div>
    </div>
    <!--card a menu (reserver mes vols enregestrement)-->





    <div class=" mx-auto col-11 col-sm-11 col-md-10 col-lg-10 col-xl-10 tabed  pr-0 pl-0 pt-5 " >
      <div class=" pos col-12 col-sm-12 col-md-12 col-lg-12 p-0" >
        <div class=" pan mx-auto col-12 col-sm-12 col-md-12 col-lg-12  ">
          <button id="res" type="button" class="bt btn col-12 col-sm-4 col-md-4 btbgactive">Réserver</button>
          <!-- pan 1-->

          <div id="pres"class=" pan1 pan col-12 col-lg-12 col-sm-12 col-md-12 tes mt-4">
            <div class="row   tab col-12 col-sm-12 col-lg-12 col xl-12 p-0">



            <form  action="allerRetour.php" method="post" id="form_register" class="row col-12 col-sm-12 col-lg-12 col xl-12  p-0">

            
                <div class="row col-12 col-sm-12 col-lg-12 col xl-12 p-0">
                  <div class="form-group col-12 col-lg-9 col-md-9 col-sm-12  p-0 mb-0 ">
                    <div class="row col-12 col-sm-12 col-md-12 col-lg-12 ">
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-0">
                        <div class="input-group col-12 col-sm-12 col-lg-12 p-2" >
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0 depar">
                              <i class="fas fa-plane-departure text-muted"></i>
                            </span>
                          </div>
                          <input id="depart" type="text" name="depart" placeholder="Départ" class="form-control bg-white border-left-0 border-md"required>

                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-0" >
                      
                        <div class="input-group col-lg-12  p-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0 destin">
                              <i class="fas fa-plane-arrival text-muted"></i>
                            </span>
                          </div>
                          <input id="destination" type="text" name="destination" placeholder="Destination" class="form-control bg-white border-left-0 border-md" >

                        </div>
                      </div>
                    </div>
                    <div class="form-group row col-12 col-sm-12 col-md-12 col-lg-12 p-0">
                        <div class="row row col-12 col-sm-12 col-md-12 col-lg-12 ">

                          <div class="input-group col-12 col-sm-6 col-lg-6   p-2">
                          
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-white px-4 border-md border-right-0 demo">
                                <i class="far fa-calendar-alt text-muted"></i>
                              </span>
                            </div>
                            <input type="text" id="demo-11_1"  name="demo1" class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="Date départ " >
                            <br>
                          </div>
                          <div class="input-group col-12 col-sm-6 col-lg-6  p-2" id="cacher">

                            <div class="input-group-prepend">
                           
                            
                              <span class="input-group-text bg-white px-4 border-md border-right-0 demmo2">
                                <i class="far fa-calendar-alt text-muted"></i>
                              </span>
                            </div>
                            <input type="text" id="demo-11_2" name="demo2"  class="form-control form-control-sm bg-white border-left-0 border-md" placeholder="Date retour" >

                            

                          </div>


                      </div>
                         <div class="col-12 text-center" >
                              <small id="output_depart"></small>
                              <small id="output_destination"></small>
                              <small id="output_demo1"></small>
                               <small id="output_demo2"></small>
                            </div>

                    </div>
                            

                  </div>


                  <div class=" row col-12 col-lg-3 col-md-3 col-sm-12  d-md-inline  ">

                    <div class="row  ">
                      <div >
                        <!-- Default unchecked abled -->
                        <div class="custom-control custom-radio mr-2">
                          <input type="radio" class=" custom-control-input" id="testpp1" onclick="testpp()"   value="retour" name="alerretour" <?=$aller_status;?> checked >
                          <label class="custom-control-label hvc" for="testpp1">Aller-retour</label>
                        </div>
                        <!-- Default checked disabled -->
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="testpp" onclick="testpp()" value="simple" name="alerretour" <?=$simple_status?>  >
                          <label class="custom-control-label hvc" for="testpp">Aller simple</label>
                        </div>


                      </div>


                    </div>
                    <br>
                    <div class="form-group " >
                      <div class="row ">

                        <div class="d-block">
                          <!-- Default checked disabled -->
                          <div class="custom-control custom-radio mr-2">
                            <input type="radio" class="custom-control-input" id="defaultCheckedDisabled2" value ="eco" name="disabledGroupExample" <?PHP print $eco_status;?> checked >
                            <label class="custom-control-label hvc" for="defaultCheckedDisabled2">Economique</label>
                          </div>
                          <!-- Default unchecked disabled -->
                          <div class="custom-control custom-radio ">
                            <input type="radio" class=" custom-control-input" id="defaultUncheckedDisabled2" value ="affaire" name="disabledGroupExample"  <?PHP print $aff_status;?> >
                            <label class="custom-control-label hvc" for="defaultUncheckedDisabled2">Affaire</label>
                          </div>

                        </div>
                      </div>

                    </div>
                    <div class="row p-0">
                      <div class=" d-sm-inline col-md-12 col-sm-6 col-lg-12 col-6 p-0">
                        <div class="form-group col-lg-4 p-0">
                          <div class=" col-lg-12 p-0">
                            <div class="form-group">
                              <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle p-1" type="button" data-toggle="dropdown" style="width: 110px;">
                                Passagers
                                </button>
                                <div class="dropdown-menu px-3">
                                  <table >

                                    <tr><td><label>Adulte</label></td>
                                    <td><div class="quantity buttons_added ">

                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="Adulte" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                    </div></td></tr>

                                    <tr><td><label>Enfant</label></td>
                                    <td><div class="quantity buttons_added ">

                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="0" max="" name="Enfant" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                    </div></td></tr>

                                    <tr> <td><label>Bébé</label></td>
                                    <td><div class="quantity buttons_added ">

                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="0" max="" name="bebe" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                    </div></td></tr>
                                  </table>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                  </div>
                </div>

                <div class="row col-12" >

                  <div class="row col-12 col-12 col-md-12 col-lg-12 col-xl-12 mb-2 ">

                    <button type="submit" onclick="tt();" style="margin: 5px auto;width: 250px; margin-bottom : 60px;"class="btn btn-primary btncard btn-block test1 btn-voirplus d-block py-2 mx-auto">Rechercher<i class=' ml-1 fas fa-search'></i></button>
                  </div>

                </div>

              </div>
            </div>
          </form>


          <button id="ma" type="button" class=" bt btn  col-12 col-sm-4 col-md-4" onclick="mareservation()" >Ma réservation</button>


          <!-- pan 2-->
          <div id="pma"class="pan2 pan col-12 col-12 col-sm-12 col-md-12 tes" style="display: none;">
            <!-- formulaire -->
            <div class="form mx-auto col-12 col-sm-10 col-md-8 mt-5">
              <form action="billet1.php" method="post" class="needs-validation formulaire" >
                <div class="form-group col-12 ">
                 
                  <div class="input-group col-12 mb-4 p-2 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="far fa-clipboard text-muted"></i>
                      </span>
                    </div>
                    <input id="reference" type="text" name="reference" placeholder="Référence" class="reference form-control bg-white border-left-0 border-md" required>

                  </div>
                  <div class="erreurref" id="erreurref"></div>
                   <div class="input-group col-12  mb-2 p-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                      </span>
                    </div>
                    <input id="nom" type="text" name="nom1" placeholder="Nom" class=" nom form-control bg-white border-left-0 border-md"required>

                  </div>
                  <div class="erreurnom" id="erreurnom"></div>
                </div>


                <button type="submit" name="valider" id="valider" class="btn btn-primary btn-block py-2 mt-5 mb-5 btncard">
                  <span class=" ">Consulter <i class=" ml-1 far fa-bell"></i></span>
                </button>

              </form>

            </div>
          </div>
          <button id="en" type="button" class=" bt btn  col-12 col-sm-4 col-md-4">Enregistrement</button>
          <div id="pen"class="pan col-12 col-sm-12 col-md-12 " style="display: none;">            
            <div class="form-group mx-auto mt-5">


<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->

<form  action="repas.php" method="POST">
  <div class="form-group">
    <div class="ml-5 mb-2 ">

      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="vol1" name="vol" checked ="" value="Aller">
        <label class="custom-control-label" for="vol1">Vol Aller</label>
      </div>

      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="vol2" name="vol" value="Retour">
        <label class="custom-control-label" for="vol2" >Vol Retour</label>
      </div>
    </div>
  </div>

  <div class="form-group col-12 ">
    <div class="input-group col-12  mb-2 p-2">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white px-4 border-md border-right-0">
          <i class="fa fa-user text-muted"></i>
        </span>
      </div>
      <input id="nomenr" type="text" name="nom_Passager" placeholder="* Nom" class="form-control bg-white border-left-0 border-md"required>
    </div>

    <div class="input-group col-12 mb-4 p-2">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white px-4 border-md border-right-0">
          <i class="far fa-clipboard text-muted"></i>
        </span>
      </div>
      <input id="rbei" type="text" name="num_Reservation" placeholder="* Reference billet" class="form-control bg-white border-left-0 border-md" required>
    </div>
  </div>
             
  <div class="form-group  col-lg-12 mx-auto mt-2 ">
    <input type="submit" name="valider" class="btn btn-primary btn-block py-2  btncard">
      
  </div>
  <p class="text-muted px-3 ">L'enregistrement se fait à partir de 24h à 4h avant le départ de votre vol.</p>
</form>
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
            </div>
          </div>
        </div>
      </div>

    </div>
  
    <!--le contenu _les cartes-->
    <section class="mb-5 col-lg-12" >

      <h1 class="titre mb-4 pt-5">Nos Meilleurs Offres et Promotions !</h1>
      <h4 class="sous-titre m text-muted ">Allez-y !Réservez et profitez maintenant
      <p class="  mb-5 mt-3 " style="color: #365390;font-size: 15px">Avant le 29 Janvier 2020</p></h4>
        <div class="row col-12  p-0 align-center" >

          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3 ">
            <div class="hover hover-4 text-white rounded"><img class="card_img " src="img/par.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-4-content">
                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"  ><span class="" class=""style="background: rgba(0,0,0,0.20);" >Paris  <br>17000 DZA</span>
                      <form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="paris">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger Paris</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:17000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>
   
          <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3 ">
            <div class="hover hover-4 text-white rounded"><img class="card_img " src="img/stockholm.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-4-content px-5 py-4">
                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"  ><span class="" class=""style="background: rgba(0,0,0,0.20);" >Stockholm <br>160000 DZA </span>
<form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="Stockholm">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger Stockholm</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:160000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>

           <div class=" col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3 ">
             <div class="hover hover-4 text-white rounded"><img class="card_img" src="img/hamburg.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-4-content  px-5 py-4">
                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"  ><span class=""style="background: rgba(0,0,0,0.20);" >hamburg  <br>33000 DZA</span>
<form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="hamburg">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger Hamburg</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:33000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3 ">
            <div class="hover hover-4 text-white rounded"><img class="card_img" src="img/beirut.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-4-content  px-5 py-4">
                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"  ><span class=""style="background: rgba(0,0,0,0.20);" >beirut  <br>23000 DZA</span>
<form method="POST" action="aller.php">

<input type="hidden" name="dep" value="alger">
<input type="hidden" name="arr" value="beirut">

<input type="hidden" name="madate" value="2020/01/29">

                </h3>
               <ul class="hover-4-description text-uppercase mb-0 small list-unstyled wrap d-block">
                <li>Alger Beirut</li>
                <li>2020/01/29 </li>
                <li>Economique</li>
                <li>Prix:23000dza</li>
          <li>
          <input type="submit" class="btn btn-sm btncard mt-3" name="reserver" value="Reserver !">
        </form>
            </li></ul>
              </div>
            </div>
          </div>



      </div>
       <a href="list_offr.php"  class=" mt-5 mb-5 btn btn-info btn-voirplus d-block" style="margin: 50px auto;padding: 10px 22px;max-width: 140px">Voir plus</a>
    </section>
    <section class="mb-5 col-lg-12" >
      <h1 class="titre mb-4 pt-5">Nos Destinations</h1>
      <h4 class="sous-titre text-muted">Découvrir nos destinations</h4>


      <div class="row col-12 col-lg-12 col-xl-12 mb-3 mr-5" >
        <div class="col-1 col-lg-1 col-xl-1 mb-3 mb-lg-0 mb-xl-0 "></div>

        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3 mb-lg-0 mb-xl-0 ">

          <a  href="stockholm.php">
            <div class="hover hover-5 text-white " ><img src="img/stockholm.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-5-content">
                <h3 class="hover-5-title text-uppercase font-weight-light mb-0"> <strong class="font-weight-bold text-white">stockholm </strong><span>Détails</span></h3>
              </div>
            </div>
          </a>
        </div>





        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 " >
          <a href="berlin.php">
            <div class="hover hover-5 text-white "><img src="img/be.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-5-content">
                <h3 class="hover-5-title text-uppercase font-weight-light mb-0"> <strong class="font-weight-bold text-white">Berlin </strong><span>Détails</span></h3>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-1 col-lg-3 col-xl-3 mb-3 mb-lg-0 mb-xl-0 "></div>



      <div class="row col-12 col-lg-12 col-xl-12">
        <div class="col-1 col-lg-1 col-xl-1 mb-3 mb-lg-0 mb-xl-0 "></div>
        <div class="col-12  col-md-5 col-lg-5 col-xl-5 mb-3 mb-lg-0 mb-xl-0">

          <a href="marrakesh.php">
            <div class="hover hover-5 text-white "><img src="img/marrakech.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-5-content">
                <h3 class="hover-5-title text-uppercase font-weight-light mb-0"><strong class="font-weight-bold text-white">marrakech </strong><span>Détails</span></h3>
              </div>
            </div>
          </a>
        </div>


        <div class="col-12  col-md-5 col-lg-5 col-xl-5">
          <a href="egypt.php">
            <div class="hover hover-5 text-white "><img src="img/egypt.jpg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-5-content">
                <h3 class="hover-5-title text-uppercase font-weight-light mb-0"><strong class="font-weight-bold text-white">egypt </strong><span>Détails</span></h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-1 col-lg-1 col-xl-1 mb-3 mb-lg-0 mb-xl-0 "></div>
      </div>

      <a href="list_destination.php"  class=" mt-5 mb-5 btn btn-info btn-voirplus d-block" style="margin: 50px auto;padding: 10px 22px;max-width: 140px">Voir plus</a>
    </section>
    <!-- Footer -->










<?php include "footers.php";?>
    <!-- Footer -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="js/lightpick.js"></script>
    <script type="text/javascript" src="control.js"></script>
    <script src="js/myScript.js"></script>
    <script src="js/compte.js"></script>
    <script src="js/date.js"></script>

    <script src="js/jquery.min.js"></script>
 
        <script type="text/javascript">
      window.addEventListener("load", function () {
    const ring = document.querySelector(".ring");
    ring.className += " hidden"; // class "loader hidden"
});
    </script>




       <script type="text/javascript">
    function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
    var c = jQuery(b);
    c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
    }
    String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
    b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
    }), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
    }), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
    }), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
    b = parseFloat(a.val()),
    c = parseFloat(a.attr("max")),
    d = parseFloat(a.attr("min")),
    e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
    });
    </script>



    <script>
    $(function () {
    $('input, select').on('focus', function () {
    $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
    });
    $('input, select').on('blur', function () {
    $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
    });
    });
    </script>
    <script>
    $(document).ready(function(){
    $("#res").click(function(){
    $("#pres").show();
    $("#pma").hide();
    $("#pen").hide();
    });
    $("#ma").click(function(){
    $("#pma").show();
    $("#pres").hide();
    $("#pen").hide();
    });
    $("#en").click(function(){
    $("#pen").show();
    $("#pres").hide();
    $("#pma").hide();
    });
    /*  buton test calendrier */
    $("#testpp").click(function(){
    $("#cacher").hide();
    });
    $("#testpp1").click(function(){
    $("#cacher").show();
    });
    });
    </script>

<!-- ecran large-->
<script>
    $(document).ready(function(){
    $("#res").click(function(){
    $("#res").addClass("btbgactive");
    $("#ma").removeClass("btbgactive");
    $("#en").removeClass("btbgactive");
    $("#pres").show();
    $("#pma").hide();
    $("#pen").hide();
    });
    $("#ma").click(function(){
    $("#ma").addClass("btbgactive");
    $("#res").removeClass("btbgactive");
    $("#en").removeClass("btbgactive");
    $("#pma").show();
    $("#pres").hide();
    $("#pen").hide();
    });
    $("#en").click(function(){
    $("#en").addClass("btbgactive");
    $("#res").removeClass("btbgactive");
    $("#ma").removeClass("btbgactive");
    $("#pen").show();
    $("#pres").hide();
    $("#pma").hide();
    });
    });
    </script>
    <!--ecran mobile-->
    <script>
    $(document).ready(function(){
    $("#res").click(function(){
    $("#res").addClass("btbgactivemobile");
    $("#ma").removeClass("btbgactivemobile");
    $("#en").removeClass("btbgactivemobile");
    $("#pres").show();
    $("#pma").hide();
    $("#pen").hide();
    });
    $("#ma").click(function(){
    $("#ma").addClass("btbgactivemobile");
    $("#res").removeClass("btbgactivemobile");
    $("#en").removeClass("btbgactivemobile");
    $("#pma").show();
    $("#pres").hide();
    $("#pen").hide();
    });
    $("#en").click(function(){
    $("#en").addClass("btbgactivemobile");
    $("#res").removeClass("btbgactivemobile");
    $("#ma").removeClass("btbgactivemobile");
    $("#pen").show();
    $("#pres").hide();
    $("#pma").hide();
    });
    });
    </script>


<script>
        $(function() {
            $('input, select').on('focus', function() {
                $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
            });
            $('input, select').on('blur', function() {
                $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
            });
        });
    </script>


  <!-- date-->

    <script>


    var a = new Lightpick({
    field: document.getElementById('demo-11_1'),
    repick: false,
    minDate : moment(),
    });

    var b = new Lightpick({
   	field: document.getElementById('demo-11_2'),
    repick: false,
    minDate : moment(),
    });
    </script>


    <script>
    function mareservation(){
      $.ajax({url:"billet.php"});
    }
    </script>



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
  
    </body>
</html>