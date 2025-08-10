<?php
session_start();
require_once __DIR__ . '/auth/AuthController.php';

$auth = new AuthController();
$page = $_GET['page'] ?? '';

switch ($page) {
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');
            if ($auth->login($email, $password)) {
                $_SESSION['success'] = "Bienvenido, has iniciado sesión.";
                header('Location: index.php');
                exit;
            } else {
                $error = "Credenciales inválidas.";
            }
        }
        require __DIR__ . '/auth/login.php';
        break;

    case 'register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');
            if ($auth->register($username, $email, $password)) {
                $_SESSION['success'] = "Registro exitoso. Inicia sesión.";
                header('Location: index.php?page=login');
                exit;
            } else {
                $error = "Error al registrar el usuario.";
            }
        }
        require __DIR__ . '/auth/register.php';
        break;

    case 'logout':
        $auth->logout();
        header('Location: index.php');
        exit;

    case 'pacientes':
        if (!$auth->isLoggedIn()) {
            header('Location: index.php?page=login');
            exit;
        }
        require __DIR__ . '/patients/views/pacientes.php';
        break;

    case 'citas':
        if (!$auth->isLoggedIn()) {
            header('Location: index.php?page=login');
            exit;
        }
        require __DIR__ . '/views/patients/citas.php';
        break;

    default:
        if (!$auth->isLoggedIn()) {
            require __DIR__ . '/views/welcome.php';
        } else {
            require __DIR__ . '/views/dashboard.php';
        }
        break;
}
