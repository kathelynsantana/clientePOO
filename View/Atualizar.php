<?php namespace Projeto\ti23t\View;//Nome do Projeto

    //Incluindo o cabeçalho
    include('cabecalho.php');

    //Conectando ao Model e Control...
    require_once('../Model/Cliente.php');//Acessando o arquivo Cliente.php que está na pasta Model...
    require_once('../Control/ClienteControl.php');//Acessando o arquivo ClienteControl.php que está na pasta Control...
    require_once('../DAO/atualizar.php');
    require_once('../DAO/conexao.php');

    //Acessando as classes da Model e Control...
    use Projeto\ti23t\Model\Cliente;//Acessando a classe "Cliente" que está na pasta Model...
    use Projeto\ti23t\Control\Control;//Acessando a classe "ClienteControl" que está na pasta Control...
    use Projeto\ti23t\DAO\Atualizar;
    use Projeto\ti23t\DAO\Conexao;

    //Iniciando a sessão para consultar os dados e realizar a atualização...
    //session_start();

    //Coletando o objeto...
    //$clienteRecuperado = $_SESSION["cliente"];

    //Acessar os métodos de atualização dentro da Control...
    //$controle = new Control($clienteRecuperado);

    $conexao = new Conexao();
    $atualizar = new Atualizar();
    $resultado = "";
    

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
        <input type="number" name="codigo" id="codigo"/><br><br>

        <label>Escolha o campo que você deseja atualizar:</label>
        <select name="campo" id="campo">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="endereco">Endereço</option>
            <option value="dataNascimento">Data de Nascimento</option>
        </select><br><br>

        <label>Informe o novo dado:</label>
        <input type="text" name="dado" id="dado"/><br><br>

        <button type="submit">Atualizar

            <!-- Chamando o método de atualização -->
            <?php

                $codigo = $_POST['codigo'];
                $campo = $_POST['campo'];
                $novoDado = $_POST['dado'];

                $resultado = $atualizar->atualizarCliente($conexao, $codigo, $campo, $novoDado);

            ?>

        </button>

    </form>
    <!-- Fim do Formulário de Coleta de Dados -->

    <?php
        echo $resultado;
    ?>

    <!-- Botão de Voltar -->
    <a href="../index.php"><button>Voltar</button></a>

</body>
</html>
<!-- Fim da Página de Atualização -->