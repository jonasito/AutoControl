<?php
/* @var $this AdministradorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Administrador',
);

$this->menu=array(
	array('label'=>'Registrar Administrador', 'url'=>array('create')),
	array('label'=>'Administrar Administrador', 'url'=>array('admin')),
);
?>

<h1>Administrador</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
