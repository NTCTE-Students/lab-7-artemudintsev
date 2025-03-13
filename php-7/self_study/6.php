<?php
setcookie("country", "Russia", time() + 86400, "/");
if (isset($_COOKIE["country"])) {
    echo "Добро пожаловать, пользователь из " . $_COOKIE["country"] . "!";
} else {
    echo "Страна не определена.";
}