<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
    //'Ingreso'=>array('index'),
    //'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Ingreso', 'url'=>array('index')),
	array('label'=>'Registrar Ingreso', 'url'=>array('create')),
	//array('label'=>'Ver Ingreso', 'url'=>array('view', 'id'=>$model->ing_codigo)),
	//array('label'=>'Administrar Ingreso', 'url'=>array('admin')),
);
?>

<h1>Actuaizar Ingreso <?php echo $model->ing_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>