<?php
require_once 'init.php';
$name = isset($_POST['name']) ? $_POST['name'] : null;
$titulo = isset($_POST['album']) ? $_POST['album'] : null;
$estilo = isset($_POST['estilo']) ? $_POST['estilo'] : null;
$qtd = isset($_POST['qtd']) ? $_POST['qtd'] : null;


if (empty($name) || empty($titulo) || empty($estilo) || empty($qtd))
{
    echo "Preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "INSERT INTO lly(name, titulo, estilo, qtd) VALUES(:name, :album, :estilo, :qtd)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':album', $titulo);
$stmt->bindParam(':estilo', $estilo);
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