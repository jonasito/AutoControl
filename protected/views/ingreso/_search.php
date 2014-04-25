<?php
/* @var $this IngresoController */
/* @var $model Ingreso */
/* @var $form CActiveForm */
?>

<div class="well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="">
		<?php echo $form->label($model,'ing_codigo'); ?>
		<?php echo $form->textField($model,'ing_codigo'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'v_patente'); ?>
		<?php echo $form->textField($model,'v_patente',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'ing_fecha'); ?>
		<?php echo $form->textField($model,'ing_fecha'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'ing_hora_ing'); ?>
		<?php echo $form->textField($model,'ing_hora_ing'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'ing_hora_sal'); ?>
		<?php echo $form->textField($model,'ing_hora_sal'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'ing_numero_est'); ?>
		<?php echo $form->textField($model,'ing_numero_est'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->