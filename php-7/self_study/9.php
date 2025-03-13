<?php
if (!isset($_COOKIE["loggedin"])) {
    header("Location: login.php");
    exit;
}
echo "Вы авторизованы!";