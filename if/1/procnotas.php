<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    $media = ($nota1 + $nota2) / 2;

    echo "<h2>Resultado</h2>";
    echo "<p>Média: " . number_format($media, 1, ',', '.') . "</p>";

    if ($media >= 7.0) {
        echo "<p style='color:green; font-weight:bold;'>Aluno Aprovado!</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>Aluno Reprovado!</p>";
    }

    echo "<br><a href='index.html'>Voltar</a>";
}
?>