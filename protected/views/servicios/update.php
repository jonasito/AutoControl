<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	$model->ser_id=>array('view','id'=>$model->ser_id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Servicios', 'url'=>array('index')),
	array('label'=>'Ingresar Servicios', 'url'=>array('create')),
	array('label'=>'Ver Servicios', 'url'=>array('view', 'id'=>$model->ser_id)),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<h1>Modificar Servicios <?php echo $model->ser_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>