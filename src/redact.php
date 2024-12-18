<?

require "connect.php";
$id = $_POST['id'];
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

$queryUp = "UPDATE `films` SET `Название фильма`='$name', `id жанра`='$genre', `Описание`='$descrip', `Рейтинг`='$rating', `Ограничение`='$restrict',
 `Длительность`='$time', `id страны`='$country', `id года`='$year', `Постер`='$poster', `Цена`='$price' where `films`.`id фильма`='$id'";
$Up = mysqli_query($db, $queryUp);

if(!$Up){
    die('lo');
}
header('Location: /index.php');