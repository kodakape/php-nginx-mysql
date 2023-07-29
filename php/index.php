<?php
$host = 'mysql_server';
$user = 'mysql_user';
$password = 'mysql_password';
$database = 'mysql_database_name';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully to MySQL server!';

$conn->close();
?>

