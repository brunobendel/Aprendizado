<?php 
/* INCLUDE E REQUIRE */
/*
include ('test.php'); 
// Essa função é como se tivesse incluido a pagina chamada dentro da primeira
// Essa função deixa a continuação do cod prosseguir


require('test.php'); 
// Essa função é como se tivesse incluido a pagina chamada dentro da primeira
//Essa função NÃO deixa a continuação do cod prosseguir

include_once('test.php'); // serve para chamar o arquivo somente uma vez
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- IMPORTAR MENU -->
    <?php require('componentes/menu.php'); ?>

    <!-- IMPORTAR CONTEUDO -->
    <?php require('componentes/conteudo.php'); ?>

    <!-- IMPORTAR RODAPE -->
    <?php require('componentes/rodape.php'); ?>

</body>
</html>