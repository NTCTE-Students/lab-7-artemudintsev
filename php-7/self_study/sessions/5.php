<?php
session_start();
if (!isset($_SESSION["first_visit_time"])) {
    $_SESSION["first_visit_time"] = date("Y-m-d H:i:s");
}
$_SESSION["last_visit_time"] = date("Y-m-d H:i:s");
?>
<p>Первый визит: <?= $_SESSION["first_visit_time"] ?></p>
<p>Последний визит: <?= $_SESSION["last_visit_time"] ?></p>