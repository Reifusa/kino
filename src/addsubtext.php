<?
require "connect.php";

$name = $_POST['name'];
$desc = $_POST['desc'];
$descsum = $_POST['descsum'];
$price = $_POST['price'];


$queryadd = "INSERT into `textsub` (`id описания подписки`, `Название`, `Описание`, `Подпись к цене`, `Цена`) 
values (NULL, '$name', '$desc', '$descsum', '$price')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('ММ');
}

header("Location: /index.php");

?>