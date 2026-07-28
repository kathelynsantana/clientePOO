<?php namespace Projeto\ti23t\View;//Nome do Projeto

    //Incluindo o cabeçalho
    include('cabecalho.php');
    
    //Conectando ao Model e Control...
    require_once('../Model/Cliente.php');//Acessando o arquivo Cliente.php que está na pasta Model...
    require_once('../Control/ClienteControl.php');//Acessando o arquivo ClienteControl.php que está na pasta Control...

    //Acessando as classes da Model e Control...
    use Projeto\ti23t\Model\Cliente;//Acessando a classe "Cliente" que está na pasta Model...
    use Projeto\ti23t\Control\Control;//Acessando a classe "ClienteControl" que está na pasta Control...

    //Iniciando a sessão para consultar os dados...
    session_start();

    //Coletando o objeto...
    $clienteRecuperado = $_SESSION["cliente"];
    $controle = new Control($clienteRecuperado);

    //Chamando o método de consulta para mostrar todos os dados do cliente cadastrado...
    $controle->consultarCliente(); 

?>

<!-- ------------------------------------------------------------------------------------------------------------------------- -->

<!-- Página de Consulta de Dados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Cliente</title>
</head>
<body>

    <!-- Título da Página -->
    <h1>Consultar um Cliente</h1>

    <?php

        //Chamando o método de consulta para mostrar todos os dados do cliente cadastrado...
        echo $controle->consultarCliente();

    ?>

    <!-- Botão de Voltar -->
    <a href="../index.php"><button>Voltar</button></a>

</body>
</html>
<!-- Fim da Página de Consulta de Dados -->