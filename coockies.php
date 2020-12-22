<?php // dans la partie login 
if($_POST['remember']){
    $remember_token = str_random(250);
    $pdo->prepare('UPDATE users SET remember_token = ? WHERE id = ?')->execute([$remember_token, $user->id]);
    setcookie('remember', $user->id . '==' . $remember_token . sha1($user->id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
}

?>