<?

    require "connect.php";

    $id = $_GET['id'];

    $queryUp = "DELETE from `years` where `years`.`id года`='$id'";
    $Up = mysqli_query($db, $queryUp);

    header('Location: /index.php');