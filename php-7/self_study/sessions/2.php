<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    header("Location: welcome.php");
    exit;
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Имя пользователя" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <button type="submit">Войти</button>
</form>