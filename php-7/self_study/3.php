<?php 
setcookie("preferences","dark_mode",time() + 604800, "/");
if(isset($_COOKIE["preferences"])) {
    echo "Значение куки 'preferences': ". $_COOKIE["preferences"];
} else {
    echo "Куки 'preferences' не установлены";
}