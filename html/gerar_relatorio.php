<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório do Paciente</title>
</head>
<body>
    <h1>Buscar Paciente</h1>
    <form action="../controler/cadastro.php" method="post">
        <label for="paciente_id">ID do Paciente:</label>
        <input type="text" id="paciente_id" name="paciente_id">
        <button type="submit">Buscar</button>
    </form>
    <form method="GET" action="">
        <label for="cpf">CPF do Paciente:</label>
        <input type="text" id="cpf" name="cpf">
        <button type="submit">Buscar</button>
    </form>

    <div class="report">
        <?php if ($paciente): ?>
            <h1>Relatório do Paciente</h1>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($paciente['nome']); ?></p>
            <p><strong>Endereço:</strong> <?php echo htmlspecialchars($paciente['endereco']); ?></p>
            <p><strong>CPF:</strong> <?php echo htmlspecialchars($paciente['cpf']); ?></p>
            <p><strong>Idade:</strong> <?php echo htmlspecialchars($paciente['idade']); ?></p>
            <p><strong>Categoria:</strong> <?php echo htmlspecialchars($paciente['categoria']); ?></p>
            <p><strong>Demanda:</strong> <?php echo htmlspecialchars($paciente['demanda']); ?></p>
            <p><strong>Uso de medicamentos:</strong> <?php echo $paciente['uso_medicamentos'] ? 'Sim' : 'Não'; ?></p>
            <?php if ($paciente['uso_medicamentos']): ?>
                <p><strong>Medicamentos:</strong> <?php echo htmlspecialchars($paciente['medicamentos']); ?></p>
                <p><strong>Tempo de uso:</strong> <?php echo htmlspecialchars($paciente['tempo_medicacao']); ?></p>
                <p><strong>Quantidade:</strong> <?php echo htmlspecialchars($paciente['quantidade_medicacao']); ?></p>
            <?php endif; ?>
            <p><strong>Tem risco:</strong> <?php echo $paciente['risco'] ? 'Sim' : 'Não'; ?></p>
            <p><strong>Autorização:</strong> <?php echo $paciente['autorizacao'] ? 'Sim' : 'Não'; ?></p>
            <p><strong>Histórico Familiar:</strong> <?php echo htmlspecialchars($paciente['historico_familiar']); ?></p>
            <p><strong>Relações Interpessoais:</strong> <?php echo htmlspecialchars($paciente['relacoes_interpessoais']); ?></p>
            <p><strong>Doenças Genograma:</strong> <?php echo htmlspecialchars($paciente['doencas_genograma']); ?></p>
            <p><strong>Acompanhamento de Rotina:</strong> <?php echo htmlspecialchars($paciente['acompanhamento_rotina']); ?></p>
            <p><strong>Descrição das Sessões:</strong> <?php echo htmlspecialchars($paciente['descricao_sessoes']); ?></p>
            <p><strong>Número da Sessão:</strong> <?php echo htmlspecialchars($paciente['numero_sessao']); ?></p>
            <p><strong>Declaração:</strong> <?php echo htmlspecialchars($paciente['tipo_declaracao']); ?></p>
            <p><strong>Encaminhamento:</strong> <?php echo htmlspecialchars($paciente['encaminhamento']); ?></p>

            <?php if (count($sessoes) > 0): ?>
                <h2>Sessões</h2>
                <?php foreach ($sessoes as $sessao): ?>
                    <p><strong>Número da Sessão:</strong> <?php echo htmlspecialchars($sessao['numero_sessao']); ?></p>
                    <p><strong>Descrição:</strong> <?php echo htmlspecialchars($sessao['descricao']); ?></p>
                    <p><strong>Data:</strong> <?php echo htmlspecialchars($sessao['data']); ?></p>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhuma sessão encontrada.</p>
            <?php endif; ?>
        <?php else: ?>
            <p><?php echo (isset($_GET['paciente_id']) || isset($_GET['cpf'])) ? 'Paciente não encontrado.' : 'ID do paciente ou CPF não fornecido.'; ?></p>
        <?php endif; ?>
    </div>

    <?php
    // Fechar a conexão
    if ($conn) {
        $conn->close();
    }
    ?>
</body>
</html>