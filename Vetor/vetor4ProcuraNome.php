<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Localizar Nome no Vetor</title>
</head>
<body>
    <h2>Localizar Nome em um Vetor de 10 Elementos</h2>

    <form method="post">
        <label for="nome">Digite um nome para procurar:</label>
        <input type="text" name="nome" id="nome" required>
        <button type="submit">Procurar</button>
    </form>

    <?php
        $vetor = ["Ana", "Bruno", "Carlos", "Daniela", "Eduardo", 
                  "Fernanda", "Gabriel", "Helena", "Isabela", "João"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = trim($_POST['nome']);

            $posicao = array_search(strtolower($nome), array_map('strtolower', $vetor));

            if ($posicao !== false) {
                echo "<p><strong>O nome '$nome' foi encontrado na posição $posicao do vetor.</strong></p>";
            } else {
                echo "<p><strong>O nome '$nome' não foi encontrado no vetor.</strong></p>";
            }

            echo "<p><strong>Vetor de nomes:</strong> " . implode(", ", $vetor) . "</p>";
        }
    ?>
</body>
</html>
