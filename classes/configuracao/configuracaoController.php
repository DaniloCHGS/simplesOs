<?php
    class ConfiguracaoController {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $nivelSistema;
        private $dataBase;

        function __construct(){
            $this->initialize();
        }
        public function initialize(){
            "<script type='text/javascript'>
                let btnPesq = document.querySelector('#pesqUser');
                btnPesq.addEventListener('click', ()=>{
                    alert('x');
                });
            </script>";
        }
        public function pesquisaUsuarioDom(){
            $this->$dataBase = new DataBase();
            $linkBd = $dataBase->conexaoBd();
            $x = $dataBase->pesquisaUsuario($linkBd);
            return $x;
        }
        public function tabela(){
            echo "<script type='text/javascript'>
            
                </script>";
        }
        public function setId($value){
            $this->id = $value;
        }
        public function getId(){
            return $this->id;
        }
        public function setNome($value){
            $this->nome = $value;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setEmail($value){
            $this->email = $value;
        }
        public function getEmail($value){
            return $this->email;
        }
        public function setSenha($value){
            $this->senha = $value;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setNivelSistema($value){
            $this->nivelSistema = $value;
        }
        public function getNivelSistema(){
            return $this->nivelSistema;
        }
    }
?>