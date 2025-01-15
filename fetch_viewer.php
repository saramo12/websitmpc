<?php
// Database connection details
$host = 'localhost';
$db = 'website_data';
$user = 'root'; // Replace with your DB username
$password = ''; // Replace with your DB password

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch the viewer count
    $stmt = $pdo->prepare("SELECT view_count FROM viewer_counter WHERE page_name = 'homepage'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Output the viewer count
    echo $result['view_count'];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>