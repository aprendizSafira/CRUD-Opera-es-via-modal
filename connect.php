<?php
try {
    global $pdo;
    $pdo = new PDO("mysql:dbname=login_ajax;host=localhost", "root", "");
    
} catch (PDOException $e) {
    echo "ERROR: ".$e->getMessage();
    exit;
}
