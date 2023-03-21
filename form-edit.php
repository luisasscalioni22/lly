<?php
require 'init.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
if (empty($id))
{
    echo "ID para alteração não definido";
    exits;
}
$PDO = db_connect();
$sql = "SELECT name,titulo, estilo, qtd FROM lly WHERE id =:id";
$stmt = $PDO->prepare($sql);
$stmt ->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if(!is_array($user))
{
    echo "Nenhum álbum econtrado";
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <meta chaset="utf-8">
        <title>Edição de Albuns</title>
            <link href="bootstap/css/bootsap.css" rel="stylesheet">
            <script src="bootstrap/js/boosstrap.js"></script>
            <script src="bootstrap/js/boosstrap.js"></script>
</head>
<body>
    <div calss="container">
        <h1>Sistma de cadastro de albuns</h1>
        <h2>Edição de Albuns</h2>
        <form action="edit.php" method="post">
        <div class="form-group">
            <label for="name"Nome da banda / cantor></label>
            <input type="text" class="form-control col-sm" name="name" id="name" style="width:25%;" value="<?php echo $user['name'] ?>">
        </div>
        <div class="form-group">
            <label for="name"Titulo do album></label>
            <input type="text" class="form-control col-sm" name="album" id="album" style="width:25%;" value="<?php echo $user['titulo'] ?>">
        </div>
        <div class="form-check">
            <label for="name"Estilo></label>
            <input type="text" class="form-control col-sm" name="estilo" id="estilo" style="width:25%;" value="<?php echo $user['estilo'] ?>">
        </div>
        <div class="form-check">
            <label for="name"Quantidade de músicas></label>
            <input type="text" class="form-control col-sm" name="qtd" id="qtd" style="width:25%;" value="<?php echo $user['qtd'] ?>">
        </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <button type="submit" class="btn btn-primary">Alterar</buton>
        </form>
    </div>
</body>
</html>