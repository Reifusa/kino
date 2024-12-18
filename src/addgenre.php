<?
require "connect.php";

$genre = $_POST['genre'];

$queryadd = "INSERT into genres (`id жанра`, `Жанр`) values (NULL, '$genre')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('Ну капец!!');
}
header('Location: /index.php');

?>