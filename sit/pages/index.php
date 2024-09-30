<?php
    include_once("components/topo.php");

    if(empty($_SERVER['QUERY_STRING'])){
        include_once("components/conteudo.php");
    } else {
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }

    include_once("components/rodape.php");
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/politica.css">
    <title>Início</title>
</head>
<body>
    
</body>
</html>