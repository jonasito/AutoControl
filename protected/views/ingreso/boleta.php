<label>Generar Boleta</label>

<?php
if($id!=null)echo '<label>el id es </label>'.$id;
?>

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'patente-form',
        'htmlOptions'=>array('class'=>'well'),
        'enableAjaxValidation'=>true,
    )); ?>

<?php $patentes=Ingreso::model()->ocupados(); ?>

    <label>Rut cliente</label>
    <select name='numero'>'
        <?php
        foreach ($patentes as $value) { ?>

            <option type="checkbox" name="numero" value= <?php echo $value->ing_codigo ?> > <?php echo $value->v_patente ?>
        
        <?php } ?>
    </select>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
</div>

<?php $this->endWidget(); ?>





