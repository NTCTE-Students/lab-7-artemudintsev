<?php
setcookie("font_size", "14px", time() + 86400, "/");
setcookie("layout", "grid", time() + 86400, "/");

echo "Настройки:<br>";
foreach ($_COOKIE as $key => $value) {
    echo "$key: $value <br>";
}