<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */

$this->breadcrumbs=array(
	'Vehiculo Autorizados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VehiculoAutorizado', 'url'=>array('index')),
	array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Create VehiculoAutorizado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>