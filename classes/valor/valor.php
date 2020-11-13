<?php
    //Esta classe contem informações que podem ser utilizadas em diversas partes do sistema
    Class Valor {

        private $nomeEmpresa = "SM@";
        private $logo = "../../img/logo.png";
        private $cnpj = "17.487.113/0001-66";
        private $endereco = "Rua Aldilio Carvalho Franca - nº 507 / Ponte Alta - Volta Redonda";
        private $telefone = "(24) 9 9335-0436";

        public function getNomeEmpresa(){
            return $this->nomeEmpresa;
        }
        public function setNomeEmpresa($nomeEmPar){
            $this->nomeEmpresa = $nomeEmPar;
        }
        public function getLogo(){
            return $this->logo;
        }
        public function setLogo($logoPar){
            $this->logo = $logoPar;
        }
        public function getCnpj(){
            return $this->cnpj;
        }
        public function setCnpj($cnpjPar){
            $this->cnpj = $cnpjPar;
        }
        public function getEndereco(){
            return $this->endereco;
        }
        public function setEndereco($enderecoPar){
            $this->endereco = $enderecoPar;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefoneEmPar){
            $this->telefone = $telefonePar;
        }
    }
?>