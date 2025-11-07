        <?php
            @$compra= $_POST["compra"];
            @$pago= $_POST["pago"];

        if ($pago >= $compra) {
            $troco = $pago - $compra;

            echo "Valor da compra: R$ " . number_format($compra, 2, ',', '.') . "<br>";
            echo "Valor pago: R$ " . number_format($pago, 2, ',', '.') . "<br>";
            echo "Troco: R$ " . number_format($troco, 2, ',', '.') . "<br>";

            $trocoCentavos = round($troco * 100);

            $notas = [1000 => 'R$10', 500 => 'R$5', 200 => 'R$2', 100 => 'R$1'];
            $moedas = [50 => '50 centavos', 25 => '25 centavos', 10 => '10 centavos', 5 => '5 centavos'];

            echo "<strong>Notas a serem dadas são<strong> <br>";

            foreach ($notas as $valor => $nome) {
                $qtd = intdiv($trocoCentavos, $valor);
                if ($qtd > 0) {
                    echo "$qtd nota(s) de $nome<br>";
                    $trocoCentavos %= $valor;
                }
            }

            foreach ($moedas as $valor => $nome) {
                $qtd = intdiv($trocoCentavos, $valor);
                if ($qtd > 0) {
                    echo "$qtd moeda(s) de $nome<br>";
                    $trocoCentavos %= $valor;
                }
            }
        } else {
            echo " O valor pago deve ser maior ou igual ao valor da compra!";
        }

    
        ?>
