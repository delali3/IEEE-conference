<?php
session_start();
include "./dbh.inc.php"; // Ensure this connects to your database

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Function to validate required inputs
function validateInput($data) {
    return !empty($data);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CSRF token validation
    $csrf_token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'], $csrf_token)) {
        echo json_encode(["status" => "error", "message" => "Invalid CSRF token"]);
        exit;
    }


    // Validate required fields first
    if (!filter_var($_POST['participantEmail'], FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format"]);
        exit;
    }

    if (!validateInput($_POST['participantName']) || !validateInput($_POST['phoneNumber']) || !validateInput($_POST['city'])) {
        echo json_encode(["status" => "error", "message" => "Please fill in all required fields"]);
        exit;
    }

    // IEEE membership check before processing further
    if ($_POST['ieee_member'] === 'Yes') {
        if (empty($_POST['ieee_id'])) {
            echo json_encode(["status" => "error", "message" => "You must provide your IEEE Membership ID"]);
            exit;
        }
    } else {
        // If user is not an IEEE member, set ieee_id to null
        $_POST['ieee_id'] = null;
    }

    // Handle file upload
    if (isset($_FILES['receiptUpload'])) {
        $receipt = $_FILES['receiptUpload'];
        $allowed_types = ['pdf', 'jpg', 'jpeg', 'png'];
        $receipt_ext = strtolower(pathinfo($receipt['name'], PATHINFO_EXTENSION));

        // Check file type
        if (!in_array($receipt_ext, $allowed_types)) {
            echo json_encode(["status" => "error", "message" => "Invalid file type"]);
            exit;
        }

        // Check file size (example: max 5MB)
        if ($receipt['size'] > 5000000) {
            echo json_encode(["status" => "error", "message" => "File size exceeds limit"]);
            exit;
        }

        // Create upload directory if it doesn't exist
        $upload_dir = '../uploads/';
        if (!is_dir($upload_dir)) {
            if (!mkdir($upload_dir, 0777, true)) {
                echo json_encode(["status" => "error", "message" => "Failed to create upload directory"]);
                exit;
            }
        }

        $file_name = uniqid() . '.' . $receipt_ext;
        $upload_file = $upload_dir . $file_name;

        if (!move_uploaded_file($receipt['tmp_name'], $upload_file)) {
            echo json_encode(["status" => "error", "message" => "Failed to upload receipt"]);
            exit;
        }
    } else {
        echo json_encode(["status" => "error", "message" => "No receipt uploaded"]);
        exit;
    }

    // Sanitize and prepare form data after validation
    $full_name = sanitizeInput($_POST['participantName']);
    $email = sanitizeInput($_POST['participantEmail']);
    $title = sanitizeInput($_POST['title']);
    $paperID = sanitizeInput($_POST['paperID']);
    $designation = sanitizeInput($_POST['designation']);
    $gender = sanitizeInput($_POST['gender']);
    $phone_number = sanitizeInput($_POST['phoneNumber']);
    $address = sanitizeInput($_POST['address']);
    $city = sanitizeInput($_POST['city']);
    $country = sanitizeInput($_POST['country']);
    $institution = sanitizeInput($_POST['institution']);
    $department = sanitizeInput($_POST['department']);
    $role = sanitizeInput($_POST['role']);
    $transaction_id = sanitizeInput($_POST['transactionID']);
    $payment_date = sanitizeInput($_POST['paymentDate']);
    $payment_type = sanitizeInput($_POST['paymentType']);
    $agree_terms = isset($_POST['agreeTerms']) ? 1 : 0;
    $ieee_member = sanitizeInput($_POST['ieee_member']);
    $ieee_id = sanitizeInput($_POST['ieee_id']);

    // Prepare and bind statement for database insertion
    $stmt = $conn->prepare("INSERT INTO registrations 
        (full_name, email, title, designation, gender, contact_number, address, city, country, institution, department, role, transaction_id, payment_date, payment_type, receipt_file, agree_terms, ieee_member, ieee_id, paper_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    if ($stmt === false) {
        error_log("Failed to prepare statement: " . $conn->error);
        echo json_encode(["status" => "error", "message" => "Internal server error"]);
        exit;
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("ssssssssssssssssisss", $full_name, $email, $title, $designation, $gender, $phone_number, $address, $city, $country, $institution, $department, $role, $transaction_id, $payment_date, $payment_type, $file_name, $agree_terms, $ieee_member, $ieee_id, $paperID);

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
