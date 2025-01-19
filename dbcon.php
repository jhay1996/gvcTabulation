<?php
try {
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=jms_db', 'root', '');
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

