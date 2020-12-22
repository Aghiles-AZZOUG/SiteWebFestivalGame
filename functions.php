<?php 
function debug($variable){
    echo '<pre>' .print_r($variable,true).'</pre>';
    
}
##############verification de mail , j'utilise ce jumelage d'alphabet et numeros 
##############"pour gener des clés aléatoire sorte de code de verification  
function str_random($lenght){
	$alphabet = "0123456789AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn";
	
	return substr(str_shuffle(str_repeat($alphabet,$lenght)),0,$lenght);

}