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

$paciente = null;
if (isset($_GET['paciente_id'])) {
    $paciente_id = $_GET['paciente_id'];

    // Usando prepared statements para evitar SQL injection
    $stmt = $conn->prepare("SELECT nome, tipo_declaracao FROM pacientes WHERE id = ?");
    $stmt->bind_param("i", $paciente_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $paciente = $result->fetch_assoc();
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Relatório do Paciente</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="report">
        <?php if ($paciente): ?>
            <h1>Declaração de Comparecimento</h1>
            <p>Declaramos que o(a) paciente <?php echo htmlspecialchars($paciente['nome']); ?> compareceu a esta clínica no dia <?php echo date('d/m/Y'); ?>.</p>
            <p>Motivo da declaração: <?php echo htmlspecialchars($paciente['tipo_declaracao']); ?>.</p>
        <?php elseif (isset($_GET['paciente_id'])): ?>
            <p>Paciente não encontrado.</p>
        <?php else: ?>
            <p>ID do paciente não fornecido.</p>
        <?php endif; ?>
    </div>
</body>
</html>

