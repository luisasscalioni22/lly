<?php
require 'init.php';
$PDO = db_connect();
$sql = "SELECT id, descricao FROM estilo ORDER BY descricao ASC";
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
            <input type="text"  class="form-control col-sm" name="album" id="album" style="widht:25%;" placeholder="Informe o titulo do álbum">
        </div>
        <div class="form-group">
            <label for="qtd">Quantidade de músicas: </label>
            <input type="text"  class="form-control col-sm" name="qtd" id="qtd" style="widht:25%;" placeholder="Informe a quantidade de músicas do álbum">
        </div>

        <div class="form-group">
                <label for="selectTipo">Selecione o estilo do disco</label>
                <select class ="form-control" name ="estilo" id ="estilo_id" required >
                <?php while ( $estilo = $stmt -> fetch ( PDO :: FETCH_ASSOC)): ?>
                    <option value =" <?php echo $estilo ['id'] ?> "> <?php echo $estilo ['descricao'] ?> </option>
                <?php endwhile; ?>
                </select>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
    </body>
</html>
            