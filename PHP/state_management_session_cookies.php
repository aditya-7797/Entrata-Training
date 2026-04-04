<?php

session_start();

// Session example: track visit count in current browser session.
if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 1;
} else {
    $_SESSION['visit_count']++;
}

// Cookie example: remember username for 1 day.
if (!isset($_COOKIE['username'])) {
    setcookie('username', 'GuestUser', time() + 86400, '/');
    $cookieMessage = 'Cookie has been set. Refresh the page to read it.';
} else {
    $cookieMessage = 'Cookie username: ' . $_COOKIE['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions and Cookies</title>
</head>
<body>
    <h1>State Management in PHP</h1>
    <p>Session visit count: <?= (int) $_SESSION['visit_count'] ?></p>
    <p><?= htmlspecialchars($cookieMessage, ENT_QUOTES, 'UTF-8') ?></p>
</body>
</html>
