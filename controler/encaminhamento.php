<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clincica";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_GET['paciente_id'])) {
    $paciente_id = $_GET['paciente_id'];

    $sql = "SELECT nome, encaminhamento FROM pacientes WHERE id = $paciente_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $paciente = $result->fetch_assoc();
        echo "<h1>Encaminhamento</h1>";
        echo "Encaminhamos o(a) paciente " . $paciente['nome'] . " para " . $paciente['encaminhamento'] . ".<br>";
    } else {
        echo "Paciente não encontrado.<br>";
    }
} else {
    echo "ID do paciente não fornecido.<br>";
}

$conn->close();
