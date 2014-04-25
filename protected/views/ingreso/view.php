<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
	'Ingresos'=>array('index'),
	$model->ing_codigo,
);

$this->menu=array(
	array('label'=>'List Ingreso', 'url'=>array('index')),
	array('label'=>'Create Ingreso', 'url'=>array('create')),
	array('label'=>'Update Ingreso', 'url'=>array('update', 'id'=>$model->ing_codigo)),
	array('label'=>'Delete Ingreso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ing_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ingreso', 'url'=>array('admin')),
);
?>

<h1>View Ingreso #<?php echo $model->ing_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ing_codigo',
		'v_patente',
		'ing_fecha',
		'ing_hora_ing',
		'ing_hora_sal',
		'ing_numero_est',
	),
)); ?>
