<?php
require 'init.php';
$PDO = db_connect();
$status = 'y';
$sql_count = "SELECT COUNT(*) AS total FROM discos WHERE id =:id";
$sql = "SELECT name,titulo, estilo_id, qtd FROM discos WHERE id =:id";

$stmt_count = $PDO->prepare($sql_count);
$stmt_count->bindParam(':status', $status);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

$stmt = $PDO->prepare($sql);
$stmt->bindParam(':status', $status);
$stmt->execute();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Cadastro de livros</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="styles.css">
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
            <div class="text-center">
                <h1>WeBooks</h1>
                <h2>Livros Lidos</h2>
            </div>
            <?php if ($total > 0): ?>
            <table class="table table-striped" width="50%">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Quantidade de páginas</th>
                        <th>Gênero</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($id = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $id['name'] ?></td>
                        <td><?php echo $id['ttulo'] ?></td>
                        <td><?php echo $id['estilo_id'] ?></td>
                        <td><?php echo $id['qtd']?></td>
                        <td> 
                            <a href="form-edit.php?id=<?php echo $id['id'] ?>">Editar</a>
                            <a href="delete.php?id=<?php echo $id['id'] ?>" onclick="return confirm('Tem certeza que desja remover?');">| Remover</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p class="text-center">Nenhum disco registrado</p>
            <?php endif; ?>
        </div>
    </body>
</html>