<?
require "connect.php";

$year = $_POST['year'];

$queryadd = "INSERT into years (`id года`, `Год`) values (NULL, '$year')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('Ну капец!!');
}
header('Location: /index.php');

?>