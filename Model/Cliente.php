<?php namespace Projeto\ti23t\Model; //Nome do Projeto
    use DateTime;

    //Classe: Cliente
    class Cliente{

        //Variáveis
        private int    $codigo;
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
        //Método GET (Consulta)
        public function __get(string $dados):mixed
        {
            //Retornando os dados após consultar...
            return $dados;

        }//Fim do Método GET

        //Método SET (Atualização)
        public function __set(string $variavel, string $novoDado):void
        {
            //Atualizando a variável com o novo dado...
            $this->variavel = $novoDado;

        }//Fim do Método SET

    }//Fim da Classe Cliente

?>