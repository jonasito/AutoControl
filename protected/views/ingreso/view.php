<?php
/* @var $this IngresoController */
/* @var $model Ingreso */
$fecha=date('d-m-Y');


$this->menu=array(
	array('label'=>'Listar Ingreso', 'url'=>array('index')),
	array('label'=>'Crear Ingreso', 'url'=>array('create')),
	array('label'=>'Actualizar Ingreso', 'url'=>array('update', 'id'=>$model->ing_codigo)),
	array('label'=>'Eliminar Ingreso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ing_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Ingreso', 'url'=>array('admin')),
);
?>

<h1>Ingreso # <?php echo $model->ing_codigo; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array('name'=>'ing_codigo', 'label'=>'Codigo'),
        array('name'=>'v_patente', 'label'=>'Patente'),
        array('name'=>'ing_fecha', 'label'=>'Fecha'),
        array('name'=>'ing_hora_ing', 'label'=>'Hora de ingreso'),
        array('name'=>'ing_hora_sal', 'label'=>'Hora de salida'),
        array('name'=>'ing_numero_est', 'label'=>'Estacionamiento'),
    ),
)); ?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myServicios')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Servicios Adjuntados</h4>
</div>
 
<div class="modal-body">
    <h1>Ingreso # <?php echo $model->ing_codigo; ?></h1>
    <?php
        $servicios=Ingreso::model()->boleta($model->ing_codigo);
        if(!empty($servicios)){
            $total=0;
            echo "---------------- Servicios --------------------";
            foreach ($servicios as$value) {
                $total+=$value->ser_valor;
                echo '<label>'.$value->ser_nombre.' = '.$value->ser_valor.'</label>';
        }
        echo "---------------------------------------------";
        echo '<label>Total servicios = '.$total.'</label>';
        echo "---------------------------------------------";    
        }
        else{
            echo "---------------------------------------------";   
            echo '<label>No registra servicios</label>';
            echo "---------------------------------------------";
        }
    ?>
</div>
 
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Cerrar',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
 
<?php $this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Ver servicios',
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myServicios',
    ),
)); ?>

<?php //echo $this->renderPartial('_agregarServicios', array('model'=>$model)); ?>

