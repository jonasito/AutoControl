<label>Boleta</label>

<?php
    $media=400;
    $hora=700;
?>    

<?php
    echo "---------------- Entrada --------------------";
    if(!empty($servicios)){
        
        echo '<label>Codigo ingreso # '.$registro->ing_codigo.'</label>';
        echo '<label>Patente '.$registro->v_patente.'</label>';
        echo '<label>Fecha '.$registro->ing_fecha.'</label>';
        echo '<label>Hora de ingreso # '.$registro->ing_hora_ing.'</label>';
        echo '<label>Hora de salida # '.$registro->ing_hora_sal.'</label>';

        $separar[1]=explode(':',$registro->ing_hora_ing); 
        $separar[2]=explode(':',$registro->ing_hora_sal); 

        $total_minutos_trasncurridos[1] = ($separar[1][0]*60)+$separar[1][1]; 
        $total_minutos_trasncurridos[2] = ($separar[2][0]*60)+$separar[2][1]; 
        $totalest = ($total_minutos_trasncurridos[1]-$total_minutos_trasncurridos[2])/60; 
         echo '<label>diferencia # '.($totalest).'</label>';

        echo "---------------- Servicios --------------------";

        $total=0;
        foreach ($servicios as$value) {
            $total+=$value->ser_valor;
            echo '<label>'.$value->ser_nombre.' = '.$value->ser_valor.'</label>';
        }
        echo "---------------------------------------------";
        echo '<label>Total servicios = '.$total.'</label>';    
        
        if($totalest>0.5)$costo=explode('.',($totalest*$hora))[0];
        else $costo=500;
        
        echo "---------------- Estacionamiento -------"; 
        echo '<label>Costo Estacionamiento= '.$costo.'</label>';

        echo "---------------------------------------------";
        echo '<br></br>';
        echo "------- TOTAL SERVICIOS -------"; 
        echo '<label>Total a pagar = '.($total+$costo).'</label>';
        echo "---------------------------------------------";
    }
    else{
        echo "---------------------------------------------";   
        echo '<label>No registra servicios</label>';
        echo "---------------------------------------------";
    }
    
?>




