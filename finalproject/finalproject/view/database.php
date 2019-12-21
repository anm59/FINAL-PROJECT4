<?php
$dsn = 'mysql:host=sql.njit.edu;dbname=anm59';
$username = 'anm59';
$password = 'Z0JKWaEF';
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
}
?>