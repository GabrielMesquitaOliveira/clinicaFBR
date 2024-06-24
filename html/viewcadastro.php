<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Pacientes</title>
    <link href="../css/teste.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <h1></h1>
    <?php
    if (!empty($message)) {
        echo "<div class='message'>$message</div>";
    }
    ?>
    <form action="../controler/cadastro.php" method="post">
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label>Endereço:</label>
            <input type="text" name="endereco" required>
        </div>
        <div>
            <label>CPF:</label>
            <input type="text" name="cpf" required>
        </div>
        <div>
            <label>Idade:</label>
            <input type="number" name="idade" required>
        </div>
        <div>
            <label>Categoria:</label>
            <select name="categoria" required>
                <option value="Criança">Criança</option>
                <option value="Adolescente">Adolescente</option>
                <option value="Adulto">Adulto</option>
                <option value="Idoso">Idoso</option>
            </select>
        </div>
        <div>
            <label>Demanda:</label>
            <select name="demanda" required>
                <option value="Medico">Médico</option>
                <option value="Populacao/Ongs">População/ONGs</option>
                <option value="Espontanea">Espontânea</option>
            </select>
        </div>
        <div>
            <label class="w-100">Faz uso de medicamentos?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="uso_medicamentos" type="radio" id="inlineCheckbox1" value="1">
                <label class="form-check-label" for="inlineCheckbox1">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="uso_medicamentos" type="radio" id="inlineCheckbox2" value="0" checked>
                <label class="form-check-label" for="inlineCheckbox2">Não</label>
            </div>
        </div>
        <div>
            <label>Se sim, quais:</label>
            <input type="text" name="medicamentos">
        </div>
        <div>
            <label>Tempo de uso:</label>
            <input type="text" name="tempo_medicacao">
        </div>
        <div>
            <label>Quantidade:</label>
            <input type="text" name="quantidade_medicacao">
        </div>
        <div>
            <label class="w-100">Tem risco?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="risco" type="radio" id="inlineCheckbox1" value="1">
                <label class="form-check-label" for="inlineCheckbox1">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="risco" type="radio" id="inlineCheckbox2" value="0" checked>
                <label class="form-check-label" for="inlineCheckbox2">Não</label>
            </div>
        </div>
        <div>
            <label>Histórico Familiar:</label>
            <textarea name="historico_familiar" required></textarea>
        </div>
        <div>
            <label>Relações Interpessoais:</label>
            <textarea name="relacoes_interpessoais" required></textarea>
        </div>
        <div>
            <label>Doenças Genograma:</label>
            <textarea name="doencas_genograma" required></textarea>
        </div>
        <div>
            <label>Acompanhamento de Rotina:</label>
            <textarea name="acompanhamento_rotina" required></textarea>
        </div>
        <div>
            <label>Descrição das Sessões:</label>
            <textarea name="descricao_sessoes" required></textarea>
        </div>
        <div>
            <label>Número da Sessão:</label>
            <input type="number" name="numero_sessao" required>
        </div>
        <div>
            <label>Declaração:</label>
            <select name="tipo_declaracao" required>
                <option value="Escola">Escola</option>
                <option value="Trabalho">Trabalho</option>
            </select>
        </div>
        <div>
            <label>Encaminhamento:</label>
            <select name="encaminhamento" required>
                <option value="Medico">Médico</option>
                <option value="Psiquiatra">Psiquiatra</option>
                <option value="CAPS">CAPS</option>
            </select>
        </div>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>