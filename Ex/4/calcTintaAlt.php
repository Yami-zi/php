        <?php
            @$altura= $_POST["altura"];
            @$comprimento= $_POST["comprimento"];
            @$lata= $_POST["lata"];
            $area= ($altura * $comprimento);
            $litro = ($area / 3) ;
            $valor = ceil($litro/4)*$lata;

            echo "O valor a ser pago em tinta é: <b> R$".number_format($valor,2,',','.')."<br>"
        ?>