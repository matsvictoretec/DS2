<?php
$nome = $_POST["txtNome"];
$valor = $_POST["txtValorCompra"];
$formaPag = $_POST["cmbPag"];

if ($formaPag === "deposito") {
    $vFormapag = "Depósito";
    $desconto = 0.1;
} elseif($formaPag === "boleto") {
    $vFormapag = "Boleto";
    $desconto = 0.08;
} else {
    $vFormapag = "Cartão de Crédito";
    $desconto = 0;
}

$valorDesconto = $valor * $desconto;
$valorTotal = $valor - $valorDesconto;

$vValor = "R$ ".number_format($valor, 2, ",", ".");
$vDesconto = $desconto > 0 ? ($desconto * 100)."%" : "Sem desconto";
$vEconomia = "R$ ".number_format($valorDesconto, 2, ",", ".");
$vTotal = "R$ ".number_format($valorTotal, 2, ",", ".");
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
            <h2>PROMOÇÃO DE MÊS DE ANIVERSÁRIO!</h2>
            <p><?= $nome."!"; ?></p>
            <p>Valor da compra sem desconto: <b><?= $vValor; ?></b></p>
            <p>Forma de pagamento escolhida: <b><?= $vFormapag; ?></b></p>
            <p>Desconto de: <b><?= $vDesconto; ?></b></p>
            <p>Você economizou: <b><?= $vEconomia; ?></b></p>
            <p>Valor total à Pagar: <b><?= $vTotal; ?></b></p>
        </div>
    </body>

</html>

