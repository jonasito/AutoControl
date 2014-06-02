<?php
/* @var $this ClientePremiumController */
/* @var $dataProvider CActiveDataProvider */



$this->menu=array(
	array('label'=>'Crear Cliente Premium', 'url'=>array('create')),
	array('label'=>'Administrar Cliente Premium', 'url'=>array('admin')),
);
?>

<h1>Cliente Premium</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
