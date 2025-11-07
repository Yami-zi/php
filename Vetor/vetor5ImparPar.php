<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Separar Pares e Ímpares</title>
</head>
<body>
    <h2>Separando Números Pares e Ímpares</h2>

    <?php
        $vetor = [1,2,3,4,5,6,7,8,9,10];

        $pares = [];
        $impares = [];

        foreach ($vetor as $num) {
            if ($num % 2 == 0) {
                $pares[] = $num;
            } else {
                $impares[] = $num;
            }
        }

        echo "<p><strong>Vetor original:</strong> " . implode(", ", $vetor) . "</p>";
        echo "<p><strong>Números pares:</strong> " . implode(", ", $pares) . "</p>";
        echo "<p><strong>Números ímpares:</strong> " . implode(", ", $impares) . "</p>";
    ?>
</body>
</html>
