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
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript">
                    $(document).ready(function(){
                        $(function(){
                            $("#menu").load("navbar.html");
                         });
                    });
                    </script>
        </head>
        <body>
            <div class="container">
                <div id="menu"></div>
            </div>
                <main role="main">
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
                                    Estilo: <br><?php echo $user['estilo_id'] ?><br>
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
            </body>
            </html>