<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $username = $_POST["royasav"];
    $password = $_POST["ro"];

    // TODO: Perform authentication (e.g., check against a database)
    // For testing purposes, let's just echo back the provided data
    echo json_encode([
        "username" => $username,
        "password" => $password,
        "message" => "Authentication successful"
    ]);
} else {
    // Handle non-POST requests (optional)
    http_response_code(405); // Method Not Allowed
    echo "Method Not Allowed";
}
