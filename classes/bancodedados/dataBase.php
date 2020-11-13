<?php
    class DataBase {

        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = '';
        private $dataBase = 'simplesos';

        public function conexaoBd() {
            //estabelece a conexao com o banco de dados
            $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->dataBase);
            mysqli_set_charset($conexao, 'utf8');
            if(mysqli_connect_errno()){
                echo 'Erro ao conectar no Banco de Dados: '.mysqli_connect_erro(); 
            }
            return $conexao;
        }

        //Insere dados de formulário
        public function insertForm($parNome, $parCpf, $parTelefone, $parEndereco, $parDescricao, $link) {
            $sql = "insert into cliente(nome, cpf, telefone, endereco, descricao)values('$parNome', '$parCpf', '$parTelefone', '$parEndereco', '$parDescricao')";
            mysqli_query($link, $sql);
        }

        //Registra usuário
        public function insertUser($parNome, $parEmail, $parSenha, $parNivel, $link){
            $sql = "insert into usuario(nome, email, senha, nivel_sistema, ativo)values('$parNome', '$parEmail', '$parSenha', '$parNivel', false)";
            if(mysqli_query($link, $sql)){
                header('Location: ../../index.php');//Retorna para página de login
            } else {
                header('Location: ../../registrousuario.php?ErroRegistro=true');//Retorna para página de registro
            }
        }
        public function pesquisaUltimaOrdem($link){
            $sql = "select max(id) from usuario";
            $pesquisa = mysqli_query($link, $sql);
            $supla = mysqli_fetch_array($pesquisa);
            echo $supla[0];
        }
        public function pesquisaUsuario($post, $link){
            $sql = "select usuario.nome, usuario.email, usuario.id from usuario where usuario.nome = '$post' or usuario.email = '$post' or usuario.id = '$post'";
            $pesquisa = mysqli_query($link, $sql);
            $usuarioRecurso = mysqli_fetch_array($pesquisa);
            $usuario = array($usuarioRecurso['id'], $usuarioRecurso['nome'], $usuarioRecurso['email']);
            return $usuario;
        }
        //Valida acesso ao sistema
        public function validador($parEmail, $parSenha, $link){
            session_start();//Inicio da sessão
            $sql = "select * from usuario where email = '$parEmail' and senha ='$parSenha'";
            //$sql = "select usuario.email, usuario.senha from usuario where usuario.email = '$parEmail' and usuario.senha = '$parSenha'";
            $recursoBd = mysqli_query($link, $sql);//Conecta e executa a query
            if($recursoBd){//Testa se a conexão e a query foram executadas, true retorna recursos do select, false da erro
                $dadosUsuario = mysqli_fetch_array($recursoBd);//Explora o rescursos da pesquisa 'select' em um array
                if(isset($dadosUsuario['nome'])){//Verifica se os indices do array estão setados
                    //Controle de sessão para que só acesse o sistema se for validado
                    $_SESSION['nome'] = $dadosUsuario['nome'];
                    header('Location: ../../sistema.php');
                } else {
                    header('Location: ../../index.php?errologin=1');//Caso o indice venha nullo o sistema rediriciona para a index
                }
            } else {
                echo "Erro Interno. Verificar classe 'DataBase'";
            }
            
        }

            // Getters e setters
        function getHost(){
            return $this->host;
        }
        function setHost($parHost){
            $this->host = $parHost;
        }
    }
?>