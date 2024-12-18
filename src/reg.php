<?

require "connect.php";

$login = $_POST['login'];
$email = $_POST['email'];
$tel = $_POST['tel'];
if($tel = ''){
    $tel = null;
}
$pass = $_POST['pass'];
$confirm = $_POST['passtoo'];

if($pass !== $confirm){
    die('Пароли не совпали');
} elseif ($pass == null){
    die('Не был введён пароль');
} elseif($login == null){
    die('Не была введена почта');
} elseif($login == null && $pass == null){
    die('Не была введена почта и пароль');
}

$queyUser = "SELECT * FROM `users` where `users`.`email`='$email'";
$user = mysqli_query($db, $queyUser);
$user = mysqli_fetch_assoc($user);


if($user){
    die('Такой пользователь уже есть');
}else{
    $queyREG = "INSERT INTO `users` (`id_user`, `name`, `email`, `numer_tel`, `password`) values (null, '$login', '$email', '$tel', '$pass')";
    $REG = mysqli_query($db, $queyREG);
    if(!$REG){
        print_r($queyREG);
        die();
    }
    header('Location: /index.php');
}