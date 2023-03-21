<?php
require_once 'init.php';

$name = isset($_POST['name']) ? $_POST['name'] : null;
$titulo_album = isset($_POST['album']) ? $_POST['album'] : null;
$estilo = isset($_POST['estilo']) ? $_POST['estilo'] : null;
$qtd_musica = isset($_POST['qtd']) ? $_POST['qtd'] : null;
$id = isset($_POST['id']) ? $_POST ['id']: null; 

if (empty($name) || empty($titulo_album) || empty($estilo) || empty($qtd_musica))
{
    echo "Volte e preencha todos dos campos!";
    exit;
}

$PDO = db_connect();
$sql = "UPDATE lly SET name = :name, titulo = :album, estilo = :estilo, qtd = :qtd WHERE id = :id ";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':album', $titulo_album);
$stmt->bindParam(':estilo', $estilo);
$stmt->bindParam(':qtd', $qtd_musica);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute())
{
    header('Location: index.php');

}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}
?>


