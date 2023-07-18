<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste php poo</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <pre>
    <?php
    require_once 'caneta.php';
    $c1 = new Caneta;
    $c1->setModelo("BIC");  // Método privado só aceita dessa forma 
    $c1->modelo = "NIC";  // Método publico aceita das duas maneiras
    $c1->setPonta("Fina");
    print_r($c1);
    echo "Eu tenho uma caneta do modelo:{$c1->getModelo()} e ponta: {$c1->getPonta()} "

    ?>
</pre>


</html>