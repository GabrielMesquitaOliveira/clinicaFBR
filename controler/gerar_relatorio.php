<?php
require_once '../controler/conexao.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para sanitizar dados
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$paciente = null;
$sessoes = [];

if ((isset($_GET['paciente_id']) && !empty($_GET['paciente_id'])) || (isset($_GET['cpf']) && !empty($_GET['cpf']))) {
    if (isset($_GET['paciente_id']) && !empty($_GET['paciente_id'])) {
        $paciente_id = $conn->real_escape_string(sanitize_input($_GET['paciente_id']));
        $sql = "SELECT * FROM pacientes WHERE id = $paciente_id";
    } elseif (isset($_GET['cpf']) && !empty($_GET['cpf'])) {
        $cpf = $conn->real_escape_string(sanitize_input($_GET['cpf']));
        $sql = "SELECT * FROM pacientes WHERE cpf = '$cpf'";
    }

    if (isset($sql)) {
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $paciente = $result->fetch_assoc();
            $paciente_id = $paciente['id']; // Obtém o ID do paciente encontrado

            // Busca as sessões do paciente
            $sql_sessoes = "SELECT * FROM sessoes WHERE paciente_id = $paciente_id";
            $result_sessoes = $conn->query($sql_sessoes);

            if ($result_sessoes && $result_sessoes->num_rows > 0) {
                while ($sessao = $result_sessoes->fetch_assoc()) {
                    $sessoes[] = $sessao;
                }
            }
        }
    }
}
?>
