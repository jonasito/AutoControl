<label>Boleta</label>
    
<?php
    echo "---------------- Entrada --------------------";
    if(!empty($servicios)){
        
        echo '<label>Codigo ingreso # '.$registro->ing_codigo.'</label>';
        echo '<label>Patente '.$registro->v_patente.'</label>';
        echo '<label>Fecha '.$registro->ing_fecha.'</label>';
        echo '<label>Hora de ingreso # '.$registro->ing_hora_ing.'</label>';
        echo "---------------- Servicios --------------------";

        $total=0;
        foreach ($servicios as$value) {
            $total+=$value->ser_valor;
            echo '<label>'.$value->ser_nombre.' = '.$value->ser_valor.'</label>';
        }
        echo "---------------------------------------------";
        echo '<label>Total servicios = '.$total.'</label>';    
        echo "---------------- Estacionamiento -------"; 
        echo '<label>Costo Estacionamiento= '.$total.'</label>';

        echo "---------------------------------------------";
        echo '<br></br>';
        echo "------- TOTAL SERVICIOS -------"; 
        echo '<label>Total a pagar = '.$total.'</label>';
        echo "---------------------------------------------";
    }
    else{
        echo "---------------------------------------------";   
        echo '<label>No registra servicios</label>';
        echo "---------------------------------------------";
    }
    
?>




