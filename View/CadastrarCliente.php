<?php namespace Projeto\ti23t\View;//Nome do Projeto
    
    //Abrindo a seção para armazenar os dados...
    session_start();
    
    //Incluindo o cabeçalho
    include('cabecalho.php');
    
    //Conectando ao Model e Control...
    require_once('../DAO/cadastrar.php');
    require_once('../DAO/Conexao.php');
    require_once('../Model/Cliente.php');//Acessando o arquivo Cliente.php que está na pasta Model...
    require_once('../Control/ClienteControl.php');//Acessando o arquivo ClienteControl.php que está na pasta Control...

    //Acessando as classes da Model e Control...
    use Projeto\ti23t\Model\Cliente;//Acessando a classe "Cliente" que está na pasta Model...
    use Projeto\ti23t\Control\Control;//Acessando a classe "ClienteControl" que está na pasta Control...
    use Projeto\ti23t\DAO\Conexao;
    use Projeto\ti23t\DAO\Cadastrar;

    $conexao = new Conexao();
    $inserir = new Cadastrar();
    $mensagem = "";
    
?>

<!-- ------------------------------------------------------------------------------------------------------------------------- -->

<!-- Página de Cadastro -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>

    <!-- Título da Página -->
    <h1>Cadastrar Cliente</h1>
    
    <!-- Formulário de Cadastro -->
    <form method="POST">

        <!-- Informações de Cadastro -->
        <!-- Campo de Código -->

        <!-- Campo de Nome -->
        <label>Nome:</label>
        <input type="text" name="nome" id="nome"/><br><br>

        <!-- Campo de Telefone -->
        <label>Telefone:</label>
        <input type="text" name="telefone" id="telefone"/><br><br>

        <!-- Campo de Endereço -->
        <label>Endereço:</label>
        <input type="text" name="endereco" id="endereco"/><br><br>

        <!-- Campo de Data de Nascimento -->
        <label>Data de Nascimento:</label>
        <input type="dateTime" name="dataNascimento" id="dataNascimento"/><br><br>

        <!-- Fim das Informações de Cadastro -->


        <!-- Botão de Cadastro -->
        <button type="submit">Cadastrar
            <?php
             
                //Verificando se todos os campos foram preenchidos...
                if(isset($_POST['nome']))
                {
                    //Se todos os campos forem preenchidos...
                    //Coletando os dados preenchidos...
                    $nome           = $_POST['nome'];
                    $telefone       = $_POST['telefone'];
                    $endereco       = $_POST['endereco'];
                    $dataNascimento = $_POST['dataNascimento'];

                    $mensagem = $inserir->cadastrarCliente($conexao,
                                                           $nome,
                                                           $telefone,
                                                           $endereco,
                                                           $dataNascimento);
                }//Fim da verificação de preenchimento dos campos...
            ?>
        </button>
        <!-- Fim do Botão de Cadastro -->

    </form>
    <!-- Fim do Formulário de Cadastro -->

    <?php

        //Verificando se os campos estão vazios...
        if(isset($_POST['nome']))
        {
            //Se os campos estiverem preenchidos...
            echo $mensagem;
        }else{

            //Se os campos estiverem vazios...
            echo "Erro! Preencha todos os campos!";

        }//Fim da verificação de preenchimento dos campos...

    ?>

        <!-- Botão de Voltar -->
        <a href="../index.php"><button>Voltar</button></a>

</body>
</html>
<!-- Fim da Página de Cadastro -->