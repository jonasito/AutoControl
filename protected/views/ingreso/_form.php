<?php
$fecha=date('d-m-Y');
$hora = date('H:i:s'); 
/* @var $this IngresoController */
/* @var $model Ingreso */
/* @var $form CActiveForm */
?>

	<?php /** @var BootActiveForm $form */
	//$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	    'id'=>'ingreso-form',
	    'htmlOptions'=>array('class'=>'well'),
	    'enableAjaxValidation'=>false,
	)); ?>

	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
 
	<?php echo $form->textFieldRow($model, 'v_patente', array('class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model, 'ing_fecha', array('value'=>$fecha, 'disabled'=>'disabled','class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model, 'ing_hora_ing', array('value'=>$hora, 'disabled'=>'disabled','class'=>'span3')); ?>
	<?php //echo $form->textFieldRow($model, 'ing_hora_sal', array('class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model, 'ing_numero_est', array('class'=>'span3')); ?>

	<?php
	$id=23;
	$valor='sopa'; ?>

	<label class="checkbox ">
	  <input type="checkbox" id='<?php $id?>' value='<?php $id ?>' > <?php echo $id ?>
	</label>
	<label class="checkbox ">
	  <input type="checkbox" id="inlineCheckbox2" value="servicio 2"> 2
	</label>
	<label class="checkbox ">
	  <input type="checkbox" id="inlineCheckbox3" value="servicio 3"> 3
	</label>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php //echo $form->textFieldRow($model, 'textField', array('class'=>'span3')); ?>
	<?php //echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
	<?php //echo $form->checkboxRow($model, 'checkbox'); ?>
	<?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>
	 
	<?php $this->endWidget(); ?>




