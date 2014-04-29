<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */

$this->breadcrumbs=array(
	'Vehiculo Autorizados'=>array('index'),
	$model->v_patente,
);

$this->menu=array(
	array('label'=>'List VehiculoAutorizado', 'url'=>array('index')),
	array('label'=>'Create VehiculoAutorizado', 'url'=>array('create')),
	array('label'=>'Update VehiculoAutorizado', 'url'=>array('update', 'id'=>$model->v_patente)),
	array('label'=>'Delete VehiculoAutorizado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->v_patente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>View VehiculoAutorizado #<?php echo $model->v_patente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'v_patente',
		'cli_rut',
		'tipo',
	),
)); ?>
