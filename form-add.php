<?php
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Acervo de discos</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
    <div class="container">
        <h1>Sistema de cadastro de albuns</h1>
        <h2>Cadastro de albuns</h2>

        <form action="add.php" method="post">
        <div class="form-group">
            <label for="name">Nome da banda/cantor: </label>
            <input type="text"  class="form-control col-sm" name="name" id="name" style="widht:25%;" placeholder="Informe o nome da banda/cantor">
        </div>

        <div class="form-group">
            <label for="album">Título do álbum: </label>
            <input type="text"  class="form-control col-sm" name="album" id="album" style="widht:25%;" placeholder="Informe o nome do álbum">
        </div>

        <div class="form-group">
            <label for="estilo">Estilo: </label>
            <input type="text"  class="form-control col-sm" name="estilo" id="estilo" style="widht:25%;" placeholder="Informe o estilo">
        </div>

        <div class="form-group">
            <label for="qtd">Quantidade de músicas: </label>
            <input type="text"  class="form-control col-sm" name="qtd" id="qtd" style="widht:25%;" placeholder="Informe o nome do álbum">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    </body>
</html>
            