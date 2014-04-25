<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-premium-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_rut'); ?>
		<?php echo $form->textField($model,'cli_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'cli_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_nombre'); ?>
		<?php echo $form->textField($model,'cli_nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cli_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_apellido'); ?>
		<?php echo $form->textField($model,'cli_apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cli_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_telefono'); ?>
		<?php echo $form->textField($model,'cli_telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'cli_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_direccion'); ?>
		<?php echo $form->textField($model,'cli_direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cli_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_email'); ?>
		<?php echo $form->textField($model,'cli_email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cli_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_contraseña'); ?>
		<?php echo $form->textField($model,'cli_contraseña',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cli_contraseña'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->