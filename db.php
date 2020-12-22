<?php 
$pdo = new PDO ('mysql:dbname=tuto;host=localhost','root','');/*vu que j'ai utilisé Wamp , je n'ai pas mis de mot de passe*/
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);   
