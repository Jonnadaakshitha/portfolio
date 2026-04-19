<?php
// check-user.php
header('Content-Type: application/json');

// Get the email from the AJAX request
$email = isset($_GET['email']) ? $_GET['email'] : '';

// Simulated "database" of taken emails
$taken_emails = ['admin@gmail.com', 'test@test.com', 'akshitha@gmail.com'];

if (in_array($email, $taken_emails)) {
    echo json_encode(['status' => 'taken', 'message' => 'This email is already registered.']);
} else {
    echo json_encode(['status' => 'available', 'message' => 'Email is available!']);
}
?>