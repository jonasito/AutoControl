<?php

	$hora = 700;
	$media = 400;

    if(!empty($datos)){
        foreach ($datos as  $value) {
            echo '<label>SU ESTADÍA ACTUAL</label>';
        	echo '<label>Código ingreso # '.$value['ing_codigo'].'</label>';
            echo '<label>Patente '.$value['v_patente'].'</label>';
            echo '<label>Fecha '.$value['ing_fecha'].'</label>';
        	echo '<label>Hora de ingreso # '.$value['ing_hora_ing'].'</label>';
        
        	$salida=date("H:i:s",time()-21600);

        	$separar[1]=explode(':',$value['ing_hora_ing']); 
            $separar[2]=explode(':',$salida); 
        }
        $total_minutos_trasncurridos[1] = ($separar[1][0]*60)+$separar[1][1]; 
        $total_minutos_trasncurridos[2] = ($separar[2][0]*60)+$separar[2][1]; 
        $totalest = ($total_minutos_trasncurridos[1]-$total_minutos_trasncurridos[2])/60; 
         echo '<label>Tiempo estadía # '.($totalest).'</label>';

         echo '<label>---------------- Servicios --------------------</label>';
        
        echo "---------------- Estacionamiento -----------"; 
        if($totalest>0.5) $costo = $totalest*$hora;//$costo=explode('.',($totalest*$hora))[0];
        else $costo=$media;
        echo '<label>Costo Estacionamiento = $'.$costo.'</label>';
        echo "";
        echo "-------------------------------------------------";
    }
    else{
        echo "---------------------------------------------";   
        echo '<label>No registra servicios</label>';
        echo "---------------------------------------------";
    }

?>