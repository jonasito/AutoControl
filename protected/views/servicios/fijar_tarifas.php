<?php
/* @var $this ServiciosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	//'Servicios',
);

$this->menu=array(
	array('label'=>'Ingresar Servicios', 'url'=>array('create')),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<h1>Servicios</h1>

<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Ver tarifas', 'url'=>array('/servicios/fijar_tarifas'), 'active'=>true),
        array('label'=>'Crear tarifa', 'url'=>array('/servicios/tarifa')),
        array('label'=>'Fijar estacionamientos', 'url'=>array('/servicios/estacionamiento')),
    ),
)); ?>

<?php 
$tarifa=Servicios::model()->tarifa();
?>

<?php $this->widget('zii.widgets.CListView', array(
    //'dataProvider'=>$dataProvider,
    'dataProvider'=>$tarifa,
    'itemView'=>'_view',
)); ?>
