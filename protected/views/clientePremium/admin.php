<?php
/* @var $this ClientePremiumController */
/* @var $model ClientePremium */

$this->breadcrumbs=array(
	'Cliente Premia'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Cliente Premium', 'url'=>array('index')),
	array('label'=>'Crear Cliente Premium', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-premium-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Cliente Premium</h1>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'cli_rut', 'header'=>'Rut'),
        array('name'=>'cli_nombre', 'header'=>'Nombre'),
        array('name'=>'cli_apellido', 'header'=>'Apellido'),
        array('name'=>'cli_telefono', 'header'=>'Telefono'),
        array('name'=>'cli_direccion', 'header'=>'Direccion'),
        array('name'=>'cli_email', 'header'=>'Email'),
        array('name'=>'cli_contraseña', 'header'=>'Contraseña'),


        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>

