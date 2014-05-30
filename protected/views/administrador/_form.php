<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/JS/rut.js');
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'administrador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'admin_rut'); ?>
		<?php echo $form->textField($model,'admin_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'admin_rut'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'admin_nombre'); ?>
		<?php echo $form->textField($model,'admin_nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'admin_nombre'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'admin_apellido'); ?>
		<?php echo $form->textField($model,'admin_apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'admin_apellido'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'admin_contraseña'); ?>
		<?php echo $form->textField($model,'admin_contraseña',array('type'=>'password', 'size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'admin_contraseña'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'admin_estacionamientos'); ?>
		<?php echo $form->textField($model,'admin_estacionamientos',array('numerical', 'min'=>0, 'intergerOnly'=>true)); ?>
		<?php echo $form->error($model,'admin_estacionamientos'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script> $("input[name ='Administrador[admin_rut]']").rut();




 </script>
