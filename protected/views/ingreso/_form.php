<?php
/* @var $this IngresoController */
/* @var $model Ingreso */
/* @var $form CActiveForm */
?>

<div class="well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ingreso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'v_patente'); ?>
		<?php echo $form->textField($model,'v_patente',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'v_patente'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ing_fecha'); ?>
		<?php echo $form->textField($model,'ing_fecha'); ?>
		<?php echo $form->error($model,'ing_fecha'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ing_hora_ing'); ?>
		<?php echo $form->textField($model,'ing_hora_ing'); ?>
		<?php echo $form->error($model,'ing_hora_ing'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ing_hora_sal'); ?>
		<?php echo $form->textField($model,'ing_hora_sal'); ?>
		<?php echo $form->error($model,'ing_hora_sal'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ing_numero_est'); ?>
		<?php echo $form->textField($model,'ing_numero_est'); ?>
		<?php echo $form->error($model,'ing_numero_est'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->