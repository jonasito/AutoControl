<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */
/* @var $form CActiveForm */
?>
<div class="well", style='background-color: #FEEBC1'>
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cli_rut'); ?>
		<?php echo $form->textField($model,'cli_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_nombre'); ?>
		<?php echo $form->textField($model,'cli_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_apellido'); ?>
		<?php echo $form->textField($model,'cli_apellido',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_telefono'); ?>
		<?php echo $form->textField($model,'cli_telefono',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_direccion'); ?>
		<?php echo $form->textField($model,'cli_direccion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_email'); ?>
		<?php echo $form->textField($model,'cli_email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_contraseña'); ?>
		<?php echo $form->textField($model,'cli_contraseña',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>