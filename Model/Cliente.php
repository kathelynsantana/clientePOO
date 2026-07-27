<?php
    namespace Projeto\ti23t\Model;
    use DateTime;

    //Classe: Cliente
    class Cliente{

        //Variáveis
        //Encapsulameto: Definindo as variáveis como private
        private int $codigo;
        private string $nome;
        private string $telefone;
        private string $endereco;

        private string $dataNascimento;

        //Primeira etapa: Criar um construtor
        public function __construct(int $codigo, string $nome, string $telefone, string $endereco, string $dataNascimento)
        {
            $this->codigo         = $codigo;
            $this->nome           = $nome;
            $this->telefone       = $telefone;
            $this->endereco       = $endereco;
            $this->dataNascimento = $dataNascimento;
        }//Fim do Construtor -> Cadastrar

        //Métodos GET e SET
        //Método: GET
        public function __get(string $dados):mixed
        {
            return $dados;

        }//Fim do Método Get -> Consultar

        //Método: SET
        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;

        }//Fim do Método Set -> Atualizar
    }




?>