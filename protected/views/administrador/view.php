<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs=array(
	'Administrador'=>array('index'),
	$model->admin_rut,
);

$this->menu=array(
	array('label'=>'Listar Administrador', 'url'=>array('index')),
	array('label'=>'Crear Administrador', 'url'=>array('create')),
	array('label'=>'Modificar Administrador', 'url'=>array('update', 'id'=>$model->admin_rut)),
	array('label'=>'Eliminar Administrador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->admin_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Administrador', 'url'=>array('admin')),
);
?>

<h1>Ver Administrador #<?php echo $model->admin_rut; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
    'attributes'=>array(
        array('name'=>'admin_rut', 'label'=>'RUT'),
        array('name'=>'admin_nombre', 'label'=>'Nombre'),
        array('name'=>'admin_apellido', 'label'=>'Apellido'),
        //array('name'=>'admin_contraseña', 'label'=>'Contraseña'),
        array('name'=>'admin_estacionamientos', 'label'=>'N° Estacionamientos'),

    ),
)); ?>
