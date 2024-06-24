<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro De Pacientes</title>
<link href="../css/teste.css" rel="stylesheet"/>
</head>
<body>
    <h1></h1>
    <?php
    if (!empty($message)) {
        echo "<div class='message'>$message</div>";
    }
    ?>
    <form action="../controler/cadastro.php" method="post">
        <div class="form-group">
            <label>Nome:</label> 
            <input type="text" name="nome" required>
        </div>
        <div class="form-group">
            <label>Endereço:</label> 
            <input type="text" name="endereco" required>
        </div>
        <div class="form-group">
            <label>CPF:</label> 
            <input type="text" name="cpf" required>
        </div>
        <div class="form-group">
            <label>Idade:</label> 
            <input type="number" name="idade" required>
        </div>
        <div class="form-group">
            <label>Categoria:</label>
            <select name="categoria" required>
                <option value="Criança">Criança</option>
                <option value="Adolescente">Adolescente</option>
                <option value="Adulto">Adulto</option>
                <option value="Idoso">Idoso</option>
            </select>
        </div>
        <div class="form-group">
            <label>Demanda:</label>
            <select name="demanda" required>
                <option value="Medico">Médico</option>
                <option value="Populacao/Ongs">População/ONGs</option>
                <option value="Espontanea">Espontânea</option>
            </select>
        </div>
        <div class="form-group">
            <label>Uso de medicamentos:</label> 
            <input type="radio" name="uso_medicamentos" value="1"> Sim
            <input type="radio" name="uso_medicamentos" value="0" checked> Não
        </div>
        <div class="form-group">
            <label>Se sim, quais:</label> 
            <input type="text" name="medicamentos">
        </div>
        <div class="form-group">
            <label>Tempo de uso:</label> 
            <input type="text" name="tempo_medicacao">
        </div>
        <div class="form-group">
            <label>Quantidade:</label> 
            <input type="text" name="quantidade_medicacao">
        </div>
        <div class="form-group">
            <label>Tem risco?</label> 
            <input type="radio" name="risco" value="1"> Sim
            <input type="radio" name="risco" value="0" checked> Não
        </div>
        <div class="form-group">
            <label>Histórico Familiar:</label> 
            <textarea name="historico_familiar" required></textarea>
        </div>
        <div class="form-group">
            <label>Relações Interpessoais:</label> 
            <textarea name="relacoes_interpessoais" required></textarea>
        </div>
        <div class="form-group">
            <label>Doenças Genograma:</label> 
            <textarea name="doencas_genograma" required></textarea>
        </div>
        <div class="form-group">
            <label>Acompanhamento de Rotina:</label> 
            <textarea name="acompanhamento_rotina" required></textarea>
        </div>
        <div class="form-group">
            <label>Descrição das Sessões:</label> 
            <textarea name="descricao_sessoes" required></textarea>
        </div>
        <div class="form-group">
            <label>Número da Sessão:</label> 
            <input type="number" name="numero_sessao" required>
        </div>
        <div class="form-group">
            <label>Declaração:</label> 
            <select name="tipo_declaracao" required>
                <option value="Escola">Escola</option>
                <option value="Trabalho">Trabalho</option>
            </select>
        </div>
        <div class="form-group">
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
