<?php
require 'db_connect.php';

// Example Query: Fetch Users
$stmt = $bdd->query("SELECT * FROM users");
$users = $stmt->fetchAll();

foreach ($users as $user) {
    echo "User: " . $user['name'] . "<br>";
}
?>
