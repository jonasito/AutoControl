<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	'Administrar',
);

$this->menu=array(
/* @var $this ServiciosController */
/* @var $model Servicios */
	array('label'=>'Listar Servicios', 'url'=>array('index')),
	array('label'=>'Ingresar Servicios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#servicios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Servicios</h1>


<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'template'=>"{items}",
    'columns'=>array(
        //array('name'=>'ser_id', 'header'=>'Id'),
        array('name'=>'ser_nombre', 'header'=>'Nombre'),
        array('name'=>'ser_descripcion', 'header'=>'Descripción'),
        array('name'=>'ser_valor', 'header'=>'Valor'),
        array('name'=>'ser_fecha_inicio', 'header'=>'Fecha inicio'),
        array('name'=>'ser_fecha_termino', 'header'=>'Fecha término'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>