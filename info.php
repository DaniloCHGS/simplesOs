<?php
  session_start();
  if(!isset($_SESSION['nome'])){
    header('Location: index.php?errologin=1');
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
   
  

   <title>Simples OS - Informações</title>

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
   
    <div class="container" id="formulario" >

      <div id="logoff" style="margin-top: 5px; float: right;">

        <div class="row">
          
          <div class="col-sm-6">

            <form action="classes/logoff/logoff.php">
              <button class="btn btn-danger" title="Sair">
                <span class="glyphicon glyphicon-off"></span>
              </button>
            </form>

          </div>

          <div class="col-sm-6">
            
            <form action="sistema.php">
              <button class="btn btn-info" title="Configuração">
                <span class="glyphicon glyphicon-home"></span>
              </button>
            </form>

          </div>

        </div>

      </div><!-- Fim logoff -->

      <div class="page-header" id="cabecalho">

        <h1>
          Simples OS
        </h1>
        
      </div>

      <div class="row">
        
        <div class="col-md-6">

          <div class="form-group">
            <label>Versão: 1.3</label>
          </div>

        </div>

        <div class="col-md-6">
          
          <div id="redesSociais">

            <a href="https://www.google.com.br" target="_balnk" id="facebook">A</a>
            <!-- <img src="img/linkedin.png" id="linkedin" class="rede" onclick="redeSocial()" name="x">
            <img src="img/facebook.png" id="facebook" class="rede" onclick="redeSocial()">
            <img src="img/instagram.png" id="instagram" class="rede" onclick="redeSocial()"> -->
            
          </div>

        </div>

      </div>

    </div>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>