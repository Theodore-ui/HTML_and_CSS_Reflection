<?php

try {
    $db = new mysqli('localhost','root','','netmatters_news');
    // $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}