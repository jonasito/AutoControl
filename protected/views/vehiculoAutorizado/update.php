<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */

$this->breadcrumbs=array(
	'Vehiculo Autorizados'=>array('index'),
	$model->v_patente=>array('view','id'=>$model->v_patente),
	'Update',
);

$this->menu=array(
	array('label'=>'List VehiculoAutorizado', 'url'=>array('index')),
	array('label'=>'Create VehiculoAutorizado', 'url'=>array('create')),
	array('label'=>'View VehiculoAutorizado', 'url'=>array('view', 'id'=>$model->v_patente)),
	array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Update VehiculoAutorizado <?php echo $model->v_patente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>