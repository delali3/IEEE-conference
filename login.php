<?php
session_start();

// echo password_hash('IEEE@2024conference', PASSWORD_DEFAULT);die;
// Define your secret password (hashed)
$secret_password = '$2y$10$rjYzX6CmURn7V8.2SOe6K.pNLx0d8sud0a8bjae36543ib2EV1aOe';

$login_error = false;

// Check if the password is submitted and verify it
if (isset($_POST['password']) && !password_verify($_POST['password'], $secret_password)) {
    $login_error = true;
} elseif (isset($_POST['password'])) {
    $_SESSION['authenticated'] = true;
    $_SESSION['LAST_ACTIVITY'] = time(); // Set the last activity timestamp
    header("Location: dashboard.php");
    exit;
}

// If not authenticated, show the login form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 20px;
            font-size: 16px;
            color: #333;
        }
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #333;
        }
        .error {
            color: #ff0000;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <?php if ($login_error): ?>
            <div class="error">Incorrect password. Please try again.</div>
        <?php endif; ?>
        <label for="password">Enter password to access the dashboard:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
