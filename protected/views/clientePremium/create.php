<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */

$this->breadcrumbs=array(
	'Cliente Premia'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Cliente Premium', 'url'=>array('index')),
	array('label'=>'Administrar Cliente Premium', 'url'=>array('admin')),
);
?>

<h1>Registrar Cliente Premium</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>