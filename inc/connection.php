<?php
$server_name = '127.0.0.1';
$user_name = 'root';
try {
    $db = new PDO("mysql:host=$server_name;dbname=netmatters", $user_name);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}

