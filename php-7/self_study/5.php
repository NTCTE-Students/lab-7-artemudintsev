<?php
$visited = isset($_COOKIE["visited"]) ? $_COOKIE["visited"] +1:1;
setcookie("visited",$visited,time() + 86400, "/");
echo "Вы посетили эту страницу $visited раз(а)";