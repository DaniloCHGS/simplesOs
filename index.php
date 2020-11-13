<?php
  //Controle de login
  $erroLogin = isset($_GET['errologin']) ? $_GET['errologin'] : null;
  $fimlogin = isset($_GET['fimlogin']) ? $_GET['fimlogin'] : null;
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
  

   <title>Login</title>

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


      <div class="page-header" id="cabecalho">

        <h1>
          Login
        </h1>
        
      </div>

      <form method="post" action="classes/validador/validador.php">
        
        <div class="row" style="">
          
          <div class="col-sm-3">

            <div class="form-group">

            <?php
              if($erroLogin == 1) {
                echo "
                <div id='btnErroLogin'>
                  <button type='button' class='btn btn-danger btn-block' data-dismiss='alert' aria-label='Close'>
                    Usuário e ou senha inválido(s)
                  </button>

                  </br></br>
                </div>

                <script type='text/javascript'>
                  closeErroLogin();
                </script>
                ";
              }

              if($fimlogin == true) {
                echo "
                <div id='btnFimLogin'>
                  <button type='button' class='btn btn-info btn-block' data-dismiss='alert' aria-label='Close' onclick='closeAlert()'>
                    Fim de sessão
                  </button>

                  </br></br>
                </div>

                <script type='text/javascript'>
                  closeFimLogin();
                </script>
                ";
              }
            ?>  

              <label>Email</label>
              <input type="email" name="email" class="form-control" onfocus="">
            </div>

            <div class="form-group">
              <label>Senha</label>
              <input type="password" name="senha" class="form-control" required="">
            </div>

            <div class="form-group">
              <input type="submit" name="" value="Login" class="btn btn-primary btn-block">
            </div>

          </div>

        </div>

      </form>

    </div><!-- Fim container -->

<div>

  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>