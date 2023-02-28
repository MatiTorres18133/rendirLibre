<?php


/*Programa Principal
INT $cantEmp,  $countEmp, $countCas, $porCasMostrar
FLOAT $bonoTotal; $porcCas ,$bonoPorEmpleado, 
STRING $zonaEmp $estCivil, $estCivilMay

*/

echo "Ingrese la cantidad de empleados: ";
$cantEmp = trim(fgets(STDIN));
if($cantEmp == 0){
    echo "El usuario no ingreso empleados";
}else{



$bonoPorEmpleado = 0;
$bonoTotal= 0;
$countCas =0;
for($i=1; $i<$cantEmp+1;$i++){
    echo "Ingrese el numero de zona del empleado ".$i."(1:Anielo, 2:Zapala, 3:ChosMalal, 4:otro)  : ";
    $zonaEmp = trim(fgets(STDIN));

    echo "Ingrese el estado civil del empleado N ".$i."(C:casado , S:soltero): ";
    $estCivil = trim(fgets(STDIN));
    $estCivilMay = ucfirst($estCivil);
    if($estCivilMay == 'C'){
        $countCas= $countCas +1;
    }
    $bonoPorEmpleado = calcularBono($zonaEmp, $estCivil);
    $bonoTotal = $bonoTotal + $bonoPorEmpleado;
}
$porcCas = ($countCas *100)/$cantEmp;
$porCasMostrar = intval($porcCas);
echo "La empresa debera pagar el total de: ".$bonoTotal."$ \n";
echo "El porcentaje de casados es de: ".$porCasMostrar."%"; 

}


/*MODULO calcularBono, calcula el bono otorgado
*@param INT $z
*@param String $ec
*@return FLOAT
*/
function calcularBono($z,$ec){
/*FLOAT $bono $porc*/
//$bono=0;

    if($z==1){
        $bono = 60000;


    }elseif($z==2){
        $bono = 32000;
    }elseif($z==3){
        $bono = 45000;

    }else {
        $bono= 38000;
    }

    if($ec=='C'){
        $porc = ($bono *5)/100; // 0.05 $bono* 0.05
        $bono = $bono + $porc;
    }
    
    return $bono;

}

?>