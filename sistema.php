<?php
  session_start();
  if(!isset($_SESSION['nome'])){
    header('Location: index.php?errologin=1');
  }
  if(isset($_SESSION['nivel_sistema'])) {
    echo "<script type='text/javascript' src='scripts/code.js'>
            controleRegistro();
          </script>";
  }
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
  

   <title>Ordem de Serviço</title>

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
    <!-- <?= $_SESSION['nome']?> -->
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
          <li class="active">
            <a href="sistema.php">
              Ordem de Serviço
              <span class="glyphicon glyphicon-edit"></span>
            </a>
          </li>
          <li class="" id="registroUsuario">
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

    <div class="container" id="formulario" >

      

      <div class="page-header" id="cabecalho">

        <h1>
          Simples OS
        </h1>
        
      </div>

      <form method="post" action="classes/impressao/impressao.php">

          <div class="row">

            <div class="col-sm-4">

              <div class="form-group">
                <label>Nome</label>
                <input required="" type="text" name="nome" class="form-control" id="nome">
              </div>  
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label>CPF</label>
                <input required="" type="number" name="cpf" class="form-control" maxlength="11" minlength="11" id="cpf" placeholder="Sem pontuação">
              </div>  
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label>Telefone</label>
                <input required="" type="number" name="telefone" class="form-control" id="telefone">
              </div>  
            </div>

          </div>

          <div class="row">
            
            <div class="col-sm-12">

              <div class="form-group">
                <label>Endereço</label>
                <input required="" type="text" name="endereco" class="form-control" id="endereco">
              </div>

              <div class="form-group">
                <label>Defeito/Reclamação</label>
                <textarea class="form-control" rows="5" name="descricao" id="descricao" required=""></textarea>
              </div>

              <div class="form-group">
                <label>Serviço Executado</label>
                <textarea class="form-control" rows="5" name="executado" id="executado" required=""></textarea>
              </div>

              <div class="btn-group"  style="float: right;">

                <input type="number" name="valorTotal" id="valorTotal" class="form-control" style="margin-bottom: 10px;" placeholder="Valor Total" required="">

                <button class="btn btn-info" type="button" id="limpar" onclick="clearForm()" title="Limpar formulário">
                  <span class="glyphicon glyphicon-repeat btnSpace" id="limparIcone"></span>
                  Limpar
                </button>
                <button type="submit" name="" class="btn btn-success" title="Gerar Ordem de Serviço">
                  <span class="glyphicon glyphicon-ok btnSpace"></span>
                  Gerar OS
                </button>
              </div>
              

            </div>

          </div>

      </form>

    </div><!-- Fim container -->

<div>

  
  <script src="scripts/ordemServicoController/ordemServicoController.js"></script>
  <script src="scripts/ordemServicoController/initialize.js"></script>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>