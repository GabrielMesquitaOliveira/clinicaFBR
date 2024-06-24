<?php

include 'conexao.php';
if (true) {
    // Sanitização dos dados de entrada
    $nome = sanitize_input($_POST['nome']);
    $endereco = sanitize_input($_POST['endereco']);
    $cpf = sanitize_input($_POST['cpf']);
    $idade = sanitize_input($_POST['idade']);
    $categoria = sanitize_input($_POST['categoria']);
    $demanda = sanitize_input($_POST['demanda']);
    $uso_medicamentos = sanitize_input($_POST['uso_medicamentos']);
    $medicamentos = sanitize_input($_POST['medicamentos']);
    $tempo_medicacao = sanitize_input($_POST['tempo_medicacao']);
    $quantidade_medicacao = sanitize_input($_POST['quantidade_medicacao']);
    $risco = sanitize_input($_POST['risco']);
    $historico_familiar = sanitize_input($_POST['historico_familiar']);
    $relacoes_interpessoais = sanitize_input($_POST['relacoes_interpessoais']);
    $doencas_genograma = sanitize_input($_POST['doencas_genograma']);
    $acompanhamento_rotina = sanitize_input($_POST['acompanhamento_rotina']);
    $descricao_sessoes = sanitize_input($_POST['descricao_sessoes']);
    $numero_sessao = sanitize_input($_POST['numero_sessao']);
    $tipo_declaracao = sanitize_input($_POST['tipo_declaracao']);
    $encaminhamento = sanitize_input($_POST['encaminhamento']);

    // Regra de autorização
    if ($categoria == "Criança" && $idade <= 14) {
        $autorizacao = 1; // Crianças até 14 anos precisam de autorização
    } elseif ($categoria == "Adolescente" && $idade >= 15 && $idade <= 18 && $risco == 1) {
        $autorizacao = 1; // Adolescentes de 15 a 18 anos com risco precisam de autorização
    }

    // Insere os dados no banco de dados
    $sql = "INSERT INTO pacientes (nome, endereco, cpf, idade, categoria, demanda, uso_medicamentos, medicamentos, tempo_medicacao, quantidade_medicacao, risco, autorizacao, historico_familiar, relacoes_interpessoais, doencas_genograma, acompanhamento_rotina, descricao_sessoes, numero_sessao, tipo_declaracao, encaminhamento)
    VALUES ('$nome', '$endereco', '$cpf', '$idade', '$categoria', '$demanda', '$uso_medicamentos', '$medicamentos', '$tempo_medicacao', '$quantidade_medicacao', '$risco', '$autorizacao', '$historico_familiar', '$relacoes_interpessoais', '$doencas_genograma', '$acompanhamento_rotina', '$descricao_sessoes', '$numero_sessao', '$tipo_declaracao', '$encaminhamento')";

    if ($conn->query($sql) === TRUE) {
        $message = "Paciente cadastrado com sucesso!";
    } else {
        $message = "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

echo 'foi';