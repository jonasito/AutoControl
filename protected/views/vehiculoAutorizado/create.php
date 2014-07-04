<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */

$this->breadcrumbs=array(
    'Vehículo Autorizado'=>array('index'),
    'Ingresar',
);

$this->menu=array(
	array('label'=>'Listar Vehículos Autorizados', 'url'=>array('index')),
	//array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Ingresar VehiculoAutorizado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>