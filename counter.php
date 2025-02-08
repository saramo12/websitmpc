<?php
header('Content-Type: application/json');

$counterFile = 'counter.txt';

// Check if file exists; if not, create it
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0"); // Initialize counter
}

// Read current count
$count = (int) file_get_contents($counterFile);

// Increase counter
$count++;

// Save updated count back to file
if (file_put_contents($counterFile, $count) === false) {
    echo json_encode(["error" => "Failed to write to file"]);
    exit;
}

// Return updated count
echo json_encode(["count" => $count]);
?>