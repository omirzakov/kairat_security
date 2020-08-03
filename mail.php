<?php if (isset($_POST["submit"])) {
$to = "huistowns@gmail.com";
$subject = "Письмо с сайта";
$charset = "utf-8";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <huistowns@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$msg = "Имя: ".$_POST["name"]."\n";$msg .= "Сообщение: ".$_POST["msg"]."\n";
mail($to, $subject, $msg);
// header('Location: index.php');
}