<?php
    require 'init.php';
    $trecho = isset($_POST['trecho']) ? $_POST['trecho'] : null;
    if (empty($trecho))
    {
        header('Location: msgErro.html');
    }
    $pesquisa = '%' . $trecho . '%';
    $PDO = db_connect();
    $sql = "SELECT id, name, titulo, estilo_id, qtd FROM discos as di INNER JOIN estilo as ES on estilo_id = es.id like :trecho ORDER BY di.estilo_id ASC";
    $stmt = $PDO->prepare($sql);
    $stmt->execute([':trecho' => $pesquisa]);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa | Séries Assistidas</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/JQuery.js"></script>
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
        <div class="jumbotron">
                <p class="h3 text-center">Discos cadastrados encontrados na pesquisa</p>
        </div>
        