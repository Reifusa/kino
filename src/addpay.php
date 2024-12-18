<?
require "connect.php";

$pay = $_POST['pay'];

$queryadd = "INSERT into `method of pay` (`id способа оплаты`, `Способ`) values (NULL, '$pay')";
$add = mysqli_query($db, $queryadd);

if(!$add){
    die('ММ');
}


header("Location: /index.php");

?>
