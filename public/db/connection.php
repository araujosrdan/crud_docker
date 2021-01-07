<?php
$pdo = null;
try {
    $pdo = new PDO('mysql:host=mysql;dbname=crud_docker', 'root', 'root');
    //echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}