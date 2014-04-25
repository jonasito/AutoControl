<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
	'Ingresos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Ingreso', 'url'=>array('index')),
	array('label'=>'Administrar Ingreso', 'url'=>array('admin')),
);
?>

<h1>Create Ingreso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>