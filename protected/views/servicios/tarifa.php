<h1>Tarifa</h1>

<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Ver tarifas',  'url'=>array('/servicios/fijar_tarifas')),
        array('label'=>'Crear tarifa', 'url'=>array('/servicios/tarifa')),
        array('label'=>'Fijar estacionamientos', 'url'=>array('/servicios/estacionamiento')),
    ),
)); ?>


<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con<span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<label>Tipo de tarifa</label>
	<select name='tipo'>
		<?php
		    $tipo=array("HORA","MEDIA HORA");
		    foreach ($tipo as $i => $value) { ?>
				  <option> <?php echo $tipo[$i] ?> </option>
		    <?php } ?>	
	</select>

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

 

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
        ),
        )
    ); ?>


