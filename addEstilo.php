<?php
require_once 'init.php';

$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;



if (empty($descricao))
{
    echo "Preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "INSERT INTO estilo(descricao) VALUES(:descricao)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':descricao', $descricao);
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