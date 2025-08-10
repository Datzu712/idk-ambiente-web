<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/auth/User.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login($email, $password) {
        $user = $this->userModel->login($email, $password);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            return true;
        }
        return false;
    }

    public function register($username, $email, $password) {
        return $this->userModel->register($username, $email, $password);
    }

    public function logout() {
        session_destroy();
        header('Location: /index.php');
        exit;
    }

    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }
}
