<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */


$this->menu=array(
	array('label'=>'Listar Vehiculos Autorizados', 'url'=>array('index')),
	//array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Create VehiculoAutorizado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>