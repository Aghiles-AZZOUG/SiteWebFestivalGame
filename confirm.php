<?php 
$user_id=$_GET['id'];
$token=$_GET['token'];
require 'db.php'
$req=$pdo->prepare('SELECT * FROM users WHERE id=?')
$req->execute([$user_id])
$user = $req -> fetch();
session_start();


if($user && $user -> confirmation_token == $token){
	/*die('ok');*/
	$pdo->prepare('UPDATE users SET confirmation_token = NULL,confirmed_at = NOW() WHERE id=?')->execute([$user_id]);
	$_SESSION['auth']['success'] = 'votre compte a bien été évalué';
	$_SESSION['auth'] = $user;
	header('Location: monespace.php');
} else {
	//die('pas ok')
	$_SESSION['flash']['danger']="Ce token n'est plus valide";  // message flash en cas d'echec
	header('Location: login.php);
}