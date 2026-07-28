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
            public function atualizarNome(int $codigo, string $nome):string
            {
                //Verificando se o código do cliente é válido...
                if($this->cliente->codigo == $codigo)
                {
                    //Se o código for válido...
                    //Atualizando...
                    $this->cliente->nome = $nome;
                    return "O nome foi atualizado com sucesso!";

                }else{
                    
                    //Se o código não for válido...
                    return "Código inválido! Não foi possível atualizar o nome!";

                }//Fim da verificação do código do cliente
            }//Fim do Método Atualizar Nome

            //Método: Atualizar Telefone
            public function atualizarTelefone(int $codigo, string $telefone):string
            {
                //Verificando se o código do cliente é válido...
                if($this->cliente->codigo == $codigo)
                {
                    //Se o código for válido...
                    //Atualizando...
                    $this->cliente->telefone = $telefone;
                    return "O telefone foi atualizado com sucesso!";

                }else{

                    //Se o código não for válido...
                    return "Código inválido! Não foi possível atualizar o telefone!";

                }//Fim da verificação do código do cliente
            }//Fim do Método Atualizar Telefone

            //Método: Atualizar Endereço
            public function atualizarEndereco(int $codigo, string $endereco):string
            {
                //Verificando se o código do cliente é válido...
                if($this->cliente->codigo == $codigo)
                {
                    //Se o código for válido...
                    //Atualizando...
                    $this->cliente->endereco = $endereco;
                    return "O endereço foi atualizado com sucesso!";

                }else{

                    //Se o código não for válido...
                    return "Código inválido! Não foi possível atualizar o endereço!";

                }//Fim da verificação do código do cliente
            }//Fim do Método Atualizar Endereço

            //Método: Atualizar Data de Nascimento
            public function atualizarDataNascimento(int $codigo, string $dataNascimento):string
            {
                //Verificando se o código do cliente é válido...
                if($this->cliente->codigo == $codigo)
                {
                    //Se o código for válido...
                    //Atualizando...
                    $this->cliente->dataNascimento = $dataNascimento;
                    return "A data de nascimento foi atualizada com sucesso!";

                }else{

                    //Se o código não for válido...
                    return "Código inválido! Não foi possível atualizar a data de nascimento!";

                }//Fim da verificação do código do cliente
            }//Fim do Método Atualizar Data de Nascimento

        //Fim dos Métodos de Atualização dos dados do Cliente

        //Método: Excluir Cliente
        public function excluirCliente(int $codigo)
        {
            //Verificando se o código do cliente existe...
            if($this->cliente->codigo == $codigo)
            {
                //Se o código do cliente existir...
                //Apagando os dados...
                $this->cliente->codigo         = 0;
                $this->cliente->nome           = "";
                $this->cliente->telefone       = "";
                $this->cliente->endereco       = "";
                $this->cliente->dataNascimento = "";

                //Retornando a mensagem de exclusão...
                return "O cliente foi excluído com sucesso!";

            }else{

                //Se o código do cliente não existir...
                return "O cliente não foi encontrado! Não foi possível excluí-lo!";

            }//Fim da verificação do código do cliente
        }//Fim do Método Excluir Cliente

    }//Fim da Classe Control
    
?>