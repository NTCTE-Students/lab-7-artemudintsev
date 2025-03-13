<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: 2.php");
    exit;
}
echo "Добро пожаловать, " . $_SESSION["username"] . "!";