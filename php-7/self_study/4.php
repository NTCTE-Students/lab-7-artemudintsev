<?php
setcookie("language","English", time() + 7200, "/"); 
if (isset($_COOKIE["language"])) {
    echo "Выбранный язык: " . $_COOKIE["language"];
} else {
    echo "Куки 'language' не установлены";
}