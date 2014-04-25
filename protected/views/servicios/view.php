<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->ser_id,
);

$this->menu=array(
	array('label'=>'List Servicios', 'url'=>array('index')),
	array('label'=>'Create Servicios', 'url'=>array('create')),
	array('label'=>'Update Servicios', 'url'=>array('update', 'id'=>$model->ser_id)),
	array('label'=>'Delete Servicios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ser_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>View Servicios #<?php echo $model->ser_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ser_id',
		'ser_nombre',
		'ser_descripcion',
		'ser_valor',
		'ser_fecha_inicio',
		'ser_fecha_termino',
	),
)); ?>
