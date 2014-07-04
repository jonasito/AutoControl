<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'admin_rut'); ?>
		<?php echo $form->textField($model,'admin_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_nombre'); ?>
		<?php echo $form->textField($model,'admin_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_apellido'); ?>
		<?php echo $form->textField($model,'admin_apellido',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_contraseña'); ?>
		<?php echo $form->textField($model,'admin_contraseña',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_estacionamientos'); ?>
		<?php echo $form->textField($model,'admin_estacionamientos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->