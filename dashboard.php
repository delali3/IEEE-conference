<?php

// echo password_hash('IEEE@2024conference', PASSWORD_DEFAULT);die;
require_once('./includes/dbh.inc.php');

// Define your secret password (use password hashing)
$secret_password = '$2y$10$rjYzX6CmURn7V8.2SOe6K.pNLx0d8sud0a8bjae36543ib2EV1aOe';

session_start();
$login_error = false;

// Check if the password is submitted and verify it
if (isset($_POST['password']) && !password_verify($_POST['password'], $secret_password)) {
    $login_error = true;
} elseif (isset($_POST['password'])) {
    $_SESSION['authenticated'] = true;
}

if (!isset($_SESSION['authenticated'])) {
    // If not authenticated, show the password form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Page</title>
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
        <label for="password">Enter password to view the site:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
    exit;
}

// If authenticated, show the main content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registration Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: #ffffff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        @media screen and (max-width: 600px) {
            table {
                width: 100%;
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <h2>Registration Details</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Affiliation</th>
            <th>Contact Number</th>
            <th>Paper ID</th>
            <th>Category</th>
            <th>Agreed Terms</th>
        </tr>
        <?php
        $stmt = $conn->query("SELECT id, full_name, email, affiliation, contact_number, paper_id, category, agree_terms FROM registrations");
        while ($row = $stmt->fetch_assoc()) : ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['full_name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['affiliation']) ?></td>
                <td><?= htmlspecialchars($row['contact_number']) ?></td>
                <td><?= htmlspecialchars($row['paper_id']) ?></td>
                <td><?= htmlspecialchars($row['category']) ?></td>
                <td><?= htmlspecialchars($row['agree_terms'] ? 'Yes' : 'No') ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
