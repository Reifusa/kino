<?
session_start();
require "connect.php";

$login = $_POST['login'];
$pass = $_POST['pass'];

if($login == null && $pass == null){
    die('Поля пустые');
} elseif($login == null){
    die('Логин не был введен');
} elseif($pass == null){
    die('Не был введён пароль');
}

$queryUser = "SELECT * from `users` where `users`.`name`='$login'";
$mbUser = mysqli_query($db, $queryUser);
$mbUser = mysqli_fetch_assoc($mbUser);

if($mbUser){
    if($mbUser['name'] == $login && $mbUser['password'] == $pass){

        $_SESSION['user'] = [
            'name' => $mbUser['name'],
            'email' => $mbUser['email'],
            'role' => $mbUser['role'],
            '	numer_tel' => $mbUser['numer_tel'],
            'id_user' =>$mbUser['id_user'],
        ];}else{
            die('Неверный логин или пароль');
        }}else{
            die('Такого пользователя не существует');
        }

header('Location: /index.php');
