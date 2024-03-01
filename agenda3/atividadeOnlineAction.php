<?php
$nome = $_POST["txtNome"];
$sobrenome = $_POST["txtSobrenome"];
$email = $_POST["txtEmail"];
$formacao = $_POST["txtFormacao"];
$emprego = $_POST["txtEmprego"];

$msg = "Os seguintes dados foram cadastrados com sucesso!";

$dadoscad = $nome."<br/>";
$dadoscad .= $sobrenome."<br/>";
$dadoscad .= $email."<br/>";
$dadoscad .= $formacao."<br/>";
$dadoscad .= $emprego."<br/>";

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>Cadastro</title>

    </head>

    <body>

        <div class="w3-container w3-teal">
            <h2><?= $msg; ?></h2>
            <p><?= $dadoscad; ?></p>
        </div>
    </body>

</html>

