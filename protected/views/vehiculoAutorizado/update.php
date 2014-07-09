<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */

$this->breadcrumbs=array(
    //'Vehículo Autorizado'=>array('index'),
    //$model->admin_rut=>array('view','id'=>$model->admin_rut),
    //'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Vehículos Autorizados', 'url'=>array('index')),
	array('label'=>'Ingresar Vehículo Autorizado', 'url'=>array('create')),
	array('label'=>'Ver Vehículo Autorizado', 'url'=>array('view', 'id'=>$model->v_patente)),
	//array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Actualizar Vehículo Autorizado <?php echo $model->v_patente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>