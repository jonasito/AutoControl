<?php
/* @var $this ServiciosController */
/* @var $dataProvider CActiveDataProvider */
?>


<h1>Servicios</h1>

<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Ver tarifas', 'url'=>array('/ingreso/consulta_cliente'), 'active'=>true),
        array('label'=>'Consulta cliente', 'url'=>array('/ingreso/cliente')),
        //array('label'=>'Ver disponibilidad', 'url'=>array('/servicios/estacionamiento')),
    ),
)); ?>

<div class"portlet-content">
    <br>
    <label>Puedes consultar la disponibilidad de estacionamientos</label>
    <label>La disponibilidad puede variar entre la hora de consulta y la hora de entrada al estacionamiento</label>
    <br>
    <div class"well">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
            'label'=>'Ver disponibilidad',
            'type'=>'danger',
            'htmlOptions'=>array(
                'data-toggle'=>'modal',
                'data-target'=>'#myModal',
            ),
    )); ?>
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
    <br>
    <br><br>
    <br>
    
    </div>
</div>


