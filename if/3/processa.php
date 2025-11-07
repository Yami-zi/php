<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["ladoA"];
    $b = $_POST["ladoB"];
    $c = $_POST["ladoC"];

    echo "<h2>Resultado</h2>";
    echo "<p>Lados informados: A=$a, B=$b, C=$c</p>";

    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
        echo "<p style='color:green; font-weight:bold;'>Os valores FORMAM um triângulo!</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>Os valores NÃO formam um triângulo!</p>";
    }

    echo "<br><a href='index.html'>Voltar</a>";
}
?>