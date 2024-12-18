<?

require "connect.php";

$id = $_POST['id'];

$queryUp = "DELETE from `films` where `films`.`id фильма`='$id'";
$Up = mysqli_query($db, $queryUp);

header('Location: /index.php');