<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ser_id'); ?>
		<?php echo $form->textField($model,'ser_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ser_nombre'); ?>
		<?php echo $form->textField($model,'ser_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ser_descripcion'); ?>
		<?php echo $form->textField($model,'ser_descripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ser_valor'); ?>
		<?php echo $form->textField($model,'ser_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ser_fecha_inicio'); ?>
		<?php echo $form->textField($model,'ser_fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ser_fecha_termino'); ?>
		<?php echo $form->textField($model,'ser_fecha_termino'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->