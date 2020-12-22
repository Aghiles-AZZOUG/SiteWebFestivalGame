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
        <link href="assets/css/style.css" rel="stylesheet">
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
                <a class="navbar-item" href="jeu.php">
                  Invaders ★★★
                </a>
                <a class="navbar-item" href="sims.php">
                  Sims Christmas ★☆☆
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="#">
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
                  <a class="bd-tw-button button" href="billetterie.php">
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
           <!-- topbar-->
            <div id="haut">
                <div id="blocImage">
                  <div class="area">😁 APJV 🙉</div>
                </div>
            </div>
            
                  <div id="contaimm" class="columns">
                    <div class="column is-full" id="asso">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                             <article class="message is-danger">
                              <div class="message-header">
                                <div  >
                                  <p>pour plus d'images Veuillez cliquer 
                                    <button type="button" class="btn btn-info" name="suivant" id="suivant"> ici</button> 
                                  </p>
                                 </div>
                              </div>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                 
               
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

                <script async type="text/javascript" src="https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>

                <script src="assets/js/footer.js"></script>
                <script src="assets/js/formajax.js"></script>
                

             </div>
         </div>  
        
    </body>
</html>