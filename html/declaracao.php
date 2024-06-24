<!DOCTYPE html>
<html>
<head>
    <title>Relatório do Paciente</title>
    <link rel="stylesheet" type="text/css" href="declaracao.css">
</head>
<body>
    <div class="report">
        <?php if ($paciente): ?>
            <h1>Declaração de Comparecimento</h1>
            <p>Declaramos que o(a) paciente <?php echo htmlspecialchars($paciente['nome']); ?> compareceu a esta clínica no dia <?php echo date('d/m/Y'); ?>.</p>
            <p>Motivo da declaração: <?php echo htmlspecialchars($paciente['tipo_declaracao']); ?>.</p>
        <?php elseif (isset($_GET['paciente_id'])): ?>
            <p class="error">Paciente não encontrado.</p>
        <?php else: ?>
            <p class="error">ID do paciente não fornecido.</p>
        <?php endif; ?>
    </div>
</body>
</html>
