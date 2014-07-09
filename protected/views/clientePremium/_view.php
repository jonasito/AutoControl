<?php
/* @var $this ClientePremiumController */
/* @var $data ClientePremium */
?>
<div class="well", style='background-color: #FEEBC1'>
<div class="table table-bordered table-striped">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cli_rut), array('view', 'id'=>$data->cli_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->cli_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->cli_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->cli_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->cli_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_email')); ?>:</b>
	<?php echo CHtml::encode($data->cli_email); ?>
	<br />

</div>
</div>