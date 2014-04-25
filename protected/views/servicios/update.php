<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->ser_id=>array('view','id'=>$model->ser_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Servicios', 'url'=>array('index')),
	array('label'=>'Create Servicios', 'url'=>array('create')),
	array('label'=>'View Servicios', 'url'=>array('view', 'id'=>$model->ser_id)),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>Update Servicios <?php echo $model->ser_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>