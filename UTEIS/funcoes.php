<?php

    function escrever_mensagem($nome){
        echo "Hello $nome, How are you?" ."<br>";
    }
    escrever_mensagem("Bendel");
    
    function fazerCafe($tipo = "cappuccino"){
        return "Fazendo um xicara de:" . $tipo . "<br>";
    }
    echo fazerCafe(htmlspecialchars($_GET["tipo"]));  //Exemplo $_GET
    echo fazerCafe();

    function limpaPost ($valor){
        $valor = trim($valor);   //Retira espaços em branco do começo e do fim
        $valor = stripslashes($valor); //Retira as barras de uma string
        $valor = htmlspecialchars($valor); //Retira caracteres usados em HTML e troca os mesmos.
        return $valor;
        }
?>  