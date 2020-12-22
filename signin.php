
<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Aghiles AZZOUG"/>
    <title>APJV / signin</title>
    <link rel="icon" type="image/png" href="assets/images/logos/icon.png" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link href="assets/css/register.css" rel="stylesheet" type='text/css'>
    
</head>

<body>
    <section id = "diapo" class="hero is-fullheight">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                         <a class="button is-white is-outlined" href="index.php">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <span>APJV ACCUEIL</span>
                                </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="login.php">
                                    <span class="icon">
                                        <i class="fas fa-anchor"></i>
                                    </span>
                                    <span>Se Connecter</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="formulaire.php">
                                    <span class="icon">
                                        <i class="fa fa-superpowers"></i>
                                    </span>
                                    <span>livre d'or</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="gallerie.php">
                                    <span class="icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <span>Gallerie</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="billetterie.php">
                                    <span class="icon">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    </span>
                                    <span>Billetterie</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="accessibilite.php">
                                    <span class="icon">
                                        <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                    </span>
                                    <span>accessibilité</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
            </div>
            <section id = "diapo" class="hero is-fullheight">
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <div class="column is-4 is-offset-4">
                            <h3 class="title has-text-black">Pour vous inscrire</h3>
                            <hr class="login-hr">
                            <p class="subtitle has-text-black">veuillez suivre les insctructions</p>
                            <div class="box">
                                 
                                          <?php 
                                            if(!empty($_POST)){/*verification de variables */
                                                $errors = array();
                                                require_once 'db.php';
                                                if(empty($_POST['username']) || !preg_match('/^[a-z-A-Z0-9_]+$/',$_POST['username'])){ /*verifie si c vide et si le nom contient alphabet et _ seulement*/
                                                    $errors['username']="votre pseudo n'est pas valide(alphanumerique)";
                                                }else {

                                                    $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
                                                    $req -> execute([$_POST['username']]);
                                                    $user = $req->fetch();
                                                    if($user){
                                                      $errors['username']="-Ce pseudo est déja pris, choisissez un autre";
                                                    }
                                                }

                                                if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){ /*verificationd de mail avec une constante de php*/
                                                    $errors['email']="votre email n'est pas valide";
                                                }else {

                                                    $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
                                                    $req -> execute([$_POST['email']]);
                                                    $user = $req->fetch();
                                                    if($user){
                                                      $errors['email']="-Cet email est déja utilisé pour un autre compte";
                                                    }
                                                }
                                                
                                                if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){ /*verificationd de password*/
                                                    $errors['password']="-Vous devez rentrer un mot d epasse valide";
                                                }
                                                if(empty($errors)){
                                                    $req = $pdo->prepare("INSERT INTO users SET username=?,password=?,email=?,confirmation_token = ?");
                                                    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                                                    $token = str_random(60); /*je genere le code aléatoire ici*/
                                                 
                                                    
                                                    //$req -> execute([$_POST['username'], $password, $_POST['email']]); 

                                                    /* j'utiliserai la fonctin hach pour crypter les mots de passe en*/

                                                    /**::::::::::::comme je ne n'ai pas de boite mail local pour la reception de ces mail, je vais juste generer le code et la partie de mail je la mettrai en commentaire elle fonctionne ce sont les commentaires avec les les deux slaches ::::::::::*/
                                                   
                                                    $req -> execute([$_POST['username'], $password, $_POST['email'],$token]);
                                                     /* :::::::::::j'utiliserai la fonctin hach pour stoquer les mots de passe en crypté */
                                                     /* :::::::::::que j'enverrai par mail sous forme de message */
                                                     /*::::::::::::pour crééer l'id de l'utilisateur je devrai utiliser cette commande qui suit aussi et puis qui sera transmi dans le mail de cofirmation */
                                                    $user_id = $pdo -> lastInsertId();
                                                    mail($_POST['email'],'confirmation de votre compte',"afin de valider votre; compte merci de bien vouloir cliquer sur ce lien \n\n htttp://localhost/monsite/signin.php?id=$user_id&token=$token");
                                                    die('Votre compte a bien été créé, veuillez valider  en cliquant sur le lien envoyé à votre boite mail');
                                                    header('Location : login.php');
                                                    exit();

                                                }
                                               
                                                    
                                            }
                                          ?>
                                          <?php if(!empty($errors)): ?>
                                          
                                            <div class="notification is-danger">
                                                 <button class="delete"></button>
                                                <p>vous n'avez pas rempli le formulaire correctement</p>
                                                <ul>
                                                <?php foreach($errors as $error): ?>
                                                    <li><?= $error; ?></li>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                         <?php endif; ?>
                                <form action="" method="POST">
                                    <div class="field">
                                        <div class="control">
                                            <label for="">pseudo</label>
                                            <input class="input is-large" name="username" type="text" placeholder="nom d'utilisateur" autofocus="" required/>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <label for="">votre email</label>
                                            <input class="input is-large" name="email" type="text" placeholder="votre email" autofocus="" required/>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <label for="">mot de passe</label>
                                            <input class="input is-large" name="password" type="password" placeholder="votre mot de passe" required/>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <label for="">confirmez votre mot de passe</label>
                                            <input class="input is-large" name="password_confirm" type="password" placeholder="meme mot de passe" required/>
                                        </div>
                                    </div>

                                    <button type="submit" class="button is-block is-danger is-large is-fullwidth">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                                </form>
                    </div>
                </div>
            </section>
            
    <script async type="text/javascript" src="../js/bulma.js"></script>

    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>