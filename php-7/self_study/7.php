<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["theme"])) {
    setcookie("theme", $_POST["theme"], time() + 86400, "/");
}

$currentTheme = $_COOKIE["theme"] ?? "light";
?>
<form method="post">
    <label>Выберите тему:</label>
    <select name="theme">
        <option value="light" <?= $currentTheme == "light" ? "selected" : "" ?>>Светлая</option>
        <option value="dark" <?= $currentTheme == "dark" ? "selected" : "" ?>>Темная</option>
    </select>
    <button type="submit">Сохранить</button>
</form>
<p>Текущая тема: <?= htmlspecialchars($currentTheme) ?></p>