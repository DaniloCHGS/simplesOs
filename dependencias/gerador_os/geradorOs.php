<?php
    class GeradorOs {
        
        private $numOs;
        private $endOs;

        function __construct(){
            $this->setEndOs("numero_os.txt");
        }

        public function getNumOs(){
            return $this->numOs;
        }
        public function setNumOs($osPar){
            $this->numOs = $osPar;
        }
        public function getEndOs(){
            return $this->endOs;
        }
        public function setEndOs($endOsPar){
            $this->endOs = $endOsPar;
        }

        public function geradorOs(){

            $openFile = fopen('numero_os.txt', "r");
            $file = fread($openFile, filesize('numero_os.txt'));
            return $file;
        }
    }
?>