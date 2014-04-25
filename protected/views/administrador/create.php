<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs=array(
	'Administrador'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Administrador', 'url'=>array('index')),
	array('label'=>'Administrar Administrador', 'url'=>array('admin')),
);
?>

<h1>Crear Administrador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>