        <?php
            @$dist = $_POST["dist"];
            @$comb = $_POST["comb"];
            @$valor = ($dist / 12)* $comb;
            echo "O valor a ser pago em combustivel é: <b> R$".number_format($valor,2,',','.')."<br>"
        ?>