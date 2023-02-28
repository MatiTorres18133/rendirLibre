
<?php
$arrayMonto = [];
for($i=0; $i < 4;$i++){

    echo "INGRESE MONTO";
    $monto = trim(fgets(STDIN));    
    $arrayMonto [$i]= $monto;

}

print_r($arrayMonto);


?>

