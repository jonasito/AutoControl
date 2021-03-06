<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/JS/rut.js');
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

	<div class="well", style='background-color: #FEEBC1'>

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
		<?php echo $form->textField($model,'admin_rut',array('class'=>'span3','size'=>12,'maxlength'=>12,'placeholder'=>'Ej: 111111111')); ?>
		<?php echo $form->error($model,'admin_rut'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'admin_nombre'); ?>
		<?php echo $form->textField($model,'admin_nombre',array('class'=>'span3','size'=>50,'maxlength'=>50,'placeholder'=>'Ej: Juan')); ?>
		<?php echo $form->error($model,'admin_nombre'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'admin_apellido'); ?>
		<?php echo $form->textField($model,'admin_apellido',array('class'=>'span3','size'=>50,'maxlength'=>50,'placeholder'=> "Ej: Pérez")); ?>
		<?php echo $form->error($model,'admin_apellido'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'admin_contraseña'); ?>
		<?php echo $form->textField($model,'admin_contraseña',array('class'=>'span3','type'=>'password', 'size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'admin_contraseña'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
		<?php echo CHtml::resetButton('Cancelar'); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form 

<script> $resutado = $("input[name ='Administrador[admin_rut]']").rut();
		if(resultado == "control-group error")
			<?php $model->admin_rut = -1; ?>
 </script>
-->