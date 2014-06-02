<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->menu=array(
	array('label'=>'Listar Administrador', 'url'=>array('index')),
	array('label'=>'Crear Administrador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#administrador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Administrador</h1>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'administrador-grid',
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'admin_rut', 'header'=>'RUT'),
        array('name'=>'admin_nombre', 'header'=>'Nombre'),
        array('name'=>'admin_apellido', 'header'=>'Apellido'),
        //array('name'=>'admin_contraseña', 'header'=>'Contraseña'),
        array('name'=>'admin_estacionamientos', 'header'=>'N° Estacionamientos'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>
