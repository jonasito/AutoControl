<?php
/* @var $this VehiculoAutorizadoController */
/* @var $model VehiculoAutorizado */



$this->menu=array(
	array('label'=>'Listar Vehiculos Autorizados', 'url'=>array('index')),
	array('label'=>'Ingresar Vehiculo Autorizado', 'url'=>array('create')),
	array('label'=>'Ver Vehiculo Autorizado', 'url'=>array('view', 'id'=>$model->v_patente)),
	//array('label'=>'Manage VehiculoAutorizado', 'url'=>array('admin')),
);
?>

<h1>Update VehiculoAutorizado <?php echo $model->v_patente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>