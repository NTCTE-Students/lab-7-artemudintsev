<?php
session_start();
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["item"])) {
        $_SESSION["cart"][] = $_POST["item"];
    }
    if (isset($_POST["clear"])) {
        $_SESSION["cart"] = [];
    }
}
?>
<form method="post">
    <input type="text" name="item" placeholder="Добавить товар">
    <button type="submit">Добавить</button>
</form>
<form method="post">
    <button type="submit" name="clear">Очистить корзину</button>
</form>
<p>Товары в корзине:</p>
<ul>
    <?php foreach ($_SESSION["cart"] as $item) : ?>
        <li><?= htmlspecialchars($item) ?></li>
    <?php endforeach; ?>
</ul>