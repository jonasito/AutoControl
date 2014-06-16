<?php

	$hora = 700;
	$media = 400;

    if(!empty($datos)){

    	echo '<label>Codigo ingreso # '.$datos->ing_codigo.'</label>';
        echo '<label>Patente '.$datos->v_patente.'</label>';
        echo '<label>Fecha '.$datos->ing_fecha.'</label>';
    	echo '<label>Hora de ingreso # '.$datos->ing_hora_ing.'</label>';
    	$salida=date("H:i:s",time()-21600);

    	$separar[1]=explode(':',$datos->ing_hora_ing); 
        $separar[2]=explode(':',$salida); 

        $total_minutos_trasncurridos[1] = ($separar[1][0]*60)+$separar[1][1]; 
        $total_minutos_trasncurridos[2] = ($separar[2][0]*60)+$separar[2][1]; 
        $totalest = ($total_minutos_trasncurridos[1]-$total_minutos_trasncurridos[2])/60; 
         echo '<label>Tiempo estadía # '.($totalest).'</label>';

         echo "---------------- Servicios --------------------";

        if($totalest>0.5) $costo = $totalest*$hora;//$costo=explode('.',($totalest*$hora))[0];
        else $costo=$media;
        
        echo "---------------- Estacionamiento -------"; 
        echo '<label>Costo Estacionamiento= '.$costo.'</label>';
    }
    else{
        echo "---------------------------------------------";   
        echo '<label>No registra servicios</label>';
        echo "---------------------------------------------";
    }

?>