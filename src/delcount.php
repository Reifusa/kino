<?

    require "connect.php";

    $id = $_GET['id'];

    $queryUp = "DELETE from `countries` where `countries`.`id страны`='$id'";
    $Up = mysqli_query($db, $queryUp);

    header('Location: /index.php');