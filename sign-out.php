<?php

session_start();

unset($_SESSION["user_login_id"]);

$referrer = $_SERVER['HTTP_REFERER'] ?? ".";
header('Location: ' . $referrer);

?>