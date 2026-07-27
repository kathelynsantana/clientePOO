<?php
    namespace Projeto\ti23t\View;
    require_once('../Model/Cliente.php');
    require_once('../Control/ClienteControl.php');
    use Projeto\ti23t\Model\Cliente;
    use Projeto\ti23t\Control\ClienteControl;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>

    <!-- Título da Página -->
    <h1>Cadastrar Cliente</h1>
    
    <!-- Formulário de Cadastro -->
    <form method="POST">

        <!-- Informações de Cadastro -->
        <label>Código:</label>
        <input type="number" name="codigo" id="codigo"/><br><br>

        <label>Nome:</label>
        <input type="text" name="nome" id="nome"/><br><br>

        <label>Telefone:</label>
        <input type="number" name="telefone" id="telefone"/><br><br>

        <label>Endereço:</label>
        <input type="text" name="endereco" id="endereco"/><br><br>
        
        <label>Data de Nascimento:</label>
        <input type="date" name="dataNascimento" id="dataNascimento"/><br><br>

        <!-- Fim das Informações de Cadastro -->

        <!-- Botão de Cadastro -->
        <button type="submit">Cadastrar
            <?php
                if(isset($_POST['codigo']))
                {
                    //Coletando os dados
                    $codigo   = $_POST['codigo'];
                    $nome     = $_POST['nome'];
                    $telefone = $_POST['telefone'];
                    $endereco = $_POST['endereco'];
                    $dataNascimento = $_POST['dataNascimento'];

                    //Passando no objeto Cliente
                    $cliente = new Cliente($codigo, $nome, $telefone, $endereco, $dataNascimento);
                    $controle = new Control($cliente);
                }
            ?>
        </button>

    </form>
    <?php
        if(isset($_POST['codigo']))
        {
            echo $controle->consultarCliente();
        }else{
            echo "Preencha os campos!";
        }

    ?>

    <!-- Botão de Voltar -->
     <a href="../index.php"><button>Voltar</button></a>
</body>
</html>