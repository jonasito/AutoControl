<?php
/* @var $this IngresoController */
/* @var $data Ingreso */
?>

<div class="table table-bordered table-striped">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ing_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ing_codigo), array('view', 'id'=>$data->ing_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_patente')); ?>:</b>
	<?php echo CHtml::encode($data->v_patente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ing_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->ing_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ing_hora_ing')); ?>:</b>
	<?php echo CHtml::encode($data->ing_hora_ing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ing_hora_sal')); ?>:</b>
	<?php echo CHtml::encode($data->ing_hora_sal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ing_numero_est')); ?>:</b>
	<?php echo CHtml::encode($data->ing_numero_est); ?>
	<br />


</div>