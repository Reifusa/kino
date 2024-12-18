<?
require "connect.php";

$country = $_POST['country'];

$queryadd = "INSERT into countries (`id страны`, `Страна`) values (NULL, '$country')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('Ну капец!!');
}
header('Location: /index.php');

?>