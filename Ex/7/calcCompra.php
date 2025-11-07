        <?php
            @$compra= $_POST["compra"];
            @$quant= $_POST["quant"];

            $parcela = $compra / $quant;
            echo "Valor total da compra: R$ " . number_format($compra, 2, ',', '.') . "<br>";
            echo "Número de parcelas: $quant<br>";
            echo "Valor de cada parcela: R$ " . number_format($parcela, 2, ',', '.') . "<br>";
            
        
        ?>