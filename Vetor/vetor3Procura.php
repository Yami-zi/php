<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Localizar Número no Vetor</title>
</head>
<body>
    <h2>Localizar Número em um Vetor de 10 Elementos</h2>

    <form method="post">
        <label for="numero">Digite um número para procurar:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Procurar</button>
    </form>

    <?php
        $vetor = [5, 8, 12, 3, 7, 9, 15, 2, 6, 10];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];

            $posicao = array_search($numero, $vetor);

            if ($posicao !== false) {
                echo "<p><strong>O número $numero foi encontrado na posição $posicao do vetor.</strong></p>";
            } else {
                echo "<p><strong>O número $numero não foi encontrado no vetor.</strong></p>";
            }

            echo "<p><strong>Vetor:</strong> " . implode(", ", $vetor) . "</p>";
        }
    ?>
</body>
</html>
