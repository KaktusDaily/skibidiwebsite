<?php
try {
    $bdd = new PDO(
        "mysql:host=bk8zo0w3itf8zcji2yn1-mysql.services.clever-cloud.com;dbname=bk8zo0w3itf8zcji2yn1;port=3306",
        "ujwnlcrbgf4avbn0",
        "05fIqHcnfd5LLDLgSKH6",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Enable error reporting
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch results as associative array
            PDO::ATTR_EMULATE_PREPARES => false, // Prevent SQL injection
        ]
    );

    // Log "Hello" 5 times
    for ($i = 0; $i < 5; $i++) {
        error_log("Hello");
    }

    echo "✅ Logged 'Hello' 5 times!";
} catch (PDOException $e) {
    error_log("❌ Database connection failed: " . $e->getMessage());
    die("❌ Database connection failed. Check logs for details.");
}
?>
