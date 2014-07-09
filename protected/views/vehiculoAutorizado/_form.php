<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */
/* @var $form CActiveForm */
?>
<div class="well", style='background-color: #FEEBC1'>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculo-autorizado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con<span class="required">*</span> son obligatorios</p>

	<?php echo $form->errorSummary($model); ?>

	<?php
    $cli=ClientePremium::model()->findAll();
    ?>
    <label>Rut cliente</label>
    <select name='rut'>
	    <?php
	    foreach ($cli as $value) { ?>
		  <option> <?php echo $value->cli_rut ?> </option>
	    <?php } ?>
	</select>



	<label>Tipo vehiculo</label>
    <select name='tipo'>
	    <?php
	    $tipo=array("automovil","camioneta","jeep","carro","furgon","station wagon","motocicleta","buggy","cuatrimoto");
	    foreach ($tipo as $i => $value) { ?>
		  <option> <?php echo $tipo[$i] ?> </option>
	    <?php } ?>
	</select>



	<div class="">
		<?php echo $form->labelEx($model,'v_patente'); ?>
		<?php echo $form->textField($model,'v_patente',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'v_patente'); ?>
	</div>

	<!--div class="">
		<?php //echo $form->labelEx($model,'cli_rut'); ?>
		<?php //echo $form->textField($model,'cli_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php //echo $form->error($model,'cli_rut'); ?>
	</div-->

	<!--div class="">
		<?php// echo $form->labelEx($model,'tipo'); ?>
		<?php// echo $form->textField($model,'tipo',array('size'=>20,'maxlength'=>20)); ?>
		<?php// echo $form->error($model,'tipo'); ?>
	</div-->

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>