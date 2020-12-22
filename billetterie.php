<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Aghiles AZZOUG"/>
        <title>APJV / billetterie</title>
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
                Jeux & Gallerie
              </a>

              <div class="navbar-dropdown">
                <a class="navbar-item" href="#">
                  Invaders ★★★
                </a>
                <a class="navbar-item" href="sims.php">
                  Sims Christmas ★☆☆
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="gallerie.php">
                  Gallerie
                </a>
              </div>
            </div>
           </div>
         <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a a class="button is-white is-outlined" href="accessibilite.php">
                   <span class="icon">
                      <i class="fa fa-wheelchair" aria-hidden="true"></i>
                  </span>
                </a>
                  <a class="bd-tw-button button" href="#">
                  <span class="icon">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                  </span>
                  <span>
                    Billetterie
                  </span>
                </a>
                <a class="button is-danger is-light" href="login.php">
                  <span class="icon">
                   <i class="fa fa-leaf"></i>
                  </span>
                  <span>Connexion</span>
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
                    
                <!-- NOTIFICATION DE JEU-->
                  <div class="columns">
                    <div class="column is-full" id="asso">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                           <article class="message is-danger">
                              <div class="message-body">
                              
                              <p>j'utilise un widget un generateur de code bar pour un évenement que j'ai organisé , après inscription</p>
                              </div>
                           </article>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                  
                  <!-- generateur -->
                <div class="columns">
                    <div class="column is-full" id="asso">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                            <div class="columns">
                              <div class="column">
                                <figure>
                                  <center> <img src="assets/images/articles/invitation.jpg" height="70%" width="70%"></center>
                                </figure>
                              </div>
                              <div class="column">
                                  <article class="message is-danger">
                                    <div class="message-header">
                                      <p>veuillez séléctionner le nombre de ticket ainsi saisir vos coordonnées </p>
                                    </div>
                                    <div class="message-body">
                                     <a title="Logiciel billetterie en ligne" href="https://weezevent.com/?c=sys_widget" class="weezevent-widget-integration" target="_blank" data-src="https://www.weezevent.com/widget_billeterie.php?id_evenement=576183&lg_billetterie=1&code=549&width_auto=1&color_primary=00AEEF" data-width="650" data-height="600" data-id="576183" data-resize="1" data-width_auto="1" data-noscroll="0" data-nopb="0">Billetterie du festival APJV</a><script type="text/javascript" src="https://www.weezevent.com/js/widget/min/widget.min.js"></script>

                                    </div>
                                  </article>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>


                  <section id="newsletter" class="hero is-danger">
                      <div class="hero-body">
                        <div class="container">

                          <!-- Begin MailChimp Signup Form -->

                          <div id="mc_embed_signup" class="columns is-vcentered">

                            <div class="column is-one-third is-left">
                              <p class="title">APJV <strong>Newsletter</strong></p>
                              <p class="subtitle">tenez-vous informé de nos activités</p>
                            </div>

                            <div class="column">
                              <!-- partie saisie email -->
                              <form action="https://bbxdesign.us3.list-manage.com/subscribe/post?u=b43b93fe633f0560b2a72a69c&amp;id=52585e8803" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                                <div id="mc_embed_signup_scroll">
                                  <div class="control is-grouped">

                                    <div class="control has-icon is-expanded">
                                      <input type="email" value="" name="EMAIL" class="input is-flat required email" id="mce-EMAIL" placeholder="email address" required>
                                      <i class="fa fa-envelope"></i>
                                    </div>

                                    <div class="control">
                                      <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button is-white is-outlined">
                                    </div>
                                  </div>

                                  <div id="mce-responses">
                                    <div class="notification is-danger response" id="mce-error-response" style="display:none"></div>
                                    <div class="notification is-success response" id="mce-success-response" style="display:none"></div>
                                  </div>

                                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_b43b93fe633f0560b2a72a69c_52585e8803" tabindex="-1" value="">
                                  </div>
                                </div>

                              </form>
                            </div>
                          </div>

                          <!--End mc_embed_signup-->

                        </div>
                      </div>
                    </section>
                      


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
