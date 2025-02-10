<?php
include "db_connect.php"; // Your database connection file

// Get the current count
$sql = "SELECT count FROM page_views WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$current_count = $row['count'];

// Increase the count by 1
$new_count = $current_count + 1;
$update_sql = "UPDATE page_views SET count = $new_count WHERE id = 1";
$conn->query($update_sql);

// Return the updated count
echo $new_count;

$conn->close();
?>