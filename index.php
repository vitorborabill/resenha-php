<?php 
    $cidade = "Garça";
    $dia = 17;
    $mes = "Julho";
    $ano = 2022;
    while($dia<31){
        echo "<i>$cidade</i>, $dia de <strong>$mes</strong> de <em>$ano</em><br>";
        
        $dia +=7;
    }
?>