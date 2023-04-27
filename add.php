<?php
require_once 'init.php';
$name = isset($_POST['name']) ? $_POST['name'] : null;
$titulo = isset($_POST['album']) ? $_POST['album'] : null;
$qtd = isset($_POST['qtd']) ? $_POST['qtd'] : null;
$estilo_id = $_POST['estilo'];



if (empty($name) || empty($titulo) || empty($qtd) || empty($estilo_id) )
{
    echo "Preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "INSERT INTO discos(name, titulo, estilo_id, qtd) VALUES(:name, :album, :estilo, :qtd)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':album', $titulo);
$stmt->bindParam(':estilo', $estilo_id);
$stmt->bindParam(':qtd', $qtd);
if ($stmt->execute())
{
    header('Location: index.php');

}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>