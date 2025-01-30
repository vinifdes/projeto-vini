<?php
$host = 'mysql'; // Nome do serviço no Docker Compose
$db = 'estudos';
$user = 'user';
$password = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    echo "Conexão com o MySQL bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
