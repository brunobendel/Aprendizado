<?php 
/*MANIPULAÇÃO DE PASTAS (DIRETÓRIOS)*/

$pasta = "nova-pasta/imagem";

//Comando para criar pasta
if (!is_dir($pasta)){
    mkdir($pasta,0755,true);
}else{
    rmdir($pasta); // Deleta pasta vazia.
}
// rename($pasta,'teste'); //move e renomeia

/* MANIPULAÇÕES DE ARQUIVOS */
//fopen() -> Abrir / Criar pasta ---> 
//fwrite() -> Escrever no arquivo
//fclose()-> Fechar arquivo

$pasta = "arquivo";

//Comando para criar pasta
if (!is_dir($pasta)){
    mkdir($pasta,0755,true);
}

$nome_arquivo = date('y-m-d-H-i-s')."txt";
$arquivo = fopen($nome_arquivo,'a+');
fwrite($arquivo,'Uma linha injetada pelo php' .PHP_EOL);
fclose($arquivo);


?>
