<?php
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)) {
    header("Location: login.php?error=Заполнены не все поля");
    exit;
} else {
    $sql = "SELECT * FROM `user` WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Location: content.php");
        exit;
    } else {
        header("Location: login.php?error= не верно введён логин или пароль");
        exit;
    }
}
?>
