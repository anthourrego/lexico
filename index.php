<?php
  include("clases/stringToken.php");
  include("clases/lexer.php");

  $txt = '';
  $fp = fopen("upload/source.lx", "r");

  while (!feof($fp)) {
    $txt .= fgets($fp);
  }

  fclose($fp);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Analizador Léxico</title>
  </head>
  <body class="container">
    <div class="p-3 my-3 bg-light rounded-3">
      <h1 class="display-5 fw-bold">Analizador Léxico</h1>
      <br>
      <div class="row">
        <div class="col-6 text-start">
          <?=  "<b>ENTRADA (source.lx)</b>: <br><pre>{$txt}</pre>" ?>
        </div>
        <div class="col-6 overflow-auto contenedor-tabla">
          <?php $lexer = new Lexer($txt); ?> 
        </div>
      </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>