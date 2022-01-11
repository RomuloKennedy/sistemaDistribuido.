<!--
  Aqui fica todo o material do materialize css e também fica a cabeça da página;
-->
<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de cadastro de clientes</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <?php       
      include_once "App\Model\conexao.php";
      include_once "App\Model\produto.php";
      include_once "App\Model\produtoDao.php";
      ?>