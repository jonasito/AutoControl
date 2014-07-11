<h1>Tarifa</h1>

<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Ver tarifas',  'url'=>array('/servicios/fijar_tarifas')),
        array('label'=>'Crear tarifa', 'url'=>array('/servicios/tarifa')),
        array('label'=>'Fijar estacionamientos','url'=>array('/servicios/estacionamiento') ),
    ),
)); ?>


<form class="well form-inline" method="post">
  <input type="text" name="cant" class="span3" placeholder="ej: 30">
  <button type="submit" class="btn">Guardar</button>
</form>
 

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
        ),
        )
    ); ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


