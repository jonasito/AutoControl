<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */

$this->breadcrumbs=array(
	'Cliente Premia'=>array('index'),
	$model->cli_rut,
);

$this->menu=array(
	array('label'=>'List ClientePremium', 'url'=>array('index')),
	array('label'=>'Create ClientePremium', 'url'=>array('create')),
	array('label'=>'Update ClientePremium', 'url'=>array('update', 'id'=>$model->cli_rut)),
	array('label'=>'Delete ClientePremium', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cli_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClientePremium', 'url'=>array('admin')),
);
?>

<h1>View ClientePremium #<?php echo $model->cli_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cli_rut',
		'cli_nombre',
		'cli_apellido',
		'cli_telefono',
		'cli_direccion',
		'cli_email',
		'cli_contraseña',
	),
)); ?>
