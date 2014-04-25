<?php
/* @var $this AdministradorController */
/* @var $data Administrador */
?>

<div class="table table-bordered table-striped">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->admin_rut), array('view', 'id'=>$data->admin_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->admin_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->admin_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_estacionamientos')); ?>:</b>
	<?php echo CHtml::encode($data->admin_estacionamientos); ?>
	<br />


</div>