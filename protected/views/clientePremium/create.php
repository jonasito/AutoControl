<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */

$this->breadcrumbs=array(
	'Cliente Premia'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClientePremium', 'url'=>array('index')),
	array('label'=>'Manage ClientePremium', 'url'=>array('admin')),
);
?>

<h1>Create ClientePremium</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>