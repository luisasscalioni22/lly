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
                <div class="b-example-divider"></div>
                    <div class="container">
                    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                        <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
                        </div>

                        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                        </ul>
                    </footer>
                    </div>

            </body>
            </html>