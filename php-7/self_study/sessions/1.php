<?php
session_start();
$_SESSION["username"] = "student";

if (isset($_SESSION["username"])) {
    echo "Имя пользователя в сессии: " . $_SESSION["username"];
} else {
    echo "Переменная сессии 'username' не установлена.";
}