<?php
    namespace Projeto\ti23t\DAO;
    use Exception;

    class Conexao{

        //Conexão com o Banco de Dados
        public function conectar()
        {
            try{

                //Acessando o banco de dados...
                $conn = mysqli_connect('localhost',
                                       'root',
                                       '',
                                       'cliente');

                //Validação
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn; 
                }else{
                    "Algo deu errado!";
                }//Fim da Validação

            }catch(Exception $erro){

                //Se a conexão falhar...
                "Algo deu errado!<br><br> $erro";

            }//Fim do try_catch]

        }//Fim da Conexão com o Banco de Dados
    }


?>