        <?php
            @$dist = $_POST["dist"];
            @$comb = $_POST["comb"];
            @$litro = $_POST["litro"];
            @$valor = ($dist / $litro)* $comb;
            echo "O valor a ser pago em combustivel é: <b> R$".number_format($valor,2,',','.')."<br>"
        ?>