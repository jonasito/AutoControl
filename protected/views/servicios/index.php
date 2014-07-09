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

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
