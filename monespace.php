<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Aghiles AZZOUG"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Page de présentation du Festival"/>
        <meta name="keywords" content="Association pour la Promotion du Jeux-Vidéo Festival Jeux-vidéos au Zénith d'Eckbolsheim"/>
        <link rel="icon" type="image/jpg" href="assets/images/logo/logo.png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"> <!-- utilsation de BULMAc'est comme bootstrap afin de mieux designer bloc de sprojets et éviter de trop écrire du css-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto&display=swap" rel="stylesheet"> 
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link href="assets/css/bulma/css/bulma.css" rel="stylesheet">
        <link href="assets/css/jeu.css" rel="stylesheet" type='text/css'>
        <link rel="icon" type="image/png" href="assets/images/logos/icon.png" /><!--  <link rel="shortcut icon" href="ici le nom de ton favicon.ico">  le favicon en utilisant un mime vu que j'ai pas de serveur pour stoquer immage.ico-->
    
    </head>
   
    <body > 
      <nav class="navbar is-danger is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="index.php">
            <img src="assets/images/logos/home.png" href="index.php" width="50" height="28">
            Accueil
          </a>

          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="index.php#asso">
            L'association
            </a>

            <a class="navbar-item" href="index.php#festival">
            Festival
            </a>
            
            <a class="navbar-item" href="formulaire.php">
              Livre d'or
            </a>

            <a class="navbar-item" href="#newsletter">
              S'abonner
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Nos jeux
              </a>

              <div class="navbar-dropdown">
                <a class="navbar-item" href="jeu.php">
                  Invaders ★★★
                </a>
                <a class="navbar-item" href="sims.php">
                  Sims Christmas ★☆☆
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Nos statistiques(pas-dispo)
                </a>
              </div>
            </div>
          </div>

          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a a class="button is-white is-outlined" href="accessibilite.php">
                   <span class="icon">
                      <i class="fa fa-wheelchair" aria-hidden="true"></i
                  </span>
                </a>
                    <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="https://bulma.io" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=https://bulma.io&amp;via=jgthms">
                  <span class="icon">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                  </span>
                  <span>
                    Billeterie
                  </span>
                </a>
                <a class="button is-info is-light" href="logout.php">
                  <span class="icon">
                   <i class="fa fa-leaf"></i>
                  </span>
                  <span>DeConnexion</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>


     <div class="container">
        <div class="notification">
               <!-- hEADER-->
              <!-- topbar-->
            <div id="haut">
                <div id="blocImage">
                  <div class="area">😈 APJV 😎</div>
                </div>
            </div>
             
           <!-- page à accès limité -->

           <?php function logged_only(){
              if(session_status() == PHP_SESSION_NONE){
                  session_start();
              }
              if(!isset($_SESSION['auth'])){
                  $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page";
                  header('Location: login.php');
                  exit();
              }
            }?>

                <!-- NOTIFICATION DE BIENVENU-->
                  <div class="columns">
                    <div class="column is-full" id="asso">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                           <article class="message is-danger">
                              <div class="message-body">
                              
                              bienvenu cher utilisateur! c'est votre <strong> espace persso , ici vous allez découvrir tout l'univers de notre invité d'honneur cette année , Aghiles AZZOUG , celui qui finance et couvre notre festival de jeu, car la nouveauté cette année c'est qu'il y a une expo du gaming-photo</strong> </p>
                              </div>
                           </article>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                  

                  <!-- quelques widjets insta et soundcloud et .... -->
                  <div class="columns" id="festival">
                    <div class="column is-full">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                            <div class="columns">
                              <div class="column">
                                  <article class="message is-danger">
                                    <div class="message-header">
                                      <p>l'invité d'honneur du festival</p>
                                    </div>
                                    <div class="message-body">
                                      <p><iframe frameborder="no" height="450" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/531629250&amp;color=%23d7a991&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true" width="100%"></iframe></p>
                                    </div>
                                    <p>Enregistrement avec les moyens du bord ; téléphone en plein air et des fois son de pluie, du vent .. avec deux guitares séches (marron et roses) et quelques petites notes que j'ai pu pianotées …sachez que les compositions étaient du pure feeling, aucune répétition,vu qu'aucune n'a été pensée, même si ça se remarque par le manque de sinchronisation dans certains passages, mais ça reste qu'il est pas mal cet Albume qui est mon premier, intitulé “Finestra del tram” joué avec mon ami Syphax, c'est convaincant pour un début et pour deux amaturs que nous sommes … J'ai pris vraiment du plaisir à le faire, j'espere que vous allez aimer aussi à votre tour de l'ecouter. bon écoute</p> <br>
                                    <p>-----------------------------</p> <br>
                                    <p>La galerie est enfin disponible… pour voir toutes mes photos retrouvez-moi sur mon compte instagram MR.photo_CLICK

                                      Il y a déja pas mal de photos à ma disposition, des endroits et villes, monuments que j'ai visités , des souvenirs ,des événements et des moments spéciaux durants les voyages et les rencontres que j'ai pu faire et que j'ai eu la chance d'immortalser grace à ce petit bijoux de la technologie… J'aime photographier beaucoup plus  l'architecture et surtout les vieilles batisses , pour l'intêret que je donne à l'histoire et au patrimoine culturel,  et vu que j'ai commencé à donner plus de considération au décor réel dans mon travail d'illustrateur (à voir dans les prochaines BD), ça me tente aussi la photo-reportage; le fait de garder l'authenticité des choses et de la vraie vie…c'est plus originale</p>
                                    </article>
                              </div>
                              <div class="column">
                                <p>
                                <!-- SnapWidget -->
                                <iframe src="https://snapwidget.com/embed/768330" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:525px; height:1225px"></iframe></p>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
             
                  
                 <!-- footer-->   
                  <footer class="footer">
                      <div class="container">
                        <div class="content has-text-centered">
                          <p>

                            <strong xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">APJV</strong> par <a xmlns:cc="http://creativecommons.org/ns#" href="http://bdcomics.art" property="cc:attributionName" rel="cc:attributionURL">Aghiles AZZOUG</a>. The source code is licensed <a href="http://unistra.fr">UNISTRA</a>.

                          </p>
                          <div id="social">
                            cet évenement est couvert par le photographe <a href="https://instagram.com/mr.photo_click" class="instagrame-follow-button" data-show-count="true" data-lang="en">@mr.photo_click</a>
                          </div>

                          <p>
                            si vous désirez voir le site de la ville de <strong>Strasbourg</strong>?
                            <br>

                            <a href="https://www.strasbourg.eu/">avec beaucoup d'infos &amp; évenements</a>.
                          </p>

                          <p>
                            Pour soutenir notre festival annuel sur les jeux-viédos <br>
                            lancé par l'équipe <a href="https://www.elmesmar.fr/">ELMESMAR</a>> :<br>
                             <strong>"vous pouvez faire un don en toute sécurité"</strong>?
                          </p>

                          <form >
                            <a href="https://www.paypal.me/elmesmar" target="_blank" rel="nofollow"><img src= "https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="" /></a>
                          </form>
                        </div>
                      </div>
                  </footer>


                <!-- les script-->
                  <script src="assets/js/footer.js"></script>
                <!-- les script pour le jeu-->
                  <script src="assets/js/jeu.js"></script>

                <!--script de la newslater -->
                  <script async type="text/javascript" src="https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>      

             </div>
         </div>  
        
  </body>
</html>