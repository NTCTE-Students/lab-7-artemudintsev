<?php 
setcookie('user','admin', time() + 86400, "/");
if (isset($_COOKIE['user'])) {
    echo "Куки 'user' установлены: " . $_COOKIE["user"];
} else {
    echo "Куки 'user' не установлены";
}
