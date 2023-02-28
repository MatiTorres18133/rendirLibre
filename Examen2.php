
<?php

/*PROGRAMA PRINCIPAL 
@param ARRAY $animales $menorEdad
@param INT $edad 
@param STRING $datosMasc

*/

echo "======================PROGRAMA DE ANIMALES ============================\n";
$animales = cargarMascotas();

mostrarMascotas($animales);
echo "Ingrese una edad minima: ";
$edad = trim(fgets(STDIN));
$menorEdad = buscarPrimerMenorA($animales,$edad );
if($menorEdad == -1){
    echo $menorEdad;
}else{
    
    $datosMasc = datosMascota($animales[$menorEdad]);
    echo $datosMasc.", por lo tanto es el animal con menor edad encontrado segun la edad minima (".$edad.")";
}






/*MODULO cargarMascotas, cargar en un arreglo asociativo las mascotas
*@return array
*/
function cargarMascotas(){
    /*ARRAY  $misMascotas */
    $misMascotas = [];
    $misMascotas [0]=[
        "nombre" =>"Gonzo",
        "edad" => 10,
        "tipo"=> "Perro",
    ];
    $misMascotas [1]=[
        "nombre" => "Peggy", 
        "edad" => 7,
        "tipo"=> "Puerco", 

    ];
    $misMascotas [2]= [
        "nombre" => "Harry",
         "edad" => 5,
         "tipo"=> "Hamster"
    ];


        return $misMascotas;

   

}





/*MODULO datosMascota, muestra una mascota
*@param ARRAY $arregloMulti
*@return STRING
*/
function datosMascota($arregloMasc){
    /*STRING $retorno*/
    $retorno = $arregloMasc["nombre"]." es ".$arregloMasc["tipo"]." de ".$arregloMasc["edad"]." anios ";
    return $retorno;
}




/*MODULO mosstrarMascotas, muestra las mascotas
*@param ARRAY $arregloMulti
*/
function mostrarMascotas($arregloMulti){
     foreach($arregloMulti as $key => $value){
        echo "Mascota ".$key +1 ." : ".$value["nombre"]." es ".$value["tipo"]." de ".$value["edad"]." anios\n"; 
     }
}







/*MODULO buscarPrimerMenorA, busca mascota menor
*@param ARRAY $mascotas
*@param INT $ed
*@return int
*/
function buscarPrimerMenorA($mascotas,$ed){
    /*INT $i $n */
        $i=0;
        $n=count($mascotas);        
        while($i<$n && menor($mascotas[$i], $ed) == true){
            $i++;
        }        
     if($i<$n){
        return $i;
        

     } else{
        return -1;
     }
}





/*MODULO menor, corrobora que la edad de la mascota sea menor a la ingresada
*@param ARRAY $arregloMasc
*@param INT $edad
*@return BOOL
*/
function menor($arregloMasc, $edad){
        if($edad < $arregloMasc["edad"]){
            return true;
        }else{
            return false;
        }
}



?>