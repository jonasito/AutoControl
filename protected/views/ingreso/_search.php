<?php
/* @var $this IngresoController */
/* @var $model Ingreso */
/* @var $form CActiveForm */
?>

<!--div class="well">

<?php /** @var BootActiveForm $form */
/*$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    //'id'=>'inlineForm',
    'type'=>'inline',
    'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    //'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->textFieldRow($model, 'ing_codigo', array('class'=>'input-small')); ?>
<?php echo $form->textFieldRow($model, 'v_patente', array('class'=>'input-small')); ?>
<?php echo $form->textFieldRow($model, 'ing_fecha', array('class'=>'input-small')); ?>

<?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Log in')); ?>
 
<div class="buttons">
		<?php echo CHtml::submitButton('Search'); ?>
</div>


<?php $this->endWidget();*/ ?>

<div-->

<!-- ---------------comentar-------------------- -->
<div class="well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="">
		<?php echo $form->label($model,'ing_codigo'); ?>
		<?php echo $form->textField($model,'ing_codigo'); ?>
	

	
		<?php echo $form->label($model,'v_patente'); ?>
		<?php echo $form->textField($model,'v_patente',array('size'=>10,'maxlength'=>10)); ?>
	

	
		<?php echo $form->label($model,'ing_fecha'); ?>
		<?php echo $form->textField($model,'ing_fecha'); ?>
	</div>

	<!--div class="">
		<?php //echo $form->label($model,'ing_hora_ing'); ?>
		<?php //echo $form->textField($model,'ing_hora_ing'); ?>
	</div>

	<div class="">
		<?php //echo $form->label($model,'ing_hora_sal'); ?>
		<?php //echo $form->textField($model,'ing_hora_sal'); ?>
	</div>

	<div class="">
		<?php //echo $form->label($model,'ing_numero_est'); ?>
		<?php //echo $form->textField($model,'ing_numero_est'); ?>
	</div-->

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->