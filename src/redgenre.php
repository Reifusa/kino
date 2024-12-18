<?

require "connect.php";

$id = $_POST['id'];
$genre = $_POST['genreup'];


$queryUp = "UPDATE `genres` SET `Жанр`='$genre' where `genres`.`id жанра`='$id'";
$Up = mysqli_query($db, $queryUp);

print_r($Up);
print_r($genre);


if(!$queryUp){
    die('KK');
}

if(!$Up){
    die('KJK');
}
header('Location: /index.php');