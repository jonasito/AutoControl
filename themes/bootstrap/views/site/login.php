<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */



$this->pageTitle=Yii::app()->name . ' - Ingresar';
?>
<div class="well">
<h1>Ingreso</h1>

<!--p>Please fill out the following form with your login credentials:</p-->

<div class="well", style='background-color: #FEEBC1'>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'striped bordered condensed',
	'enableClientValidation'=>true,



	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->textFieldRow($model,'username'); ?>

	<?php echo $form->passwordFieldRow($model,'password'/*,array('hint'=>'Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>',
    )*/); ?>

	<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

	
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'',
            'label'=>'Ingresar',
        )); ?>
	

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>