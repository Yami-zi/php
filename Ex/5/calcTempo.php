        <?php
            @$dias= $_POST["dias"];
            $semanas= $dias/ 7;
            $meses=$dias/30;
            $anos=$dias/365;

            echo "Dias: ".number_format($dias,1,',','.')."<br>";
            echo "Semanas: ".number_format($semanas,1,',','.')."<br>";
            echo "Meses (aprox.): ".number_format($meses,1,',','.')."<br>";
            echo "Anos (aprox.): ".number_format($anos,1,',','.')."<br>";
        
        ?>