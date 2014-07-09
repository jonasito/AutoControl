<h1>Generar Boleta</h1>
<?php

$this->breadcrumbs=array(
   // 'Ingreso'=>array('index'),
    //'Boleta',
);

?>

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'patente-form',
        //'htmlOptions'=>array('class'=>'well'),
        'enableAjaxValidation'=>true,
    )); ?>

<?php $patentes=Ingreso::model()->ocupados(); ?>

<div class="well", style='background-color: #FEEBC1'>
    <label>Seleccione patente</label>
    <select name='numero'>'
        <?php
        foreach ($patentes as $value) { ?>

            <option type="checkbox" name="numero" value= <?php echo $value->ing_codigo ?> > <?php echo $value->v_patente ?>
        
        <?php } ?>
    </select>

<div class="form-actions", style='background-color: #FEEBC1'>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'', 'label'=>'Generar boleta')); ?>
</div>

<?php $this->endWidget(); ?>
</div>




