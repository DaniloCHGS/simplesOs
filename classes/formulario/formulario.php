<?php
    class Formulario {

        private $nome;
        private $cpf;
        private $telefone;
        private $endereco;
        private $descricao;

        function __construct($cNome, $cCpf, $cTelefone, $cEndereco, $cDescricao){
            $this->setNome($cNome);
            $this->setCpf($cCpf);
            $this->setTelefone($cTelefone);
            $this->setEndereco($cEndereco);
            $this->setDescricao($cDescricao);
        }

        public function getNome() {
            return $this->nome;
        }
        public function setNome($parNome) {
            $this->nome = $parNome;
        }
        public function getCpf() {
            return $this->cpf;
        }
        public function setCpf($parCpf) {
            $this->cpf = $parCpf;
        }
        public function getTelefone() {
            return $this->telefone;
        }
        public function setTelefone($parTelefone) {
            $this->telefone = $parTelefone;
        }
        public function getEndereco() {
            return $this->endereco;
        }
        public function setEndereco($parEndereco) {
            $this->endereco = $parEndereco;
        }
        public function getDescricao() {
            return $this->descricao;
        }
        public function setDescricao($parDescricao) {
            $this->descicao = $parDescricao;
        }
    }
    
?>