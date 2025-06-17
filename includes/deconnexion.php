<?php


if (isLoggedIn()) {
    $stmt = $pdo->prepare("DELETE FROM sessions WHERE id = ?");
    $stmt->execute([session_id()]);
}

// Destroy session
session_destroy();

// Redirect to login page
redirect('login.php');
?>