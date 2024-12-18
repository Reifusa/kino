<?
require "connect.php";

$name = $_POST['name'];
$genre = $_POST['genre'];
$descrip = $_POST['descrip'];
$rating = $_POST['rating'];
$restrict = $_POST['restrict'];
$time = $_POST['time'];
$country = $_POST['country'];
$year = $_POST['year'];
$poster = $_POST['poster'];
$price = $_POST['price'];

print_r($name);
print_r($genre);
print_r($descrip);
print_r($rating);
print_r($restrict);
print_r($time);
print_r($country);
print_r($year);
print_r($poster);
print_r($price);
$queryadd = "INSERT into `films` (`id фильма`, `Название фильма`, `id жанра`, `Описание`, `Рейтинг`, `Ограничение`, `Длительность`, `id страны`, `id года`, `Постер`, `Цена`) values (NULL, '$name', '$genre', '$descrip', '$rating', '$restrict', '$time', '$country', '$year', '$poster', '$price')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('ММ');
}


header("Location: /index.php");

?>

