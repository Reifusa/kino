<?

require "connect.php";

$id = $_POST['id'];
$year = $_POST['year'];


$queryUp = "UPDATE `years` SET `Год`='$year' where `years`.`id года`='$id'";
$Up = mysqli_query($db, $queryUp);

if(!$queryUp){
    die('KK');
}

if(!$Up){
    die('KJK');
}
header('Location: /index.php');