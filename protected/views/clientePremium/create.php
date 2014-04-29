<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */

$this->breadcrumbs=array(
	'Cliente Premia'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Cliente Premium', 'url'=>array('index')),
	array('label'=>'Administrar Cliente Premium', 'url'=>array('admin')),
);
?>

<h1>Registrar Cliente Premium</h1>

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