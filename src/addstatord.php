<?
require "connect.php";

$name = $_POST['name'];

$queryadd = "INSERT into `status ord` (`id статуса заказа`, `Статус`) values (NULL, '$name')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('ММ');
}


header("Location: /index.php");

?>