<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pares e Soma dos Ímpares</title>
</head>
<body>
    <h2>Números Pares e Soma dos Ímpares</h2>

    <?php
        $vetor = [5, 8, 12, 3, 7, 9, 15, 2, 6, 10];

        $somaImpares = 0;

        echo "<p><strong>Números pares:</strong> ";
        foreach($vetor as $num){
            if($num % 2 == 0){
                echo $num . " ";
            } else {
                $somaImpares += $num;
            }
        }
        echo "</p>";

        echo "<p><strong>Soma dos ímpares:</strong> $somaImpares</p>";
    ?>
</body>
</html>
