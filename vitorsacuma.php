<?php
    $proprietario = "Vitor Sacuma";
    $locador = "Lucas Trigo";
    $valor = 5000.0;
    $porcent_reajuste = 30.0;
    $novo_valor = $valor *($porcent_reajuste / 100 +1);
    echo "<h1>Proprietário: </h1><br>
    <mark>$proprietario </mark><br>
    <h1>Locador: </h1><br>
    <mark>$locador</mark><br>
    = $ Valor Reajustado: <br> 
    $novo_valor<br>= % valor<br>
    $porcent_reajuste"; 
?>