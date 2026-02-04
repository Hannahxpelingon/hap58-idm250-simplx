<!-- <////?php
// database connection settings for my own phpmyadmin and MAMP ONLY.... once i find the drexel admin thing again ill do it there
$host = 'localhost';
$dbname = 'simplx_db';
$username = 'root';
$password = 'root'; 
// MAMP pass is root... not empty

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?> -->

<?php
$host = 'localhost';  // whatever drexel provides
$dbname = 'jls922_db';
$username = 'jls922';
$password = '8l1i8Kg0B12ghaZ/'; //same one that you use to log in to phpmyadmin

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>