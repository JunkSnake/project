<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username="root";
$passwrd="№Сфтеукцщщв2";
$dbname="user";

$conn = new mysqli($servername, $username, $passwrd, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
} else {
     "Подключение успешно!";
}
?>