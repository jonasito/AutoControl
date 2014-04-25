<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
	'Ingresos'=>array('index'),
	$model->ing_codigo=>array('view','id'=>$model->ing_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ingreso', 'url'=>array('index')),
	array('label'=>'Create Ingreso', 'url'=>array('create')),
	array('label'=>'View Ingreso', 'url'=>array('view', 'id'=>$model->ing_codigo)),
	array('label'=>'Manage Ingreso', 'url'=>array('admin')),
);
?>

<h1>Update Ingreso <?php echo $model->ing_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>