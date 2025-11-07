<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vetor em PHP</title>
</head>
<body>
    <h2>Números do Vetor e a Soma</h2>

    <?php
        $vetor = [5, 8, 12, 3, 7, 9, 15, 2, 6, 10];

        echo "<p><strong>Números do vetor:</strong> ";
        foreach($vetor as $num){
            echo $num . " ";
        }
        echo "</p>";

        $soma = array_sum($vetor);

        echo "<p><strong>Soma dos números:</strong> $soma</p>";
    ?>
</body>
</html>
