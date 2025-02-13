<?php
session_start();

// Function to authenticate user
function login($username, $password) {
    if (!empty($username) && $username === $password) {
        $_SESSION['user'] = $username;
        return true;
    }
    return false;
}

// Function to check if user is authenticated
function isAuthenticated() {
    return isset($_SESSION['user']);
}

// Function to log out user
function logout() {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
