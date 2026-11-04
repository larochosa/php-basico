
<?php

date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");

$hora = date("H:i:s");

$mensagem = "Hoje é " . $data . " e agora são " . $hora . ".";

$horaAtual = (int) date("H");

if ($horaAtual < 12) {
    $saudacao = "Bom dia";
} elseif ($horaAtual < 18) {
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa noite";
}

$diaSemana = date("w");

switch ($diaSemana) {
    case 0:
        $diaPorExtenso = "domingo";
        break;
    case 1:
        $diaPorExtenso = "segunda-feira";
        break;
    case 2:
        $diaPorExtenso = "terça-feira";
        break;
    case 3:
        $diaPorExtenso = "quarta-feira";
        break;
    case 4:
        $diaPorExtenso = "quinta-feira";
        break;
    case 5:
        $diaPorExtenso = "sexta-feira";
        break;
    case 6:
        $diaPorExtenso = "sábado";
        break;
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Data e hora</title>
</head>
<body>

    <h1>Data e hora do servidor</h1>

    <h2><?= $saudacao ?></h2>

 <p>Hoje é <?= $diaPorExtenso ?>.</p>

   <p><?= $mensagem ?></p>

   <h2>Relógio ao vivo</h2>

<p id="relogio"></p>

<script>
    function atualizarRelogio() {
        const agora = new Date();

        const hora = agora.toLocaleTimeString("pt-BR");

        document.getElementById("relogio").textContent = hora;
    }

    atualizarRelogio();

    setInterval(atualizarRelogio, 1000);
</script>

</body>
</html>
