<?php namespace Projeto\ti23t\View;//Nome do Projeto

    //Incluindo o cabeçalho
    include('cabecalho.php');

    //Conectando ao Model e Control...
    require_once('../Model/Cliente.php');//Acessando o arquivo Cliente.php que está na pasta Model...
    require_once('../Control/ClienteControl.php');//Acessando o arquivo ClienteControl.php que está na pasta Control...

    //Acessando as classes da Model e Control...
    use Projeto\ti23t\Model\Cliente;//Acessando a classe "Cliente" que está na pasta Model...
    use Projeto\ti23t\Control\Control;//Acessando a classe "ClienteControl" que está na pasta Control...

    //Iniciando a sessão para consultar os dados e realizar a atualização...
    session_start();

    //Coletando o objeto...
    $clienteRecuperado = $_SESSION["cliente"];

    //Acessar os métodos de atualização dentro da Control...
    $controle = new Control($clienteRecuperado);

?>

<!-- ------------------------------------------------------------------------------------------------------------------------- -->

<!-- Página de Atualização -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
</head>
<body>

    <!-- Formulário de Coleta de Dados -->
    <form method="POST">

        <!-- Campo de Código -->
        <label>Código:</label>
        <input type="number" name="codigo" id="codigo" value="<?php echo $clienteRecuperado->codigo;?>" disabled/><br><br>

        <!-- Campo de Nome -->
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $clienteRecuperado->nome;?>"/><br><br>

        <!-- Campo de Telefone -->
        <label>Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $clienteRecuperado->telefone;?>"/><br><br>

        <!-- Campo de Endereço -->
        <label>Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="<?php echo $clienteRecuperado->endereco;?>"/><br><br>

        <!-- Campo de Data de Nascimento -->
        <label>Data de Nascimento:</label>
        <input type="dateTime" name="dataNascimento" id="dataNascimento" value="<?php echo $clienteRecuperado->dataNascimento;?>"/><br><br>

        <button type="submit">Atualizar

            <!-- Chamando o método de atualização -->
            <?php

                //Chamando os métodos de atualização de cada dado...
                $resultadoNome           = $controle->atualizarNome($_POST['nome']);
                $resultadoTelefone       = $controle->atualizarTelefone($_POST['telefone']);
                $resultadoEndereco       = $controle->atualizarEndereco($_POST['endereco']);
                $resultadoDataNascimento = $controle->atualizarDataNascimento($_POST['dataNascimento']);

            ?>

        </button>

    </form>
    <!-- Fim do Formulário de Coleta de Dados -->

    <?php
        echo $resultadoNome."<br>".$resultadoTelefone."<br>".$resultadoEndereco."<br>".$resultadoDataNascimento;
    ?>

    <!-- Botão de Voltar -->
    <a href="../index.php"><button>Voltar</button></a>

</body>
</html>
<!-- Fim da Página de Atualização -->