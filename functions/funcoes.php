<?php
    function somar($p1,$p2){
        $soma=$p1+$p2;
        return $soma;

    }

    function notas($nota1,$nota2){
        $media=($nota1+$nota2)/2;
        if($media < 4){
            $situacao="Reprovado";
        }
        elseif($media < 7){
            $situacao="de Exame";
        }
        else
            $situacao="Aprovado";

        return $situacao;
    }

    function km($metro){
        $km=$metro/1000;
        return $km;
    }

    function area($alt,$larg){
        $area=$alt*$larg;
        return $area;
        
    }

    function tinta($area){
        $qntT = $area/2;

        return $qntT;
    }
    
    function novoSalario($salario, $percentual) {
        $novo = $salario * (1 + ($percentual / 100));
        return $novo;
}

?>