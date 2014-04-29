<?php
/* @var $this VehiculoAutorizadoController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Ingresar Vehiculo Autorizado', 'url'=>array('create')),
	//array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Vehiculo Autorizados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
