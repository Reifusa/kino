<?

require "connect.php";
$login = $_POST['login'];
$pass = $_POST['pass'];
$confirm = $_POST['passtoo'];

if($pass !== $confirm){
    die('Пароли не совпали');
} elseif ($pass == null){
    die('Не был введён пароль');
} 

$queyUser = "UPDATE `users` SET `Пароль`='$pass' where `users`.`E-mail`='$login'";
$user = mysqli_query($db, $queyUser);
if(!$user){
    die('Nu takoe');
}
header('Location: /index.php');
