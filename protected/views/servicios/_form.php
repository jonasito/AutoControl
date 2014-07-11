<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<div class="well", style='background-color: #FEEBC1'>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con<span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'ser_nombre'); ?>
		<?php echo $form->textField($model,'ser_nombre',array('class'=>'span3','size'=>50,'maxlength'=>50,'placeholder'=>"Ej: Lavado del vehiculo")); ?>
		<?php echo $form->error($model,'ser_nombre'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ser_descripcion'); ?>
		<?php echo $form->textArea($model,'ser_descripcion',array('class'=>'span3','size'=>60,'maxlength'=>100,'placeholder'=>"Ej: Lavado del vehiculo, no incluye encerado")); ?>
		<?php echo $form->error($model,'ser_descripcion'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'ser_valor'); ?>
		<?php echo $form->textField($model,'ser_valor',array('class'=>'span3','placeholder'=>"Ej: 10000")); ?>
		<?php echo $form->error($model,'ser_valor'); ?>
	</div>

	<div class="">
 		<?php echo $form->labelEx($model,'ser_fecha_inicio'); ?>
 		<?php

  			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
   			'model'=>$model,
		   	'attribute'=>'ser_fecha_inicio',
		   	'value'=>$model->ser_fecha_inicio,
		   	'language' => 'es',
		   	'htmlOptions' => array('class'=>'span3','style'=>'height:20px;'),
		   	'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$model->ser_fecha_inicio,
		    'dateFormat'=>'dd-mm-yy',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'fold',
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    //'minDate'=>'date("Y-m-d")', 
		    'maxDate'=> "+20Y",
		    ),
		  )); 
		 ?>
 		<?php echo $form->error($model,'ser_fecha_inicio'); ?>
	</div>

	<div class="">
 		<?php echo $form->labelEx($model,'ser_fecha_termino'); ?>
 		<?php
  			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
   			'model'=>$model,
		   	'attribute'=>'ser_fecha_termino',
		   	'value'=>$model->ser_fecha_termino,
		   	'language' => 'es',
		   	'htmlOptions' => array('class'=>'span3','style'=>'height:20px;'),
		   	'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$model->ser_fecha_termino,
		    'dateFormat'=>'dd-mm-yy',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    //'minDate'=>'date("Y-m-d")', 
		    'maxDate'=> "+20Y",
		    ),
		  )); 
		 ?>
 		<?php echo $form->error($model,'ser_fecha_termino'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Guardar'); ?>
		<?php echo CHtml::resetButton('Cancelar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->




