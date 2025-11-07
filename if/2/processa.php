<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];
    $forma = $_POST["forma"];

    echo "<h2>Resultado</h2>";

    if ($forma == "avista") {
        $valorFinal = $valor * 0.90;
        echo "<p>Forma de pagamento: <b>À vista</b></p>";
        echo "<p>Valor com desconto: R$ " . number_format($valorFinal, 2, ',', '.') . "</p>";
    } elseif ($forma == "parcelado") {
        $parcela = $valor / 3;
        echo "<p>Forma de pagamento: <b>Parcelado em 3x</b></p>";
        echo "<p>3 parcelas de R$ " . number_format($parcela, 2, ',', '.') . " (sem juros)</p>";
        echo "<p>Total: R$ " . number_format($valor, 2, ',', '.') . "</p>";
    } else {
        echo "<p style='color:red;'>Opção inválida!</p>";
    }

    echo "<br><a href='index.html'>Voltar</a>";
}
?>