        <?php
            @$anos= $_POST["anos"];
            $meses   = $anos * 12;  
            $semanas = $anos * 52;     
            $dias    = $anos * 365;
            
            
            echo "Anos : ".number_format($anos,1,',','.')."<br>";
            echo "Dias: ".number_format($dias,1,',','.')."<br>";
            echo "Semanas: ".number_format($semanas,1,',','.')."<br>";
            echo "Meses : ".number_format($meses,1,',','.')."<br>";
            
        
        ?>