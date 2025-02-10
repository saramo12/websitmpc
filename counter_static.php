<?php
include "db_connect.php"; // Include database connection

// Get the current count without increasing it
$sql = "SELECT count FROM page_views WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Display the count
echo $row['count'];

$conn->close();
?>