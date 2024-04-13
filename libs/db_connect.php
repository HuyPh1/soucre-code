<?php 
    $server = 'localhost';
    $name = 'root';
    $password = '';
    $db = 'db1656';

    $conn = new mysqli($server, $name, $password, $db);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
?>