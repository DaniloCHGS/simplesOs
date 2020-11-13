<?php
  session_start();

  include 'classes/bancodedados/dataBase.php';

  if(!isset($_SESSION['nome'])){
    header('Location: index.php?errologin=1');
  }
  $dataBase = new DataBase();
  $linkBd = $dataBase->conexaoBd();
  $pesquisa = isset($_POST['pesqUser']) ? $_POST['pesqUser'] : null;
  $dados = $dataBase->pesquisaUsuario($pesquisa, $linkBd);

  /* Esta parte do codigo busca os valos do vetor com os dados da tabela usuario e seta
  * nos indexes do vetor dadosTela que é jogado na tabela */
  $dadosTela[0] = isset($_POST['pesqUser']) ? $dados[0] : null;
  $dadosTela[1] = isset($_POST['pesqUser']) ? $dados[1] : null;
  $dadosTela[2] = isset($_POST['pesqUser']) ? $dados[2] : null;
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   
   <script src="scripts/jquery-2.2.1.js"></script>
   <script src="scripts/code.js"></script>
   
  

   <title>Tela de configuração do Sistema</title>

   <!-- Bootstrap -->
   <link href="dependencias/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

   <link rel="stylesheet" type="text/css" href="css/estilo.css">
   <link rel="shortcut icon" href="img/icone.png" />

 </head>
 <body>
   
 <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#">
          Simples OS
          <img src=""/>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="">
            <a href="sistema.php">
              Ordem de Serviço
              <span class="glyphicon glyphicon-edit"></span>
            </a>
          </li>
          <li class="active" id="registroUsuario">
            <a href="configuracao.php">
              Configuração
              <span class="glyphicon glyphicon-cog"></span>
            </a>
          </li>
          <li>
            <a href="info.php">
              Informações
              <span class="glyphicon glyphicon-info-sign"></span>
            </a>
          </li>
          <li>
            <a href="#">
              <?= $_SESSION['nome']?>
              <span class="glyphicon glyphicon-user"></span>
            </a>
          </li>
          <li>
            <a href="#">
              <text id="data"></text>
              <span class="glyphicon glyphicon-calendar"></span>
            </a>
          </li>
          <li>
            <a href="#">
              <text id="hora"></text>
              <span class="glyphicon glyphicon-time"></span>
            </a>
          </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form action="classes/logoff/logoff.php" style="margin-top: 8px;">
              <button class="btn btn-danger" title="Sair">
                <span class="glyphicon glyphicon-off"></span>
              </button>
            </form>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

    <div class="container" id="formulario" style="height: inherit;">

      <div class="page-header" id="cabecalho">

        <h1>
          Configuração do Sistema
        </h1>
        
      </div>

      

      <div id="atividadesUsuario" class="panel panel-primary">
        
        <div class="panel-heading">
          <text class="lead">Atividades do Usuário</text>
          <span class="glyphicon glyphicon-user alignRigth"></span>
        </div>

        <div class="panel-body">
          
          <div id="registroUsuario">
            
            <div class="lead">
              <span>Registro de Usuário</span>
              <hr>
            </div>

            <form method="post" action="classes/registrousuario/registrousuario.php">
        
            <div class="row" style="">
              
              <div class="col-sm-3">
                
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" name="nome" class="form-control" required="">
                </div>

              </div>

              <div class="col-sm-3">

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="@simplesos.com" required="">
                  </div>

                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" placeholder="" id="senhaRegistro" name="senha">
                  </div>
                </div>

                <div class="col-sm-3">

                  <div class="form-group">
                    <label>Nível de sistema</label>
                    
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="checkbox" aria-label="...">
                      </span>
                      <input type="text" class="form-control" aria-label="..." value="Administrador" disabled="" id="ns">
                    </div><!-- /input-group -->
                    <!-- <select class="form-control" name="nivelSistema" required="">
                      <option value="1">Comum</option>
                      <option value="2">Administrador</option>
                    </select> -->
                  </div>

                </div>

              </div>

              <div class="btn-toolbar">
                <button type="submit" name="" value="Registrar" class="btn btn-primary btn-block">
                  Registrar
                </button>
              </div>

            </form>

          </div>
          <div id="admUsuario" style="margin-top: 15px;">


            <!-- Pesquisa de usuário -->
            <form method="post" action="">
              <div class="row">
                
                <div class="col-sm-6">
                  <div class="lead">
                    Alterar Dados Usuário
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" class="form-control" name="pesqUser" placeholder="Digite o Nome, Email ou ID" id="pesqUserCamp">
                    <span class="input-group-btn">
                      <button class="btn btn-success" type="submit" id="pesqUser">Pesquisar</button>
                    </span>
                  </div>
                </div>
              </div>
            </form>

              <div id="painelEdit">
                <div class="row">
                
                <div class="col-sm-12">
                  <table class="table table-bordered">
                    
                    <tr>
                      
                      <td>
                        <label>
                          ID
                        </label>
                      </td>
                      <td>
                        <label>
                          Nome
                        </label>
                      </td>
                      <td>
                        <label>
                          Email
                        </label>
                      </td>
                      <td>
                        <label>
                          Nível de Sistema
                        </label>
                      </td>

                      </tr>
                      <tr>
                        <td>
                          <?= $dadosTela[0]?>
                        </td>
                        <td>
                          <?= $dadosTela[1]?>
                        </td>
                        <td>
                          <?= $dadosTela[2]?>
                        </td>
                        <td>
                          Nível de Usuário
                        </td>
                      </tr>

                  </table>
                </div>

              </div>

              <div class="row" style="">
              
              <div class="col-sm-3">
                
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" name="nome" class="form-control" required="">
                </div>

              </div>

              <div class="col-sm-3">

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="@simplesos.com" required="">
                  </div>

                </div>

                <div class="col-sm-3">
                  
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" placeholder="" id="senhaRegistro">
                  </div>

                </div>

                <div class="col-sm-3">

                  <div class="form-group">
                    <label>Nível de sistema</label>
                    
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="checkbox" aria-label="...">
                      </span>
                      <input type="text" class="form-control" aria-label="..." value="Administrador" disabled="" id="ns">
                    </div><!-- /input-group -->
                    <!-- <select class="form-control" name="nivelSistema" required="">
                      <option value="1">Comum</option>
                      <option value="2">Administrador</option>
                    </select> -->
                  </div>

                </div>

              </div>

              <div class="btn-toolbar">
                <button type="submit" name="" value="" class="btn btn-danger btn-block">
                  Alterar Dados do Usuário
                </button>
              </div>
              </div>
          </div>

        </div>
        
      </div>

      <div id="dadosEmpresa" class="panel panel-primary">
        
        <div class="panel-heading">
          <text class="lead">Dados da Empresa</text>
          <span class="glyphicon glyphicon-briefcase alignRigth"></span>
        </div>

        <div class="panel-body">
          
          <form method="post" action="classes/registrousuario/registrousuario.php">
        
        <div class="row" style="">
          
          <div class="col-sm-6">
            
            <div class="form-group">
              <label>Nome da Empresa</label>
              <input type="text" name="nomeEmpresa" class="form-control" required="">
            </div>

          </div>

          <div class="col-sm-6">
            
            <div class="form-group">
              <label>Endereço</label>
              <input type="text" name="endereco" class="form-control" required="">
            </div>

          </div>

          <div class="col-sm-4">
            
            <div class="form-group">
              <label>CNPJ</label>
              <input type="number" name="cnpj" class="form-control" required="">
            </div>

          </div>

          <div class="col-sm-4">

            <div class="form-group">
              <label>Telefone</label>
              <input type="number" name="telefone" class="form-control" required="" placeholder="(99) 99999-9999">
            </div>

            </div>

            <div class="col-sm-4">
              
              <div class="form-group">
                <label>Logo</label>
                <input type="file" name="logoFile" class="well well-sm" required="">
              </div>

            </div>

          </div>

          <div class="btn-toolbar">
            <button type="submit" name="" value="Alterar" class="btn btn-primary btn-block">
              Alterar
            </button>
          </div>

        </form>

        </div>
        
      </div>

      </div><!-- Fim container -->

    <script src="scripts/configuracaoController/configuracaoController.js"></script>
    <script src="scripts/configuracaoController/initialize.js"></script>
    <script src="scripts/code.js"></script>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>