<label>Generar Boleta</label>



<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'patente-form',
        'htmlOptions'=>array('class'=>'well'),
        'enableAjaxValidation'=>true,
    )); ?>

<?php $patentes=Ingreso::model()->ocupados(); ?>

    <label>Patente</label>
    
    <input name="numero" type="text" placeholder="Type something…">
   

    <div class="radio">
      <label>
        <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
        cliente normal
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="opciones" id="opciones_2" value="opcion_2">
        cliente premium
      </label>
    </div>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
</div>

<?php $this->endWidget(); ?>





