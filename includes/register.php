<?php
session_start();
include "./dbh.inc.php";

function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

function validateInput($data) {
    return !empty($data);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $csrf_token = $_POST['csrf_token'] ?? '';

    if (!hash_equals($_SESSION['csrf_token'], $csrf_token)) {
        echo json_encode(["status" => "error", "message" => "Invalid CSRF token"]);
        exit;
    }

    // Sanitize and validate form data
    $full_name = sanitizeInput($_POST['fullName']);
    $email = sanitizeInput($_POST['email']);
    $affiliation = sanitizeInput($_POST['affiliation']);
    $contact_number = sanitizeInput($_POST['contactNumber']);
    $paper_id = sanitizeInput($_POST['paperID']);
    $category = sanitizeInput($_POST['category']);
    $agree_terms = isset($_POST['agreeTerms']) ? 1 : 0;

    // Validate required fields
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format"]);
        exit;
    }

    if (!validateInput($full_name) || !validateInput($affiliation) || !validateInput($contact_number) || !validateInput($category)) {
        echo json_encode(["status" => "error", "message" => "Please fill in all required fields"]);
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO registrations (full_name, email, affiliation, contact_number, paper_id, category, agree_terms) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        error_log("Failed to prepare statement: " . $conn->error);
        echo json_encode(["status" => "error", "message" => "Internal server error"]);
        exit;
    }
    $stmt->bind_param("ssssssi", $full_name, $email, $affiliation, $contact_number, $paper_id, $category, $agree_terms);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Registration successful"]);
    } else {
        error_log("Failed to execute statement: " . $stmt->error);
        echo json_encode(["status" => "error", "message" => "Registration failed"]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>
