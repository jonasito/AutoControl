<?php
$fecha=date('d-m-Y');
$hora=date("H:i:s",time()-21600);

/* @var $this IngresoController */
/* @var $model Ingreso */
/* @var $form CActiveForm */
?>

	<?php /** @var BootActiveForm $form */
	//$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	    'id'=>'ingreso-form',
	    'htmlOptions'=>array('class'=>'well'),
	    'enableAjaxValidation'=>true,
	)); ?>

	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
 
	<?php echo $form->textFieldRow($model, 'v_patente', array('class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model, 'ing_fecha', array('value'=>$fecha, 'disabled'=>'disabled','class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model, 'ing_hora_ing', array('value'=>$hora, 'disabled'=>'disabled','class'=>'span3')); ?>
	<?php //echo $form->textFieldRow($model, 'ing_hora_sal', array('class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model, 'ing_numero_est', array('class'=>'span3','hint'=>'Estacionar entre 1 - '.Yii::app()->getSession()->get('est').' ' ) ); ?>




	<?php
    $serv=Servicios::model()->serviciosActivos($fecha)
    ?>

    <?php
    foreach ($serv as $value) { ?>

    <label class="checkbox ">
      <input type="checkbox" name="numero[]" value= <?php echo $value->ser_id ?> > <?php echo $value->ser_nombre." $".$value->ser_valor ?>
    <!-- usar split y poner el id $model->ing_codigo-->
    </label>

    <?php } ?>




	<div class="buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::submitButton('Generar'); ?>
		<?php echo CHtml::resetButton('Limpiar'); ?>
	</div>

	<?php $this->endWidget(); ?>


