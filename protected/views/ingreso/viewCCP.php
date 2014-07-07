<?php 

	if(!empty($datos)){?>
		<b><?php echo "---------------- Historial --------------------";?></b>
<?php		foreach ($datos as  $value) {
?>
			<div class="table table-bordered table-striped">

				<b><?php echo '<label>Patente '.$value->v_patente.'</label>';?></b>
				<b><?php echo '<label>Fecha '.$value->ing_fecha.'</label>';?></b>
				<b><?php echo '<label>Hora ingreso '.$value->ing_hora_ing.'</label>';?></b>
				<?php 
				if(is_null($value->ing_hora_sal))
					echo '<label>En estacionamiento</label>';
				else {?>
					<b><?php echo '<label>Hora salida '.$value->ing_hora_sal.'</label>';?></b>
				<?php 
				} ?>
				</div>
			<?php
		}
    
	
		}else{
			echo "---------------------------------------------";   
	        echo '<label>No registra servicios</label>';
	        echo "---------------------------------------------";
		}
		echo '<br></br>';
		echo '<br></br>';
		echo '<br></br>';
	?>