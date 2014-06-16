<?php
/* @var $this ServiciosController */
/* @var $data Servicios */
?>

<div class="view">

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('ser_id')); ?>:</b>
	<?php //echo CHtml::link(CHtml::encode($data->ser_id), array('view', 'id'=>$data->ser_id)); ?>
	<br />-->

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