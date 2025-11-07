<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vetor Inverso</title>
</head>
<body>
    <h2>Vetor em Ordem Inversa</h2>

    <?php
        $vetor = [1,2,3,4,5,6,7,8,9,10];

        echo "<p><strong>Vetor original:</strong> " . implode(" - ", $vetor) . "</p>";

        $vetorInvertido = array_reverse($vetor);

        echo "<p><strong>Vetor inverso:</strong> " . implode(" - ", $vetorInvertido) . "</p>";
    ?>
</body>
</html>
