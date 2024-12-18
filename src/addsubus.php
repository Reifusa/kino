<?
require "connect.php";
session_start();

$idsub = $_POST['id'];
$date = $_POST['date'];
$price = $_POST['price'];
$pay = $_POST['pay'];
$idus = $_SESSION['user']['id'];

$currentDateTime = date('d.m.Y/H:i:s');
$currentTime = date('H:i:s');
$newdate = $date . '/'. $currentTime;


$qury = "INSERT INTO `subscription` (`id подписки`, `id пользователя`, `Дата/время начала подписки`, `Дата/время окончания подписки`, `Тип подписки`, `Стоимость подписки`, `Состояние подписки`) values (NULL, '$idus', '1', '1', '$idsub', '$price', '3')";
$qsub = mysqli_query($db, $qury);

if($qsub){
$order = "INSERT INTO `orders` (`id заказа`, `Сумма заказа`, `Статус заказа`, `Дата/время создания`, `id пользователя`, `id подписки`, `Способ оплаты`) values (null, '$price', '1', '$currentDateTime', '$idus', '$idsub', '$pay')";
$ord = mysqli_query($db, $order);
}if($ord){
    $ordersub = "UPDATE `subscription` SET `Дата/время начала подписки` = '$currentDateTime',  `Дата/время окончания подписки` = '$newdate', `Состояние подписки` = '1' where `subscription`.`Дата/время начала подписки` = '1' and `subscription`.`id пользователя` = '$idus'";
    $sub = mysqli_query($db, $ordersub);
    if($sub){
        $_SESSION['sub'] = [
            'Status subscription' => 'Активная',
        ];
        $orderup = "UPDATE `orders` SET `Статус заказа` = '2' where `orders`.`Дата/время создания` = '$currentDateTime' and `orders`.`id пользователя` = '$idus'";
        $up = mysqli_query($db, $orderup);
        if($up){
        header("Location: /index.php");
    } else {
        die('Не удалось завершить заказ');
    }
    }
} else {
    die('Не удалось создать заказ');
}