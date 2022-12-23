<?php
$servername = "localhost";
$username = "admin";
$password = "dantas2022";

global $conn;

try {
  $conn = new PDO('mysql:host=localhost;dbname=projeto_banco', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "a conexao com o banco ta tinindo" . PHP_EOL;
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>