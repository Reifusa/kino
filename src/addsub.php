<?
require "connect.php";

$sub = $_POST['sub'];
$queryadd = "INSERT into `type sub` (`id типа подписки`, `Тип`) values (NULL, '$sub')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('ММ');
}


header("Location: /index.php");

?>