<?
require "connect.php";
session_start();

$id = $_GET['id'];
$idus = $_SESSION['user']['id'];

$wish = "SELECT * FROM `wishlist` where `wishlist`.`id пользователя` = '$idus' and `wishlist`.`id фильма` = '$id'";
$film = mysqli_query($db, $wish);
$film = mysqli_fetch_assoc($film);

if($film){
    $new = "DELETE FROM `wishlist` where `wishlist`.`id пользователя` = '$idus' and `wishlist`.`id фильма` = '$id'";
    $newl = mysqli_query($db, $new);
} else {
    $new = "INSERT INTO `wishlist` (`id списка желаний`,`id пользователя`,`id фильма`) values (null, '$idus', '$id')";
    $newl = mysqli_query($db, $new);
}

header("Location: /index.php");
