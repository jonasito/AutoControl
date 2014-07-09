<?php
/* @var $this ServiciosController */
/* @var $data Servicios */
?>
<div class="well", style='background-color: #FEEBC1'>
<div class="table table-bordered table-striped">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ser_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ser_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ser_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->ser_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ser_valor')); ?>:</b>
	<?php echo CHtml::encode($data->ser_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ser_fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->ser_fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ser_fecha_termino')); ?>:</b>
	<?php echo CHtml::encode($data->ser_fecha_termino); ?>
	<br />
	<br>


</div>
</div>