        <?php
            @$altura= $_POST["altura"];
            @$comprimento= $_POST["comprimento"];
            $area= ($altura * $comprimento);
            $litro = ($area / 3) ;
            $valor = ceil($litro/4)*40;

            echo "O valor a ser pago em tinta é: <b> R$".number_format($valor,2,',','.')."<br>"
        ?>