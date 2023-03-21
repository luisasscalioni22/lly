<?php
require 'init.php';

$PDO = db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM lly ORDER BY name ASC";
$sql = "SELECT id, name, titulo, estilo, qtd FROM lly ORDER BY name ASC";
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
        <script src="bootstrap/js/bootstrap.js"></script>
        </style>
        </head>
        <body>
                <main role="main">

                <section class="jumbotron text-center">
                    <div class="container">
                    <h1 class="jumbotron-heading">Acervo de Discos</h1>
                    <p class="lead text-muted">Acervo pessoal que possibilita incerção, exibição, edição e exclusão de discos.</p>
                    <p>
                        <a href="form-add.php" class="btn btn-primary my-2">Inserir disco</a>
                    </p>
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
                                    Nome da Banda/ Cantor: <?php echo $user['name'] ?><br>
                                    Título do Álbum: <?php echo $user['titulo'] ?><br>
                                    Estilo: <?php echo $user['estilo'] ?><br>
                                    Quantidade de Músicas: <?php echo $user['qtd'] ?><br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="form-edit.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <a href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Excluir</a>
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