<label>Generar Boleta</label>


<div class="well">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'vehiculo-autorizado-form',
    'enableAjaxValidation'=>false,
)); ?>

<?php $patentes=Ingreso::model()->ocupados(); ?>

    <label>Rut cliente</label>
    <select name='patente'>'
        <?php
        foreach ($patentes as $value) { ?>
          <option> <?php echo $value->ing_codigo.' '.$value->v_patente ?> </option>
        <?php } ?>
    </select>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
</div>

<?php $this->endWidget(); ?>
</div><!-- form -->




