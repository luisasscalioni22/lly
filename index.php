<?php
require 'init.php';

$PDO = db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM discos ORDER BY name ASC";
$sql = "SELECT id, name, titulo, estilo_id, qtd FROM discos ORDER BY name ASC";
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$totsl = $stmt_count->fetchColumn();
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Acervo de discos</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/jquery.js"></script>
        </style>
        </head>
        <body>
                <main role="main">

                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
  <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
  <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
  <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
</svg>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </nav>
                    <section class="jumbotron text-center">
                    <div class="container">
                    <h1 class="jumbotron-heading">Acervo de Discos</h1>
                    <p class="lead text-muted">Tenha um acervo pessoal de álbuns que possibilita incerção, exibição, edição e exclusão de discos.</p>
                    <form class="d-flex" role="search">
                         <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                         <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                     </form>
                    </div>
                </section>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="album py-5 bg-light">
                    <div class="container">
                                <div class="row">
                            <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                <p class="card-text">
                                    Nome da Banda/ Cantor: <br><?php echo $user['name'] ?><br>
                                    Título do Álbum: <br><?php echo $user['titulo'] ?><br>
                                    Estilo: <br><?php echo $user['estilo'] ?><br>
                                    Quantidade de Músicas: <br><?php echo $user['qtd'] ?><br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="form-edit.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                                    <a href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-primary">Excluir</a>
                                </div>
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
                <?php endwhile; ?>
                </main>

                <footer class="text-muted">
                <div class="container">
                    <p class="float-right">
                    <a href="#">Voltar ao topo</a>
                    </p>
                </div>
                </footer>

                <!-- Principal JavaScript do Bootstrap
                ================================================== -->
                <!-- Foi colocado no final para a página carregar mais rápido -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
                <script src="../../assets/js/vendor/popper.min.js"></script>
                <script src="../../dist/js/bootstrap.min.js"></script>
                <script src="../../assets/js/vendor/holder.min.js"></script>
            </body>
            </html>