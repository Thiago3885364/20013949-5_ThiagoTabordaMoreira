<?php
    require("../dados/dados.php");
    session_start();
    if(isset($_SESSION['brigadeiro'])){
        $nome="Brigadeiro";
        $msg=$quem['brigadeiro'];
        $img="../images/brigadeiro.jpg";
    }
    if(isset($_SESSION['beijinho'])){
      $nome="Beijinho";
      $msg=$quem['beijinho'];
      $img="../images/beijinho.jpg";
    }
    if(isset($_SESSION['leite'])){
      $nome="Leite de leite";
      $msg=$quem['leite'];
      $img="../images/leite.jpg";
    }
    if(isset($_SESSION['pudim'])){
      $nome="Pudim";
      $msg=$quem['pudim'];
      $img="../images/pudim.jpg";
    }
    if(isset($_SESSION['arroz'])){
      $nome="Arroz doce";
      $msg=$quem['arroz'];
      $img="../images/arroz.png";
    }
    if(isset($_SESSION['bolo'])){
      $nome="Bolo de pote";
      $msg=$quem['bolo'];
      $img="../images/bolo.jpg";
    }
    session_unset();
    session_destroy();
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Quem somos nós</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <link href="../css/bootastrap.mim.css" type="text/css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <header>
        <?php include("menu.php"); ?>
    </header>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <main class="px-3">
            <h1><?= $nome; ?></h1>
            <p class="lead"><?= $msg; ?></p>
            <center><p class="lead"><img src="<?= $img; ?>" width="50%" height="50%"></p></center>
        </main>
    </div>
    <?php include("rodape.php"); ?>
    </body>
</html>
