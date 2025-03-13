<?php
setcookie("session_id", "", time() - 3600, "/");
echo isset($_COOKIE["session_id"]) ? "Куки 'session_id' все еще существует." : "Куки 'session_id' удалены.";
