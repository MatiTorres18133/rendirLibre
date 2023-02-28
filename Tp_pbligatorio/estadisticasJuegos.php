<?php


// $montoEneroMesUsuario = 0;
// $montoFebreroMesUsuario = 0;
// $montoMarzoMesUsuario = 0;
// $montoAbrilMesUsuario = 0;
// $montoMayoMesUsuario = 0;
// $montoJunioMesUsuario = 0;
// $montoJulioMesUsuario = 0;
// $montoAgostoMesUsuario = 0;
// $montoSeptiembreMesUsuario = 0;
// $montoOctubreMesUsuario = 0;
// $montoNoviembreMesUsuario = 0;
// $montoDiciembreMesUsuario = 0;


$ventaMayor= 0;
$mayorJuegoVenta=[];
$arrayMonto = [];
$incrementarMontoEnero =0;
$incrementarMontoFebrero =0;
$incrementarMontoMarzo =0;
$incrementarMontoAbril =0;
$incrementarMontoMayo =0;
$incrementarMontoJunio =0;
$incrementarMontoJulio =0;
$incrementarMontoAgosto =0;
$incrementarMontoSeptiembre =0;
$incrementarMontoOctubre =0;
$incrementarMontoNoviembre =0;
$incrementarMontoDiciembre =0;


do {
    
/*IMPLEMENTACION menu de usuarios */
$opciones = menuOpciones();

    if($opciones == 1){

        op1();
       
    }elseif($opciones ==2 ){
        print_r($mayorJuegoVenta);
         op2($mayorJuegoVenta,$incrementarMontoEnero ,$incrementarMontoFebrero ,$incrementarMontoMarzo ,
         $incrementarMontoAbril ,$incrementarMontoMayo ,$incrementarMontoJunio ,$incrementarMontoJulio ,
         $incrementarMontoAgosto ,$incrementarMontoSeptiembre ,$incrementarMontoOctubre ,$incrementarMontoNoviembre ,$incrementarMontoDiciembre );
          
    }elseif ($opciones ==3 ){
        $monto = op3();
        
        echo $monto;
        
    }
    echo "DESEA SEGUIR EN EL MENU? (S/N): ";
    $resp = strtoupper(trim(fgets(STDIN)));
    
}while($resp == "S");




/*MODULO op3
Esta funcion devuelve el primer mes que supere el monto maximo;
@param null
@return null
*/
function op3(){
    $i= 0;
        
    $meses = inicializarTickets($mayorJuegoVenta);
    while($i<count($meses) && superaMonto($meses[$i],)){
        $i++;
    }
    return $meses[$i];
}


/*MODULO op2
Esta funcion contiene todas las funcionalidades de la opcion 2 del menu 
@param null
@return null
*/
function op2($ventaMayor,$incrementEnero, $incrementFebrero, $incrementMarzo,$incrementAbril,$incrementMayo,$incrementJunio,$incrementJulio,$incrementAgosto,$incrementSept,$incremenetOct,$incremetNov,$incrementDic){
print_r($ventaMayor);
end();

 
    if($incrementEnero >= $ventaMayor['precioTicket']){
        echo "El mes con mayor ventas es ENERO \n";
        echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);

       }elseif($incrementFebrero >=  $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es FEBRERO\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);

       }elseif($incrementMarzo>= $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es MARZO\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);

       }elseif($incrementAbril >=  $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es ABRIL\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);
       }elseif($incrementMayo >=  $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es MAYO\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);

       }elseif($incrementJunio >=  $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es JUNIO\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);
         
       }elseif($incrementJulio >=  $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es JULIO\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);

       }elseif($incrementAgosto>=  $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es AGOSTO\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);

       }elseif($incrementSept>=  $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es SEPTIEMBRE\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);

       }elseif ($incremenetOct>=  $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es OCTUBRE\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);

       }elseif($incremetNov >= $ventaMayor['precioTicket']){
         echo "El mes con mayor ventas es NOVIEMBRE\n";
         echo "↓↓↓INFO↓↓↓\n";
         print_r($ventaMayor);
       }elseif($incrementDic>= $ventaMayor['precioTicket']){
        echo "El mes con mayor ventas es DICIEMBRE\n";
        echo "↓↓↓INFO↓↓↓\n";
        print_r($ventaMayor);
      }
}


/*MODULO op1 
esta funcion contiene todas las funcionalidades de la opcion 1 del menu
@param null
@return null
*/
function op1(){ 

    /*STRING $mesVenta , $juego
    FLOAT $ticket, $montoVentTotalMes
    INT $vendidos $incremento
    ARRAY $juegoMayor, $$montoUsuario
    */
    $mayorVenta = 0;
    $countUser = 0;
    $incremento=0;

        echo "===============USTED SELECCIONO LA OPCION 1 ========================\n";
        echo "Ingrese el mes de la venta: ";
        $mesVenta = strtoupper(trim(fgets(STDIN)));
        
        
        switch($mesVenta){

            case "ENERO":
                echo "Ingrese nombre del juego vendido en el mes de ENERO: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket vendido en el mes de ENERO: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos en el mes de ENERO: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
                $countUser = $countUser + 1;
                $montoUsuario = usuariosIngresosMontos($ticket, $countUser);
                if($montoVentTotalMes > $mayorVenta){
                    $ventaMayor = $mayorVenta;
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    
                    $incremento = $incremento + 1;
                    $incrementarMontoEnero = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoEnero = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;

            case "FEBRERO":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
                $montoFebreroMesUsuario = $montoVentTotalMes;
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoFebrero = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoFebrero = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;

                
            case "MARZO":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
         
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoMarzo = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoMarzo = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;

                
            case "ABRIL":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
       
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoAbril = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoAbril = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;
                
                
            case "MAYO":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
           
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoMayo = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoMayo = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;

                        
            case "JUNIO":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;

                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoJunio = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoJunio = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;



                        
            case "JULIO":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
        
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoJulio = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoJulio = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;



                        
            case "AGOSTO":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;

                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoAgosto = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoAgosto = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;


                        
            case "SEPTIEMBRE":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
     
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoSeptiembre = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoSeptiembre = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;


                        
            case "OCTUBRE":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
   
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoOctubre = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoOctubre = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;


                        
            case "NOVIEMBRE":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
    
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoNoviembre = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoNoviembre = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;


                        
            case "DICIEMBRE":
                echo "Ingrese nombre del juego vendido: ";
                $juego = trim(fgets(STDIN));
                echo "Ingrese precio del ticket: ";
                $ticket = trim(fgets(STDIN));
                echo "Ingrese cantidad de tickets vendidos: ";
                $vendidos = trim(fgets(STDIN));
                $montoVentTotalMes= $ticket * $vendidos;
 
                if($montoVentTotalMes > $mayorVenta){
                    $mayorVenta = $montoVentTotalMes;
                    $mayorJuegoVenta = juegoConMayorVenta($juego, $ticket, $vendidos);
                    $incremento = $incremento + 1;
                    $incrementarMontoDiciembre = incrementarMontoDelMes($montoVentTotalMes, $incremento);
                    
                }else{
                    $incremento = $incremento + 1;
                    $incrementarMontoDiciembre = incrementarMontoDelMes($montoVentTotalMes,$incremento);
                }
                break;
        } 
 }

    function menuOpciones(){
        /*INT $opcionMenu */
        echo "================MENU DE USUARIOS=================\n";
        echo "1) Ingrese una venta \n";
        echo "2)Mes con mayor monto de ventas\n";
        echo "3)Primer mes que supera el monto de ventas\n";
        echo "4)Informacion de un mes\n";
        echo "5)Juegos mas vendidos Ordenados\n";
        echo "6) SALIR\n";
        echo "Ingrese una opcion : ";
        $opcionMenu = trim(fgets(STDIN))."\n";
    
        while(($opcionMenu == null )|| ($opcionMenu > 6) || ($opcionMenu == 0)){
            echo "!!!!DEBE INGRESAR UNA OPCION QUE ESTE DENTRO DEL MENU DE USUARIOS!!!!\n";
            echo "================MENU DE USUARIOS=================\n";
            echo "1)Ingrese una venta \n";
            echo "2)Mes con mayor monto de ventas\n";
            echo "3)Primer mes que supera el monto de ventas\n";
            echo "4)Informacion de un mes\n";
            echo "5)Juegos mas vendidos Ordenados\n";
            echo "6) SALIR\n";
            echo "SALIR\n";
            echo "Ingrese una opcion : ";
            $opcionMenu = trim(fgets(STDIN))."\n";
        }
    
        return $opcionMenu;
    }
    
    
    
    /*INCREMENTAR MONTO DEL MES 
    esta funcion incrementa el monto de cada mes 
    @param FLOAT $monto
    @param INT $sumar
    retorno FLOAT;
    */
    
    function incrementarMontoDelMes($monto , $sumar ){
        $totalMes = 0;
        for($i = 0; $i<$sumar; $i++){
            $totalMes = $totalMes + $monto;
        }
        return $totalMes;
    
    } 
    
    
    /*MONTO DE VENTAS DE TICKETS DE CADA MES */
    
    /*Modulo inicializa los meses con sus montos
    @param ARRAY()
    @return ARRAY;
    */
    function inicializarTickets($juegoMasVendido){
        $precioDelTicket = $juegoMasVendido['precioTicket'];
        $cantTickets = $juegoMasVendido['cantTickets'];
        $precioTicketTotal = $precioDelTicket * $cantTickets;
        $tickets=[];
        $tikcets[0]=[
        "Mes"=>"Enero",
        "total"=> $precioTicketTotal,
        ];
        $tikcets[1]=[
            "Mes"=>"FEBRERO",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[2]=[
            "Mes"=>"MARZO",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[3]=[
            "Mes"=>"ABRIL",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[4]=[
            "Mes"=>"MAYO",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[5]=[
            "Mes"=>"JUNIO",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[6]=[
            "Mes"=>"JULIO",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[7]=[
            "Mes"=>"AGOSTO",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[8]=[ 
             "Mes"=>"SEPTIEMBRE",
        "total"=> $precioTicketTotal,];
        $tikcets[9]=[
            "Mes"=>"OCTUBRE",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[10]=[
            "Mes"=>"NOVIEMBRE",
            "total"=> $precioTicketTotal,
        ];
        $tikcets[11]=[
            "Mes"=>"DICIEMBRE",
            "total"=> $precioTicketTotal,
        ];
        
    
        return $tickets;
    }   
    
    
    /*MODULO carga el juego con mayor venta 
    @param STRING $nombreJuego
    @param FLOAT $precioTicket
    @param INT $cantTicketsVendidos
    @return ARRAY
    */
    function juegoConMayorVenta($nombreJuego,$precioTicket,$cantTicketsVendidos){
        $juegoMayor=[
            'nombreJuego'=>$nombreJuego,
            'precioTicket'=>$precioTicket,
            'cantTickets'=>$cantTicketsVendidos,
    
        ];
        return $juegoMayor;
    }

    /*CARGA LOS MONTOS INGRESADOS POR LOS USUARIOS 
    @param FLOAT $montoUser 
    @param INT $cantTickets
    return ARRAY;
    */
    function usuariosIngresosMontos($montoUser,$cantUser){
   
        for($i=0; $i<$cantUser;$i++){
            $arrayMonto [$i] = $montoUser;
        }
    
        return $arrayMonto; 
    }

   /*MODULO superaMonto
Esta verifica que el monto del mes ingresado sea mayor al anterior
@param null
@return null
*/
function superaMonto($mes){
    if($mes > $mesMayor){
        return $mes;
    }else{
        $mesMayor;
    }
    $mesMayor = 0;

    
}
    
    echo "DESEA SEGUIR OPERANDO EN EL MENU ? (S/N): ";
    $resp = strtoupper(trim(fgets(STDIN)));




?>