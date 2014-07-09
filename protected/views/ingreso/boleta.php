<label>Generar Boleta</label>

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'patente-form',
        'htmlOptions'=>array('class'=>'well'),
        'enableAjaxValidation'=>true,
    )); ?>

<?php $patentes=Ingreso::model()->ocupados(); ?>

    <label>Seleccione patente</label>
    <select name='numero'>'
        <?php
        foreach ($patentes as $value) { ?>

            <option type="checkbox" name="numero" value= <?php echo $value->ing_codigo ?> > <?php echo $value->v_patente ?>
        
        <?php } ?>
    </select>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'danger', 'label'=>'Generar boleta')); ?>
</div>

<?php $this->endWidget(); ?>





