<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */

$this->breadcrumbs=array(
	'Cliente Premia'=>array('index'),
	$model->cli_rut=>array('view','id'=>$model->cli_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClientePremium', 'url'=>array('index')),
	array('label'=>'Create ClientePremium', 'url'=>array('create')),
	array('label'=>'View ClientePremium', 'url'=>array('view', 'id'=>$model->cli_rut)),
	array('label'=>'Manage ClientePremium', 'url'=>array('admin')),
);
?>

<h1>Update ClientePremium <?php echo $model->cli_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>