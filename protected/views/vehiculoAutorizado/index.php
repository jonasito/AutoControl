<?php
/* @var $this VehiculoAutorizadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehiculo Autorizados',
);

$this->menu=array(
	array('label'=>'Create VehiculoAutorizado', 'url'=>array('create')),
	array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Vehiculo Autorizados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
