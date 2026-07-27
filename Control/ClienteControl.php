<?php
    namespace Projeto\ti23t\Control;//Conectar os arquivos
    use Projeto\ti23t\Model\Cliente;//Acessar o conteúdo do arquivo
    require_once('../Model/Cliente.php');//Acessar e indicar a classe e seus métodos
    use DateTime;

    //Classe: Control
    class Control
    {
        private Cliente $cliente;
    
        //Construtor
        public function __construct(Cliente $cliente)
        {
            $this->cliente = $cliente;

        }//Fim do Cosntrutor
    

        //Método: Consultar Cliente
        public function consultarCliente():string
        {
            return "Codigo: "                 .$this->cliente->codigo.
                   "<br>Nome: "               .$this->cliente->nome.
                   "<br>Telefone: "           .$this->cliente->telefone.
                   "<br>Endereço: "           .$this->cliente->endereco.
                   "<br>Data de Nascimento: " .$this->cliente->dataNascimento;
        }//Fim do Método Consultar Cliente

        //Método: Atualizar
            //Método: Atualizar Nome
            public function atualizarNome(int $codigo, string $nome):string
            {
                if($this->cliente->codigo == $codigo)
                {
                    $this->cliente->nome = $nome;
                    return "Nome atualizado com sucesso!";
                }else{
                    return "O nome não foi atualizado.";
                }
            }//Fim do Método Atualizar Nome

            //Método: Atualizar Telefone
            public function atualizarTelefone(int $codigo, string $telefone):string
            {
                if($this->cliente->codigo == $codigo)
                {
                    $this->cliente->telefone = $telefone;
                    return "Telefone atualizado com sucesso!";
                }else{
                    return "O telefone não foi atualizado.";
                }
            }//Fim do Método Atualizar Telefone

            //Método: Atualizar Endereço
            public function atualizarEndereco(int $codigo, string $endereco):string
            {
                if($this->cliente->codigo == $codigo)
                {
                    $this->cliente->endereco = $endereco;
                    return "Endereço atualizado com sucesso!";
                }else{
                    return "O endereço não foi atualizado.";
                }
            }//Fim do Método Atualizar Endereço

            //Método: Atualizar Data de Nascimento
            public function atualizarDataNascimento(int $codigo, string $dataNascimento):string
            {
                if($this->cliente->codigo = $codigo)
                {
                    $this->cliente->dataNascimento == $dataNascimento;
                    return "Data de nascimento atualizado com sucesso!";
                }else{
                    return "A data de nascimento não foi atualizado.";
                }
            }//Fim do Método Atualizar Data de Nascimento

            //Método: Excluir
            public function excluir(int $codigo)
            {
                if($this->cliente->codigo == $codigo)
                {
                    $this->cliente->codigo         = 0;
                    $this->cliente->nome           = "";
                    $this->cliente->telefone       = "";
                    $this->cliente->endereco       = "";
                    $this->cliente->dataNascimento = "";

                    return "Cliente excluído com sucesso!";
                }else{
                    return "Cliente $codigo não encontrado!";
                }
            }//Fim do Método Excluir

    }//Fim daClasse Control
?>