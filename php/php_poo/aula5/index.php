<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <pre>
    <?php
    require_once 'banco.php';
    $bank = new Banco;
    $bank->AbrirConta("CC");
    $bank->Depositar(100);
    $bank->setDono("Gilmar");
    print_r($bank);
    ?>
</pre>

</body>

</html>