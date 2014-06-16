<h1>Informe de Ventas</h1>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'venta',
    'type'=>'horizontal',
)); ?>

<p class="note">Seleccione una opción</p>
    
<select name="dropdownlist">

<?php

    $options = array('informeDiario' => 'Informe Diario', 'informeMensual' => 'Informe Mensual',);

 
    foreach($options as $value => $caption)
   {
        echo "<option value=\"$value\">$caption</option>";

   }

?>
</select>



<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Generar informe')); ?>
</div>
 
<?php $this->endWidget(); ?>

