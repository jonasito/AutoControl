<?php
/* @var $this ClientePremiumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cliente Premia',
);

$this->menu=array(
	array('label'=>'Create ClientePremium', 'url'=>array('create')),
	array('label'=>'Manage ClientePremium', 'url'=>array('admin')),
);
?>

<h1>Cliente Premia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
