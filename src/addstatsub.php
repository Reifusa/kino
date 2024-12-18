<?
require "connect.php";

$name = $_POST['name'];

$queryadd = "INSERT into `status sub` (`id состояния подписки`, `Состояние`) values (NULL, '$name')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('ММ');
}


header("Location: /index.php");

?>