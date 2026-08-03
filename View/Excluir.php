<?php namespace Projeto\ti23t\View;//Nome do Projeto

    //Incluindo o cabeçalho
    include('cabecalho.php');

    //Conectando ao Model e Control...
    require_once('../Model/Cliente.php');//Acessando o arquivo Cliente.php que está na pasta Model...
    require_once('../Control/ClienteControl.php');//Acessando o arquivo ClienteControl.php que está na pasta Control...
    require_once('../DAO/excluir.php');
    require_once('../DAO/conexao.php');


    //Acessando as classes da Model e Control...
    use Projeto\ti23t\Model\Cliente;//Acessando a classe "Cliente" que está na pasta Model...
    use Projeto\ti23t\Control\Control;//Acessando a classe "ClienteControl" que está na pasta Control...
    use Projeto\ti23t\DAO\Excluir;
    use Projeto\ti23t\DAO\Conexao;

    $conexao = new Conexao();
    $consultar = new Consultar();
    $resultado = "";

?>

<!-- ------------------------------------------------------------------------------------------------------------------------- -->

<!-- Página de Exclusão -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
</head>
<body>

    <!-- Título da Página -->
    <h1>Excluir um Cliente</h1>
    <?php echo "Deseja excluir o cliente: ".$clienteRecuperado->codigo."?"?>

    <form method="POST">
        <button type="submit">Excluir

            <?php
                $resultado = $controle->excluirCliente();
            ?>

        </button>
    </form>

    <?php
    if($resultado == 1)
    {
        //Se o cliente for excluído...
        //Exibindo o resultado...
        echo "O cliente foi excluído com sucesso!";

    }else{

        //Se o cliente não for excluído...
        echo "Por favor, confirme a exclusão!";
    }
        
    ?>

</body>
</html>
<!-- Fim da Página de Exclusão -->