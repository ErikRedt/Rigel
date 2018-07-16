<?php

$server = 'localhost';
$username = 'li313294633';
$password = 'SecureSSHRigel27';
$database = 'li313294633';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
