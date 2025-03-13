<?php
session_start();
if (!isset($_SESSION["username"])) {
    $_SESSION["username"] = "Гость";
}
?>
<p>Привет, <?= $_SESSION["username"] ?>!</p>
<a href="logout.php">Выйти</a>