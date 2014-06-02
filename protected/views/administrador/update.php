<?php
/* @var $this AdministradorController */
/* @var $model Administrador */



$this->menu=array(
	array('label'=>'Listar Administrador', 'url'=>array('index')),
	array('label'=>'Crear Administrador', 'url'=>array('create')),
	array('label'=>'Ver Administrador', 'url'=>array('view', 'id'=>$model->admin_rut)),
	array('label'=>'Administrar Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Administrador <?php echo $model->admin_rut; ?></h1>

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
<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
        ),
        )
); ?>