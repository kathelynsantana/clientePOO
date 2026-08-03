<?php
    namespace Projeto\ti23t\DAO;

    use Exception;

    require_once('Conexao.php');
    use Projeto\ti23t\DAO\Conexao;

    class Atualizar{

        function atualizarCliente(Conexao $conexao,
                                  int $codigo,
                                  string $campo,
                                  string $dado)
        {
            try{

                $conn = $conexao->conectar();
                $sql = "update clienteTI23T set $campo = '$dado' where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);

                if($result){
                    return "<br><br>Atualizado com sucesso!";
                }
                return "<br><br>Não foi possível realizar a atualização!";
            
            }catch(Exception $erro){
                echo $erro;
            }

        }
    }
?>