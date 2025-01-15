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

    // Increment the counter
    $stmt = $pdo->prepare("UPDATE viewer_counter SET view_count = view_count + 1 WHERE page_name = 'homepage'");
    $stmt->execute();

    // Fetch the updated count
    $stmt = $pdo->prepare("SELECT view_count FROM viewer_counter WHERE page_name = 'homepage'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Output the updated count
    echo $result['view_count'];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
