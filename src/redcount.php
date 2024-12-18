<?

require "connect.php";

$id = $_POST['id'];
$country = $_POST['countup'];


$queryUp = "UPDATE `countries` SET `Страна`='$country' where `countries`.`id страны`='$id'";
$Up = mysqli_query($db, $queryUp);

if(!$queryUp){
    die('KK');
}

if(!$Up){
    die('KJK');
}
header('Location: /index.php');