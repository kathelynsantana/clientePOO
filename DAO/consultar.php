<?php
    namespace Projeto\ti23t\DAo;
    require_once('Conexao.php');

use Exception;
use Projeto\ti23t\DAO\Conexao;

    class Consultar{
        function consultarCliente(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from clienteTI23T where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    //Se o código for válido e encontrado...
                    if($dados['codigo'] == $codigo){
                        return '<br>Código: '             .$dados['codigo'].
                               '<br>Nome: '               .$dados['nome'].
                               '<br>Telefone: '           .$dados['telefone'].
                               '<br>Endereço: '           .$dados['endereco'].
                               '<br>Data de Nascimento: ' .$dados['dataNascimento'];
                    }
                }

            }catch(Exception $erro){

                //
                echo "Algo deu errado! <br><br>";

            }
        }
    }
?>