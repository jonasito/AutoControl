<h1>Tarifa</h1>

<?php 
//$libre=Ingreso::model()->disponibilidad();
$model=Servicios::model();
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>





<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'NEWTARIFA')); ?>
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Disponibilidad</h4>
</div>
 
 <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

			<div class="modal-body">
			    
				<?php $model->ser_descripcion="valor estacionamiento"; ?>

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
					<?php echo $form->textField($model,'ser_valor',array('placeholder'=>"Ej: 10000")); ?>
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
					   	'htmlOptions' => array('style'=>'height:20px;'),
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
					   	'htmlOptions' => array('style'=>'height:20px;'),
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
			</div>
<?php $this->endWidget(); ?>
 
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'CERRAR',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
<?php $this->endWidget(); ?>


<?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'NUEVA TARIFA',
        //'type'=>'danger',
        'htmlOptions'=>array(
            'data-toggle'=>'modal',
            'data-target'=>'#NEWTARIFA',
        ),
    )); ?>




