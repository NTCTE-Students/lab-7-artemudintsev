<?php 
setcookie("user","guest",time() + 86400,"/");
if (isset($_COOKIE["user"])) {
    echo "Новое значение куки 'user': " . $_COOKIE["user"];
} else {
    echo "Куки 'user' не установлены";
}