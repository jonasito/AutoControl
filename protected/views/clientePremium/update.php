<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */

$this->breadcrumbs=array(
	'Cliente Premium'=>array('index'),
	$model->cli_rut=>array('view','id'=>$model->cli_rut),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Cliente Premium', 'url'=>array('index')),
	array('label'=>'Crear Cliente Premium', 'url'=>array('create')),
	array('label'=>'Ver Cliente Premium', 'url'=>array('view', 'id'=>$model->cli_rut)),
	array('label'=>'Administrar Cliente Premium', 'url'=>array('admin')),
);
?>

<h1>Actualizar datos de Cliente Premium <?php echo $model->cli_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>