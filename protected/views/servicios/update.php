<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	$model->ser_id=>array('view','id'=>$model->ser_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Servicios', 'url'=>array('index')),
	array('label'=>'Ingresar Servicios', 'url'=>array('create')),
	array('label'=>'Ver Servicios', 'url'=>array('view', 'id'=>$model->ser_id)),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Servicio #<?php echo $model->ser_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
        ),
        )
    ); ?>