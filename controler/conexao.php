<?php
// Função para sanitizar dados de entrada
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Clinica";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
