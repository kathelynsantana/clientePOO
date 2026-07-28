<?php namespace Projeto\ti23t\Control;//Nome do projeto

    //Conectando ao Model...
    use Projeto\ti23t\Model\Cliente;//Acessando o conteúdo do arquivo da pasta Model...
    require_once('../Model/Cliente.php');//Acessando o arquivo e indicando a classe e seus métodos...
    use DateTime;

    //-------------------------------------------------------------------------------------------------------------------------

    //Classe: Control
    class Control
    {
        //Varíaveis
        private Cliente $cliente;
    
        //Construtor
        public function __construct(Cliente $cliente)
        {
            $this->cliente = $cliente;

        }//Fim do Cosntrutor
    
        //Método: Consultar Cliente
        public function consultarCliente():string
        {
            //Retornando todos os dados do cliente...
            return "Codigo: "                 .$this->cliente->codigo.
                   "<br>Nome: "               .$this->cliente->nome.
                   "<br>Telefone: "           .$this->cliente->telefone.
                   "<br>Endereço: "           .$this->cliente->endereco.
                   "<br>Data de Nascimento: " .$this->cliente->dataNascimento;

        }//Fim do Método Consultar Cliente

        //Métodos: Atualização dos dados do Cliente
            //Método: Atualizar Nome
            public function atualizarNome(string $nome):string
            {
                //Atualizando...
                $this->cliente->nome = $nome;
                return "O nome: $nome foi atualizado com sucesso!";

            }//Fim do Método Atualizar Nome

            //Método: Atualizar Telefone
            public function atualizarTelefone(string $telefone):string
            {
                //Atualizando...
                $this->cliente->telefone = $telefone;
                return "O telefone: $telefone foi atualizado com sucesso!";

            }//Fim do Método Atualizar Telefone

            //Método: Atualizar Endereço
            public function atualizarEndereco(string $endereco):string
            {
                //Atualizando...
                $this->cliente->endereco = $endereco;
                return "O endereço: $endereco foi atualizado com sucesso!";

            }//Fim do Método Atualizar Endereço

            //Método: Atualizar Data de Nascimento
            public function atualizarDataNascimento(string $dataNascimento):string
            {
                //Atualizando...
                $this->cliente->dataNascimento = $dataNascimento;
                return "A data de nascimento: $dataNascimento foi atualizada com sucesso!";

            }//Fim do Método Atualizar Data de Nascimento

        //Fim dos Métodos de Atualização dos dados do Cliente

        //Método: Excluir Cliente
        public function excluirCliente()
        {
            //Se o código do cliente existir...
            //Apagando os dados...
            $cod = $this->cliente->codigo;
            $this->cliente->codigo         = 0;
            $this->cliente->nome           = "";
            $this->cliente->telefone       = "";
            $this->cliente->endereco       = "";
            $this->cliente->dataNascimento = "";

            //Retornando a mensagem de exclusão...
            return 1;

        }//Fim do Método Excluir Cliente

    }//Fim da Classe Control
    
?>