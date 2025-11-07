        <?php
            @$compra= $_POST["compra"];
            @$pago= $_POST["pago"];

        if ($pago >= $compra) {
            $troco = $pago - $compra;

            echo "Valor da compra: R$ " . number_format($compra, 2, ',', '.') . "<br>";
            echo "Valor pago: R$ " . number_format($pago, 2, ',', '.') . "<br>";
            echo "Troco: R$ " . number_format($troco, 2, ',', '.') . "<br>";
        } else {
            echo "⚠️ O valor pago deve ser maior ou igual ao valor da compra!";
        }

    
        ?>