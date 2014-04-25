<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs=array(
	'Administrador'=>array('index'),
	$model->admin_rut=>array('view','id'=>$model->admin_rut),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Administrador', 'url'=>array('index')),
	array('label'=>'Crear Administrador', 'url'=>array('create')),
	array('label'=>'Ver Administrador', 'url'=>array('view', 'id'=>$model->admin_rut)),
	array('label'=>'Administrar Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Administrador <?php echo $model->admin_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>