<?php
    namespace Projeto\ti23t\DAO;
    require_once('Conexao.php');

use Exception;
use mysqli;
use Projeto\ti23t\DAO\Conexao;

    class Excluir{
        function excluirCliente(Conexao $conexao, int $codigo)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "delete from clienteTI23T where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);

                if($result){
                    return "<br><br>Excluído com sucesso!";
                }
                return "<br><br>Não foi possível excluir o cliente!";

            }catch(Exception $erro){
                echo $erro;
            }
        }
    }

?>