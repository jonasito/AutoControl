<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'ser_nombre'); ?>
		<?php echo $form->textField($model,'ser_nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ser_nombre'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ser_descripcion'); ?>
		<?php echo $form->textField($model,'ser_descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ser_descripcion'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ser_valor'); ?>
		<?php echo $form->textField($model,'ser_valor'); ?>
		<?php echo $form->error($model,'ser_valor'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ser_fecha_inicio'); ?>
		<?php echo $form->textField($model,'ser_fecha_inicio'); ?>
		<?php echo $form->error($model,'ser_fecha_inicio'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ser_fecha_termino'); ?>
		<?php echo $form->textField($model,'ser_fecha_termino'); ?>
		<?php echo $form->error($model,'ser_fecha_termino'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->