<?php
include 'Pages/display';
$server = $_SERVER['REQUEST_URI'];
switch ($server) {
    case "/login":
        include '/Pages/login.php';
        break;
}
?>