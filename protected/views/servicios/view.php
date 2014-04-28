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
	array('label'=>'Eliminar Servicios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ser_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'ser_id', 'header'=>'Id'),
        array('name'=>'ser_nombre', 'header'=>'Nombre'),
        array('name'=>'ser_descripcion', 'header'=>'Descripción'),
        array('name'=>'ser_valor', 'header'=>'Valor'),
        array('name'=>'ser_fecha_inicio', 'header'=>'Fecha inicio'),
        array('name'=>'ser_fecha_termino', 'header'=>'Fecha término'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>
