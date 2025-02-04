<?php
header('Content-Type: application/json');

// Database connection
$host = "localhost";
$user = "root"; // XAMPP default
$pass = ""; // No password for local
$dbname = "counter_db"; // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    echo json_encode(["error" => "Database connection failed"]);
    exit();
}

// Get the counter value
$sql = "SELECT count FROM page_counter WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentCount = intval($row["count"]); // Convert to integer

    // Increment count
    $newCount = $currentCount + 1;
    $updateSQL = "UPDATE page_counter SET count = $newCount WHERE id = 1";
    $conn->query($updateSQL);

    // Return the correct count
    echo json_encode(["count" => $newCount]);
} else {
    echo json_encode(["count" => 104261]); // Fallback default
}

$conn->close();
?>