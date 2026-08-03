<?php namespace Projeto\ti23t\DAO;
    require_once('Conexao.php');
    use Projeto\ti23t\DAO\Conexao;
    use Exception;

    class Cadastrar{

        //Método Cadastrar Cliente
        public function cadastrarCliente(Conexao $conexao,
                                         string $nome,
                                         string $telefone,
                                         string $endereco,
                                         string $dataNascimento)
        {
            try{

                $conn = $conexao->conectar();//Abre a conexão com o banco de dados
                $sql = "Insert into clienteTI23T(codigo, nome, telefone, endereco, dataNascimento) 
                values('', '$nome', '$telefone', '$endereco', '$dataNascimento')";//Comando de inserção
                $result = mysqli_query($conn, $sql);//Executando o comando criado
                mysqli_close($conn);//Fechando o mysql

                //Verificando se os dados foram inseridos ou não...
                if($result){
                    return "<br><br> Inserido com sucesso!";
                }
                return "<br><br>Não foi possível realizar a inserção dos dados!";
            }catch (Exception $erro){
                return "<br><br>Impossível cadastrar o cliente! $erro";
            }
        }

    }//Fim da classe Cadastrar
?>