<?php
require_once 'controllers/SessionController.php';

$controller = new SessionController();

if (isset($_GET['login'])) {
    if ($_GET['login'] === 'true') {
        session_start();
        $_SESSION['user'] = $_GET['Carlos']; 
    }

    $controller->login();
} else {
    $controller->login();
}