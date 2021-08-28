<?php
    session_start();
    if(isset($_POST['brigadeiro'])){
        $_SESSION['brigadeiro']=true;
        header('Location: pages/produtos.php');
    }
    if(isset($_POST['beijinho'])){
        $_SESSION['beijinho']=true;
        header('Location: pages/produtos.php');
    }
    if(isset($_POST['pudim'])){
        $_SESSION['pudim']=true;
        header('Location: pages/produtos.php');
    }
    if(isset($_POST['leite'])){
        $_SESSION['leite']=true;
        header('Location: pages/produtos.php');
    }
    if(isset($_POST['arroz'])){
        $_SESSION['arroz']=true;
        header('Location: pages/produtos.php');
    }
    if(isset($_POST['bolo'])){
        $_SESSION['bolo']=true;
        header('Location: pages/produtos.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Início</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
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
    <main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Comidas caseiras</h1>
            <p class="lead text-muted">Este sistema tem o intuido de vender comidas caseiras deliciosas!</p>
        </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
            <form method="POST">
                <div class="card shadow-sm bd-placeholder-img card-img-to">
                <img src="images/brigadeiro.jpg" width="100%" height="225">
                    <div class="card-body">
                    <p class="card-text"><b>Brigadeiro</b></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <input type="submit" value="Mais" name="brigadeiro" class="btn btn-sm btn-outline-secondary"></input>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm bd-placeholder-img card-img-top">
                    <img src="images/beijinho.jpg" width="100%" height="225">
                    <div class="card-body">
                    <p class="card-text"><b>Beijinho</b></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <input type="submit" value="Mais" name="beijinho" class="btn btn-sm btn-outline-secondary"></input>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm bd-placeholder-img card-img-top">
                    <img src="images/bolo.jpg" width="100%" height="225">
                    <div class="card-body">
                    <p class="card-text"><b>Bolo de pote</b></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <input type="submit" value="Mais" name="bolo" class="btn btn-sm btn-outline-secondary"></input>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm bd-placeholder-img card-img-top">
                    <img src="images/pudim.jpg" width="100%" height="225">
                    <div class="card-body">
                    <p class="card-text"><b>Pudim</b></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <input type="submit" value="Mais" name="pudim" class="btn btn-sm btn-outline-secondary"></input>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm bd-placeholder-img card-img-top">
                <img src="images/leite.jpg" width="100%" height="225">
                    <div class="card-body">
                    <p class="card-text"><b>Doce de leite</b></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <input type="submit" value="Mais" name="leite" class="btn btn-sm btn-outline-secondary"></input>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm bd-placeholder-img card-img-top">
                    <img src="images/arroz.png" width="100%" height="225">
                    <div class="card-body">
                    <p class="card-text"><b>Arroz doce</b></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <input type="submit" value="Mais" name="arroz" class="btn btn-sm btn-outline-secondary"></input>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php include("pages/rodape.php"); ?>
    </body>
</html>
