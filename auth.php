<?php
session_start();
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userInput = $_POST['username'];
    $passInput = $_POST['password'];

    // 1. Prepare statement to prevent SQL Injection
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$userInput]);
    $user = $stmt->fetch();

    if ($user) {
        // 2. Check password (using password_verify for security)
        // If you stored 'Ath@rv' as plain text (not recommended), use: if($passInput == $user['password'])
        if (password_verify($passInput, $user['password'])) {
            
            // 3. Set Session Variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            // Redirect to Dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: index.php?error=invalid_password");
            exit();
        }
    } else {
        header("Location: index.php?error=user_not_found");
        exit();
    }
}
?>