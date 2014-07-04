<?php
/* @var $this VehiculoAutorizadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehículo Autorizado',
);

$this->menu=array(
	array('label'=>'Ingresar Vehículo Autorizado', 'url'=>array('create')),
	//array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Vehículo Autorizados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
