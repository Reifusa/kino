<?
$db = mysqli_connect(
    '127.0.0.1:3307',
    'root',
    '',
    'kinodom'
);

if(!$db){
    die('Не удалось подключиться к бд');
}

