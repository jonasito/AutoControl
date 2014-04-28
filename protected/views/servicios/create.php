<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	'Ingresar',
);

$this->menu=array(
	array('label'=>'Listar Servicios', 'url'=>array('index')),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<h1>Ingresar Servicios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>