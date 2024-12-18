<?

    require "connect.php";

    $id = $_GET['id'];

    $queryUp = "DELETE from `genres` where `genres`.`id жанра`='$id'";
    $Up = mysqli_query($db, $queryUp);

    header('Location: /index.php');