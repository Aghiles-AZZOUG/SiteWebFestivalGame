<?php include('contact.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Aghiles AZZOUG"/>
        <title>APJV / contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Page de présentation du Festival"/>
        <meta name="keywords" content="Association pour la Promotion du Jeux-Vidéo Festival Jeux-vidéos au Zénith d'Eckbolsheim"/>
        <link rel="icon" type="image/jpg" href="assets/images/logo/logo.png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"> <!-- utilsation de BULMAc'est comme bootstrap afin de mieux designer bloc de sprojets et éviter de trop écrire du css-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto&display=swap" rel="stylesheet"> 
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link href="assets/css/bulma/css/bulma.css" rel="stylesheet">
        <link href="assets/css/formulaire.css" rel="stylesheet" type='text/css'>
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

              <a class="navbar-item" href="index.php#newsletter">
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
               <!-- hEADER-->
              <!-- topbar-->
            <div id="haut">
                <div id="blocImage">
                  <div class="area">🙌 APJV 🙏</div>
                </div>
            </div>

                    <!-- NOTIFICATION DE formulaire-->
                  <div class="columns">
                    <div class="column is-full" id="asso">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                             <article class="message is-danger">
                              <div class="message-header">
                                Voila le formulaire, notre fameux livre d'or vous pouvez nous laissez votre message et faire agrandir notre communauté</p>
                              </div>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                    
                <!-- partie formulaire -->
                  <div class="columns">
                    <div class="column is-full" >
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                          
                                <article class="message is-danger">
                                  <div id="comments_container" class="message-body">
                                    <!-- le formulaire -->

                                     
                                     <form method="post">
                                      <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                          <label class="label" for="firstName">Vous appelez</label>
                                        </div>
                                        <div class="field-body">
                                          <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                              <input class="input" type="text"   type="text"
                                                 id="firstName"
                                                 name="firstName"
                                                 placeholder="Prenom"
                                                 required
                                                 aria-required="true"
                                                 aria-labelledby="firstName" >
                                              <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                              </span>
                                            </p>
                                          </div>
                                          <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                              <input class="input" type="text"   type="text"
                                                 id="lastName"
                                                 name="lastName"
                                                 placeholder="Nom"
                                                 required
                                                 aria-required="true"
                                                 aria-labelledby="lastName" >
                                              <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                              </span>
                                            </p>
                                          </div>
                                         </div>
                                        </div>                               
                                        <div class="field is-horizontal">
                                          <div class="field-label"></div>
                                            <div class="field-body">
                                              <div class="field is-expanded">
                                                <div class="field has-addons">
                                                  <p class="control">
                                                    <a class="button is-static">
                                                      +33
                                                    </a>
                                                  </p>
                                                  <p class="control is-expanded">
                                                    <input class="input" type="text"
                                                 id="telephone"
                                                 name="telephone"
                                                 placeholder="votre numéro mobile"
                                                 required
                                                 aria-required="true"
                                                 aria-labelledby="telephone">
                                                  </p>
                                                </div>
                                                <p class="help">Sans le zéro</p>
                                              </div>
                                              <div class="field">
                                                <p class="control is-expanded has-icons-left has-icons-right">
                                                  <input class="input is-success" type="text"
                                                 id="mail"
                                                 name="mail"
                                                 placeholder="exemple@exemple.fr"
                                                 required
                                                 aria-required="true"
                                                 aria-labelledby="mail"/>
                                                  <span class="icon is-small is-left">
                                                    <i class="fas fa-envelope"></i>
                                                  </span>
                                                  <span class="icon is-small is-right">
                                                    <i class="fas fa-check"></i>
                                                  </span>
                                                </p>
                                              </div>
                                            </div>
                                          </div>


                                        <div class="field is-horizontal">
                                          <div class="field-label is-normal">
                                            <label class="label">Sujet du message</label>
                                          </div>
                                          <div class="field-body">
                                            <div class="field is-narrow">
                                              <div class="control">
                                                <div type="text"
                                                 id="sujet"
                                                 name="sujet"
                                                 required
                                                 aria-required="true"
                                                 class="select is-fullwidth">
                                                  <select>
                                                    <option>Question</option>
                                                    <option>Réservation</option>
                                                    <option>Remarque</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                         
                                        <div class="field is-horizontal">
                                          <div class="field-label">
                                            <label class="label">voulez-vous rester anonyme</label>
                                          </div>
                                          <div class="field-body">
                                            <div class="field is-narrow">
                                              <div class="control">
                                                <label class="radio">
                                                  <input type="radio" name="member" aria-checked="true">
                                                  Oui
                                                </label>
                                                <label class="radio">
                                                  <input type="radio" name="member" aria-checked="true">
                                                  Non
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="field is-horizontal">
                                          <div class="field-label is-normal">
                                            <label class="label">Message</label>
                                          </div>
                                          <div class="field-body">
                                            <div class="field">
                                              <div class="control">
                                                <textarea class="textarea" placeholder="Comment on peut vous aider" type="text"
                                                    id="message"
                                                    name="message"
                                                    cols="30"
                                                    rows="10" required
                                                    aria-required="true"
                                                    aria-labelledby="message" ></textarea>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="field is-horizontal">
                                          <div class="field-label">
                                            <!-- Left empty for spacing -->
                                          </div>
                                          <div class="field-body">
                                            <div class="field">
                                              <div class="control">
                                                <button class="button is-danger is-outlined" id="valider"  type="submit">
                                                  envoyer
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                     </form>


                                    </div>
                                </article>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
               
               <div class="columns">
                    <div class="column is-full" id="asso">
                      <div class="tile is-parent">
                        <article class="tile is-child box">
                          <div class="subtitle">
                            <article class="media">
                                <figure class="media-left">
                                  <p class="image is-64x64">
                                    <img src="assets/images/avatar/avatar.jpg">
                                  </p>
                                </figure>
                                <div class="media-content">
                                  <div class="content">
                                     <section >
                                        <?php
                                        $messages = $pdo->sql(
                                          'SELECT * FROM message ORDER BY id DESC'
                                        )->fetchAll();

                                        foreach($messages as $message){
                                        ?>        
                                        <p>
                                          <strong><?php echo $message['first_name']; ?> <?php echo $message['last_name'] ; ?></strong></p>
                                          <br>
                                          <p> <?php echo $message['mail'] ; ?><?php echo $message['telephone'] ; ?></p><br> <!-- on peut remplacer php eco par php= -->
                                          <p> <?php echo $message['sujet'] ; ?></p><br>
                                          <p> <?php echo $message['message'] ; ?></p><br> 
                                          <?php } ?> <!-- endfroeach; -->
                                        
                                       </section>
                                      <small><a>Like</a> · <a>Reply</a> · 3 hrs</small>
                                  </div>
                                </div>
                            </article>
                       </div>
                        </article>
                      </div>
                    </div>
                  </div>

                <!-- les script-->
                <!-- les script pour le jeu-->
                  <script src="assets/js/formulaire.js"></script>
      </div>
    </div>  <!--fin du container-->
        
  </body>
</html>