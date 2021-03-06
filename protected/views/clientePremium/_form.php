<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */
/* @var $form CActiveForm */
?>


<div class="well", style='background-color: #FEEBC1'>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-premium-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="" placeholder="111111111">
		<?php echo $form->labelEx($model,'Rut'); ?>
		<?php echo $form->textField($model,'cli_rut',array('class'=>'span3','size'=>12,'maxlength'=>12, 'placeholder'=>'Ej: 111111111')); ?>
		<?php echo $form->error($model,'cli_rut'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'cli_nombre',array('class'=>'span3','size'=>50,'maxlength'=>50, 'placeholder'=>'Ej: Juan')); ?>
		<?php echo $form->error($model,'cli_nombre'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'cli_apellido',array('class'=>'span3','size'=>50,'maxlength'=>50,'placeholder'=> "Ej: Pérez")); ?>
		<?php echo $form->error($model,'cli_apellido'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'Teléfono'); ?>
		<?php echo $form->textField($model,'cli_telefono',array('class'=>'span3','size'=>15,'maxlength'=>15, 'placeholder'=>'Ej: 3185007')); ?>
		<?php echo $form->error($model,'cli_telefono'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'Dirección'); ?>
		<?php echo $form->textField($model,'cli_direccion',array('class'=>'span3','size'=>50,'maxlength'=>50, 'placeholder'=>'Ej: Rosas 325')); ?>
		<?php echo $form->error($model,'cli_direccion'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'cli_email',array('class'=>'span3','size'=>50,'maxlength'=>50, 'placeholder'=>'Ej: ejemplo@gmail.com')); ?>
		<?php echo $form->error($model,'cli_email'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'Contraseña'); ?>
		<?php echo $form->passwordfield($model,'cli_contraseña',array('class'=>'span3','type'=>'password', 'size'=>5,'maxlength'=>10)); ?>
		<?php //echo $form->passwordFieldRow($model,'cli_contraseña'); ?>
		<?php echo $form->error($model,'cli_contraseña'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
		<?php echo CHtml::resetButton('Cancelar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->