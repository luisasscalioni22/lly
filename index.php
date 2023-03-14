<?php
require 'init.php';

$PDO = db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM users ORDER BY name ASC";
$sql_count = "SELECT id, name, cantor, titulo, estilo, qtdmusicas, descricao FROM users ORDER BY name ASC";
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
        <link href="boostrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
        <style type="text/css">
            .container{
                margin-top: 50px;
                margin-left: 100px;
            }
        </style>
        </head>
        <body>

            <header>
                <div class="collapse bg-dark" id="navbarHeader">
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                        <p class="text-muted">Adicione alguma informação sobre o álbum abaixo (autor ou qualquer outro background). Faça essas informações terem algumas frases, para a galera ter algumas informações que besliscar. Além disso, use link nelas para as redes sociais ou informações de contato.</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contato</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Me siga no Twitter</a></li>
                            <li><a href="#" class="text-white">Curta no Facebook</a></li>
                            <li><a href="#" class="text-white">Me envie um e-mail</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="navbar navbar-dark bg-dark shadow-sm">
                    <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-disc-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-6 0a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM4 8a4 4 0 0 1 4-4 .5.5 0 0 0 0-1 5 5 0 0 0-5 5 .5.5 0 0 0 1 0zm9 0a.5.5 0 1 0-1 0 4 4 0 0 1-4 4 .5.5 0 0 0 0 1 5 5 0 0 0 5-5z"/>
</svg>
                        <strong>Acervo de discos</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    </div>
                </div>
                </header>

                <main role="main">

                <section class="jumbotron text-center">
                    <div class="container">
                    <h1 class="jumbotron-heading">Acervo de Discos</h1>
                    <p class="lead text-muted">Acervo pessoal que possibilita incerção, exibição, edição e exclusão de discos.</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Call-to-inserir</a>
                    </p>
                    </div>
                </section>

                <div class="album py-5 bg-light">
                    <div class="container">

                    <div class="row">
                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Excluir</button>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text"></p>
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                </main>

                <footer class="text-muted">
                <div class="container">
                    <p class="float-right">
                    <a href="#">Voltar ao topo</a>
                    </p>
                    <p>Este exemplo de álbum é &copy; Bootstrap, mas, por favor, baixe e customize por conta própria.</p>
                    <p>Novo no Bootstrap? <a href="../../">Visite a página principal</a> ou leia nosso guia <a href="../../getting-started/">getting started</a>.</p>
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