<?php
session_start();
require_once 'views/auth/AuthController.php';

$auth = new AuthController();
$page = $_GET['page'] ?? '';

switch ($page) {
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            if ($auth->login($email, $password)) {
                header('Location: index.php');
                exit;
            } else {
                $error = "Credenciales inválidas.";
            }
        }
        require 'views/auth/login.php';
        break;

    case 'register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            if ($auth->register($username, $email, $password)) {
                header('Location: index.php?page=login');
                exit;
            } else {
                $error = "Error al registrar el usuario.";
            }
        }
        require 'views/auth/register.php';
        break;

    case 'logout':
        $auth->logout();
        break;

    default:
        if (!$auth->isLoggedIn()) {
            require 'views/welcome.php';
        } else {
            require 'views/layout/dashboard.php';
        }
        break;
}
