<?php
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

    // Insere os dados no banco de dados
    $sql = "INSERT INTO pacientes (nome, endereco, cpf, idade, categoria, demanda, uso_medicamentos, medicamentos, tempo_medicacao, quantidade_medicacao, risco, autorizacao, historico_familiar, relacoes_interpessoais, doencas_genograma, acompanhamento_rotina, descricao_sessoes, numero_sessao, tipo_declaracao, encaminhamento)
    VALUES ('$nome', '$endereco', '$cpf', '$idade', '$categoria', '$demanda', '$uso_medicamentos', '$medicamentos', '$tempo_medicacao', '$quantidade_medicacao', '$risco', '$autorizacao', '$historico_familiar', '$relacoes_interpessoais', '$doencas_genograma', '$acompanhamento_rotina', '$descricao_sessoes', '$numero_sessao', '$tipo_declaracao', '$encaminhamento')";

// Mensagem de confirmação (simulando a inserção de dados)
$message = "Paciente cadastrado com sucesso!<br>";
$message .= "Nome: $nome<br>";
$message .= "Endereço: $endereco<br>";
$message .= "CPF: $cpf<br>";
$message .= "Idade: $idade<br>";
$message .= "Categoria: $categoria<br>";
$message .= "Demanda: $demanda<br>";
$message .= "Uso de Medicamentos: " . ($uso_medicamentos ? 'Sim' : 'Não') . "<br>";
if ($uso_medicamentos) {
    $message .= "Medicamentos: $medicamentos<br>";
    $message .= "Tempo de uso: $tempo_medicacao<br>";
    $message .= "Quantidade: $quantidade_medicacao<br>";
}
$message .= "Tem risco: " . ($risco ? 'Sim' : 'Não') . "<br>";
$message .= "Autorização: " . ($autorizacao ? 'Sim' : 'Não') . "<br>";
$message .= "Histórico Familiar: $historico_familiar<br>";
$message .= "Relações Interpessoais: $relacoes_interpessoais<br>";
$message .= "Doenças Genograma: $doencas_genograma<br>";
$message .= "Acompanhamento de Rotina: $acompanhamento_rotina<br>";
$message .= "Descrição das Sessões: $descricao_sessoes<br>";
$message .= "Número da Sessão: $numero_sessao<br>";
$message .= "Declaração: $tipo_declaracao<br>";
$message .= "Encaminhamento: $encaminhamento<br>";

echo $message;
