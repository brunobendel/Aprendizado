<?php
    if (isset($_POST['nome']) && isset($_POST['idade'])){
        $nome = limpaPost($_POST['nome']);
        $idade =limpaPost($_POST['idade']);
        echo "<h2> Nome: $nome <br>Idade: $idade </h2>";
    }
    function limpaPost ($valor){
        $valor = trim($valor);   //Retira espaços em branco do começo e do fim
        $valor = stripslashes($valor); //Retira as barras de uma string
        $valor = htmlspecialchars($valor); //Retira caracteres usados em HTML e troca os mesmos.
        return $valor;
        }
    ?>
