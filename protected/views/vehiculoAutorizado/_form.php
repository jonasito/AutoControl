<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculo-autorizado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'v_patente'); ?>
		<?php echo $form->textField($model,'v_patente',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'v_patente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_rut'); ?>
		<?php echo $form->textField($model,'cli_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'cli_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->