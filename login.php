
<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Aghiles AZZOUG"/>
    <title>APJV /Login</title>
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
                                <a class="button is-white is-outlined" href="signin.php">
                                    <span class="icon">
                                        <i class="fas fa-anchor"></i>
                                    </span>
                                    <span>S'inscrire</span>
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
                                    <span>Accessibilité</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
         <section id = "napo" class="hero is-fullheight">
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <div class="column is-4 is-offset-4">
                            <h3 class="title has-text-black">se connecter</h3>
                            <hr class="login-hr">
                            <p class="subtitle has-text-black">indiquez votre mail et mot-de-pass</p>
                            <div class="box">
                                <figure class="avatar  is-128x128">
                                    <img src="assets/images/avatar/avat.png">
                                </figure>
                                <form>
                                    <div class="field">
                                        <div class="control">
                                            <input class="input is-large" type="username" placeholder="votre pseudo" autofocus="">
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <input class="input is-large" type="password" placeholder="votre mot-de-passe">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="checkbox">
                                       <input type="checkbox" name="remember" value="1"/>
                                       se rappeler de moi
                                     </label>
                                    </div>
                                    <button class="button is-block is-danger is-large is-fullwidth">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <p class="has-text-grey">
                                <a href="signin.php">S'inscrire </a> |
                                <a href="../"> Mot de passe oubllié </a> |
                                <a href="../"> Aide?</a>
                            </p>
                        </div>
                    </div>
                </div>

                <?php 

                 if(!empty($_POST) && !empty($_POST['username'])){// j'exige que la connex se fasse avec les pseudo
                    require_once 'db.php';
                    require_once 'functions.php';
                    $req = $pdo->prepare('SELECT * FROM users WHERE username = :username');
                    $req->execute(['username'=>$_POST['username']]);
                    $user = $req->fetch();//car j'ai utilisé du hachage pour les mots de passes donc seul moyen de comparer les mots de passes enregistrés avec ceux saisis
                    if(password_verify($_POST['password'],$user->password)){//password_verify dechifre le hachage
                        
                        $_SESSION['auth'] = $user;
                        //$pdo->prepare('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user->id]);
                        //$_SESSION['flash']['success'] = 'Les instructions du rappel de mot de passe vous ont été envoyées par emails';
                        $_SESSION['flash'][success]='vous êtes maintenant connecté(e)';
                        if($_POST['remeber']){
                            $remeber_token = str_rendom(250);
                            $pdo->prepare('UPDATE users SET remember_tocken =? WHERE id =?')->execute([$remember_token,$user->id]);
                            setcoockie('remember',$user->id.'=='.$remember_token.sha1($user->id.'marco'),time()+360*24*7);//la je mets un id comme Maro dedans et la durée de è jours 
                        }
                    
                        header('Location: monespace.php');
                        exit();
                    }else{
                        $_SESSION['flash']['danger'] = 'erreur dans identifiant ou le mot de passe';
                    }
                } ?>

            </section>
            
    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>