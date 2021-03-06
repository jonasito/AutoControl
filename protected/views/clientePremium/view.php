<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */

$this->breadcrumbs=array(
    //'Cliente Premium'=>array('index'),
    //$model->cli_rut,
);

$this->menu=array(
	array('label'=>'Listar Cliente Premium', 'url'=>array('index')),
	array('label'=>'Registrar Cliente Premium', 'url'=>array('create')),
    array('label'=>'Administrar Cliente Premium', 'url'=>array('admin')),
	array('label'=>'Actualizar Cliente Premium', 'url'=>array('update', 'id'=>$model->cli_rut)),
	array('label'=>'Eliminar Cliente Premium', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cli_rut),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>Ver Cliente Premium <?php echo $model->cli_rut; ?></h1>


<div class="well", style='background-color: #FEEBC1'>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array('name'=>'cli_rut', 'label'=>'Rut'),
        array('name'=>'cli_nombre', 'label'=>'Nombre'),
        array('name'=>'cli_apellido', 'label'=>'Apellido'),
        array('name'=>'cli_telefono', 'label'=>'Teléfono'),
        array('name'=>'cli_direccion', 'label'=>'Dirección'),
        array('name'=>'cli_email', 'label'=>'Email'),
        //array('name'=>'cli_contraseña', 'label'=>'Contraseña'),
   ),
)); ?>
</div>