<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Aghiles AZZOUG"/>
        <title>APJV / Portail</title>
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
          <!-- contenu-->
              <div class="columns">
                    <div class="column is-full" id="asso">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                            <div class="columns">
                              <div class="column">
                                <figure>
                                  <center> <img src="assets/images/logos/Logo2.png" height="70%" width="70%"></center>
                                </figure>
                              </div>
                              <div class="column">
                                  <article class="message is-danger">
                                    <div class="message-header">
                                      <p>Présentation de l'association</p>
                                    </div>
                                    <div class="message-body">
                                      L’association APJV est une association privée à but non lucratif pour la promotion des <strong>jeux-vidéos</strong>. Elle organise régulièrement des évènements pour faire découvrir ou redécouvrir le monde vidéoludique aux gamers comme aux néophytes. À travers son action, elle souhaite toucher de nombreux publiques: enfants, personnes âgées, adultes isolés... et ainsi faire grandir la communauté du gaming français pour une plus grande inclusion. Elle souhaite aussi, en travaillant avec des personnes en situation de handicap, permettre l’évolution du matériel et des façon de créer pour une plus grande accessibilitée.
                                    </div>
                                  </article>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>


                  <div class="columns" id="festival">
                    <div class="column is-full">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                            <div class="columns">
                              <div class="column">
                                  <article class="message is-danger">
                                    <div class="message-header">
                                      <p>Présentation du Festival</p>
                                    </div>
                                    <div class="message-body">
                                      Le Festival du Jeu est un évènement bisannuel qui permet de faire <strong>le pont entre les jeunes générations et nos aîné(e)s</strong>strong>. Il permettra aux petits-enfants de faire découvrir l’univers des jeux- vidéos à leurs grands-parents. À travers un large panel de jeux, anciens comme récents, on pourra couvrir l’ensemble de la sphère vidéoludique. Il permet également, avec la réalité virtuelle et l’utilisation de manettes adaptées, d’ouvrir l’action aux personnes âgées avec des troubles de la mobilité pour qu’ils puissent participer pleinement à l’évènement. Venez en famille à cet évènement sous le symbole de la rencontre et du partage.
                                    </div>
                                  </article>
                              </div>
                              <div class="column">
                                <figure>
                                  <center> <img src="assets/images/about.jpg" height="90%" width="90%"></center>
                                </figure>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>


                 <div class="columns" id="membre">
                    <div class="column is-full">
                        <div class="columns">
                          <div class="column">
                                <div class="tile is-parent">
                                  <article class="tile is-child box">
                                    <figure class="roundedImage image is-128x128">
                                      <img src="assets/images/avatar/Gandoulf.jpg">
                                    </figure>
                                    <h1 class="subtitle">Restaurateur Arcades </h1>
                                    <p class="subtitle">
                                      <address>
                                        <span class="icon">
                                          <i class="far fa-address-card"></i>
                                        </span>
                                        <strong>John Doe</strong><br>
                                        enseignant du game design<br>          
                                        animateur dans le jt de GAME-ONE<br>
                                        université de Strasbourg<br>
                                        <abbr title="Phone">P:</abbr> (+33) 000-000-00
                                      </address>
                                      <address>
                                          <strong>email </strong>
                                          <a href="mailto:#">johndie@example.com</a>
                                      </address>
                                    </p> 
                                  </article> 
                                </div>
                          </div>
                          <div class="column">
                           <div class="columns">

                              <div class="column is-full">
                                <div class="tile is-parent">
                                  <article class="tile is-child box">
                                    <figure class="roundedImage image is-128x128">
                                      <img src="assets/images/avatar/Steampunkette.jpg">
                                    </figure>
                                    <h1 class="subtitle"> Représentatrice de Ubisoft </h1>
                                    <p class="subtitle">
                                      <address>
                                        <span class="icon">
                                        <i class="far fa-address-card"></i>
                                        </span><strong>Alexandra Martinez</strong><br>
                                        developpeuse<br>          
                                        co-réalisatrice Assassin-Screed<br>
                                        Ubisort Company<br>
                                        <abbr title="Phone">P:</abbr> (+33) 000-000-00
                                      </address>
                                      <address>
                                            <strong>email </strong>
                                            <a href="mailto:#">johndie@example.com</a>
                                      </address>
                                    </p> 
                                  </article>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="column">
                           <div class="columns">
                              <div class="column is-full">
                                <div class="tile is-parent">
                                  <article class="tile is-child box">
                                    <figure class="image is-128x128 roundedImage">
                                      <img src="assets/images/avatar/G4m3ur.jpg">
                                    </figure>
                                    <h1 class="subtitle">Embassadeur Nintendo</h1>
                                    <p class="subtitle">
                                      <address>
                                        <span class="icon">
                                          <i class="far fa-address-card"></i>
                                        </span>
                                        <strong>Jack l'éventreur</strong><br>
                                        gagnant du premier tournoi God-of-War<br>          
                                        blogger et écrivain<br>
                                        consulat du Japon<br>
                                        <abbr title="Phone">P:</abbr> (+33) 000-000-00
                                      </address>
                                      <address>
                                            <strong>email </strong>
                                            <a href="mailto:#">johndie@example.com</a>
                                      </address>
                                    </p> 
                                  </article>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div>
                    

                    <div class="columns">
                    <div class="column is-full">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                            <div class="columns">
                              <div class="column">
                                <figure>
                                  <center> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2638.876242502967!2d7.6849298150060985!3d48.59306842730633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796b7b7fa93a565%3A0x10a183f609a4fe1c!2sZ%C3%A9nith%20de%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1575299991725!5m2!1sfr!2sfr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    <i class="fas fa-map-marker-alt"></i>Nous retrouver
                                    <p>Lieu : Zénith D'Eckbolshiem  <br>
                                      Date: du 23 au 24 Novembre 2019  <br>
                                    </center>
                                </figure>
                              </div>
                              <div class="column">
                                <p class="title">Vous pouvez nous trouver sur les réseaux sociaux</p>
                                   <a href="https://www.facebook.com/JournalElMesmar/">
                                  <div class="fb-icon-bg"></div>
                                      <div class="fb-bg"></div></a>
                                    <a href="https://twitter.com/el_mesmar">
                                    <div class="twi-icon-bg"></div>
                                      <div class="twi-bg"></div></a>
                                    <a href="https://plus.google.com/u/0/+aghilesazzoug?tab=wX">
                                    <div class="g-icon-bg"></div>
                                      <div class="g-bg"></div>
                                    </a>
                                  <a href="https://www.linkedin.com/in/azzoug-aghiles/">
                                    <div class="lin-icon-bg"></div>
                                      <div class="lin-bg"></div>
                                    </a>
                                  <a href="https://www.instagram.com/mr.photo_click/">
                                    <div class="ins-icon-bg"></div>
                                      <div class="ins-bg"></div>
                                    </a>
                                  <style>
                                  .fb-bg:hover, .twi-bg:hover, .g-bg:hover, .ins-bg:hover, .lin-bg:hover {background:#303030;}
                                  .fb-icon-bg {
                                    background: #354f88;
                                    height: 37px;
                                    margin: 0 0 -37px 0;
                                    width: 41px; 
                                  }

                                  .fb-icon-bg:after {
                                   content: "\f09a"; font-family: FontAwesome;
                                    display: block;
                                    padding: 9px 10px 5px 15px;
                                  color:#fff;
                                  }

                                  .fb-bg {
                                    background: #3b5998;
                                    display: block;
                                    height: 37px;
                                    margin: 0 0 10px 41px;
                                  }

                                  .fb-bg:after {
                                    color: #fff;
                                    content: "Facebook";
                                    height: 37px;
                                    left: 8%;
                                    position: relative;
                                    
                                    top: 22%;
                                    width: 41px; 
                                  }

                                  .fb-bg:hover{
                                    cursor: pointer;
                                  }

                                  .fb-bg:active{
                                    background: #354f88;
                                  }

                                  /* Twitter */
                                  .twi-icon-bg:after {
                                   content: "\f099"; font-family: FontAwesome;
                                    display: block;
                                    padding: 11px 10px 6px 11px;
                                  color:#fff;
                                  }

                                  .twi-icon-bg {
                                    background: #40a2d1;
                                    height: 37px;
                                    margin: 0 0 -37px 0;
                                    width: 41px; 
                                  }

                                  .twi-bg {
                                    background: #45b0e3;
                                    height: 37px;
                                    margin: 0 0 10px 41px;
                                  }
                                   
                                  .twi-bg:after {
                                    color: #fff;
                                    content: "Twitter";
                                    height: 37px;
                                    left: 11%;
                                    position: relative;

                                    top: 22%;
                                    width: 41px; 
                                  }

                                  .twi-bg:hover {
                                    cursor: pointer;
                                  }

                                  .twi-bg:active {
                                    background: #40a2d1;
                                  }

                                  /* Google+ */
                                  .g-icon-bg:after {
                                   content: "\f0d5"; font-family: FontAwesome;
                                    display: block;
                                    padding: 11px 10px 6px 13px;
                                  color:#fff;
                                  }

                                  .g-icon-bg {
                                    background: #ce3e26;
                                    height: 37px;
                                    margin: 0 0 -37px 0;
                                    width: 41px; 
                                  }
                                   
                                  .g-bg {
                                    background: #de4c34;
                                    height: 37px;
                                        margin: 0 0 10px 41px;
                                  }
                                   
                                  .g-bg:after {
                                    color: #fff;
                                    content: "Google+";
                                    height: 37px;
                                    left: 10%;
                                    position: relative;
                                    
                                    top: 22%;
                                    width: 41px; 
                                  }

                                  .g-bg:hover {
                                    cursor: pointer;
                                  }
                                  .lin-icon-bg {
                                      background: #075e8c;
                                      height: 37px;
                                      margin: 0 0 -37px 0;
                                      width: 41px;
                                  }
                                  .lin-icon-bg:after {
                                      content: "\f0e1";
                                      font-family: FontAwesome;
                                      display: block;
                                      padding: 11px 10px 6px 13px;
                                      color: #fff;
                                  }
                                  .lin-bg {
                                      background: #0077B5;
                                      height: 37px;
                                      margin: 0 0 10px 41px;
                                  }
                                  .lin-bg:after {
                                      color: #fff;
                                      content: "Follow up on Linkedin";
                                      height: 37px;
                                      left: 10%;
                                      position: relative;
                                      top: 22%;
                                      width: 41px;
                                  }
                                  .ins-icon-bg {
                                      background: #ffc238;
                                      height: 37px;
                                      margin: 0 0 -37px 0;
                                      width: 41px;
                                  }
                                  .ins-icon-bg:after {
                                      content: "\f16d";
                                      font-family: FontAwesome;
                                      display: block;
                                      padding: 11px 10px 6px 13px;
                                      color: #fff;
                                  }
                                  .ins-bg {
                                      background: #ffd438;
                                      height: 37px;
                                      margin-left: 41px;
                                  }
                                  .ins-bg:after {
                                      color: #fff;
                                      content: "Follow us on Instagram";
                                      height: 37px;
                                      left: 10%;
                                      position: relative;
                                      top: 22%;
                                      width: 41px;
                                  }
                                  </style>
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

                <script src="{{ site.baseurl }}/javascript/jquery-2.2.0.min.js"></script>

                <script src="{{ site.baseurl }}/javascript/clipboard.min.js"></script>

                <script src="{{ site.baseurl }}/javascript/bulma.js"></script>

                <script type="text/javascript" src="{{ site.baseurl }}/javascript/index.js"></script>

                <script src="assets/js/footer.js"></script>

             </div>
         </div>  
        
    </body>
</html>