<?php
/* @var $this VehiculoAutorizadoController */
/* @var $data VehiculoAutorizado */
?>
<div class="well", style='background-color: #FEEBC1'>
<div class="table table-bordered table-striped">

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_patente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->v_patente), array('view', 'id'=>$data->v_patente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_rut')); ?>:</b>
	<?php echo CHtml::encode($data->cli_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

</div>
</div>