<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
	'Ingresos'=>array('index'),
	$model->ing_codigo,
);

$this->menu=array(
	array('label'=>'Listar Ingreso', 'url'=>array('index')),
	array('label'=>'Crear Ingreso', 'url'=>array('create')),
	array('label'=>'Actualizar Ingreso', 'url'=>array('update', 'id'=>$model->ing_codigo)),
	array('label'=>'Eliminar Ingreso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ing_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Ingreso', 'url'=>array('admin')),
);
?>

<h1>Ingreso # <?php echo $model->ing_codigo; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array('name'=>'ing_codigo', 'label'=>'Codigo'),
        array('name'=>'v_patente', 'label'=>'Patente'),
        array('name'=>'ing_fecha', 'label'=>'Fecha'),
        array('name'=>'ing_hora_ing', 'label'=>'Hora de ingreso'),
        array('name'=>'ing_hora_sal', 'label'=>'Hora de salida'),
        array('name'=>'ing_numero_est', 'label'=>'Estacionamiento'),
    ),
)); ?>