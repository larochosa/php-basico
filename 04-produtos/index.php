
<?php

// Lista de produtos usando array associativo
$produtos = [
    [
        "nome" => "Teclado mecânico",
        "preco" => 249.90,
        "estoque" => 12
    ],
    [
        "nome" => "Mouse sem fio",
        "preco" => 79.50,
        "estoque" => 30
    ],
    [
        "nome" => "Fone de ouvido",
        "preco" => 119.90,
        "estoque" => 0
    ]
];

// Função para formatar preços
function formatarPreco(float $valor): string {
    return "R$ " . number_format($valor, 2, ",", ".");
}

// Quantidade de produtos cadastrados
$quantidadeProdutos = count($produtos);

// Valor total do estoque
$totalEstoque = 0;

foreach ($produtos as $produto) {
    $totalEstoque += $produto["preco"] * $produto["estoque"];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>

<body>

    <h1>Lista de produtos</h1>

    <table border="1">

        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Situação</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($produtos as $produto): ?>

                <tr>

                    <td>
                        <?= htmlspecialchars($produto["nome"]) ?>
                    </td>

                    <td>
                        <?= formatarPreco($produto["preco"]) ?>
                    </td>

                    <td>
                        <?= $produto["estoque"] ?>
                    </td>

                    <td>
                        <?= $produto["estoque"] > 0 ? "Disponível" : "Esgotado" ?>
                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    <h2>Resumo</h2>

    <p>
        Quantidade de produtos:
        <?= $quantidadeProdutos ?>
    </p>

    <p>
        Valor total do estoque:
        <?= formatarPreco($totalEstoque) ?>
    </p>

</body>

</html>
