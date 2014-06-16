<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	$model->ser_id,
);

$this->menu=array(
	array('label'=>'Listar Servicios', 'url'=>array('index')),
	array('label'=>'Ingresar Servicios', 'url'=>array('create')),
	array('label'=>'Administrar Servicios', 'url'=>array('update', 'id'=>$model->ser_id)),
	array('label'=>'Eliminar Servicios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ser_id),'confirm'=>'Estás seguro que deseas eliminar este servicio?')),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<h1>Ver Servicio #<?php echo $model->ser_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        //array('name'=>'ser_id','label'=>'Id'),
        array('name'=>'ser_nombre', 'label'=>'Nombre'),
        array('name'=>'ser_descripcion', 'label'=>'Descripción'),
        array('name'=>'ser_valor', 'label'=>'Valor $'),
        array('name'=>'ser_fecha_inicio', 'label'=>'Fecha inicio'),
        array('name'=>'ser_fecha_termino', 'label'=>'Fecha término'),
    ),
)); ?>

