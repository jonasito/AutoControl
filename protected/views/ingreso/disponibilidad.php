
<?php 
//$fecha=date('d-m-Y');
//$model=Ingreso::model()->disponibilidad($fecha);

if(!is_null($model)){
foreach ($model as $value) { ?>

    <label>estacionamiento <?php echo $value->ing_numero_est ?> </label>


<?php }
}
else{ ?>
<label>sin estacionamientos</label>

<?php }?>

