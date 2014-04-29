<!-- MODAL -->
<?php $fecha=date('d-m-Y'); ?>
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Servicios</h4>
</div>
 
<div class="modal-body">

    <?php 
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action'=>'/ingreso/servicios',
        'id'=>'obs',
        'method'=>'post',
        'type'=>'search',
        'htmlOptions'=>array('class'=>'well'),
    )); ?>

    <input type='hidden' name='id' value='<?php echo $model->ing_codigo ?>'>

    <?php
    $serv=Servicios::model()->serviciosActivos($fecha)
    ?>

    <?php
    foreach ($serv as $value) { ?>

    <label class="checkbox ">
      <input type="checkbox" name="numero[]" value= <?php echo $value->ser_id ?> > <?php echo $value->ser_nombre." $".$value->ser_valor ?>
    <!-- usar split y poner el id $model->ing_codigo-->
    </label>

    <?php } ?>
    



    <div class="modal-footer">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'type'=>'primary',
            'label'=>'Guardar',
            'buttonType'=>'submit',
           'url'=>'/ingreso/servicios',
            'htmlOptions'=>array('data-dismiss'=>'modal'),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'label'=>'Cerrar',
            'url'=>'#',
            'htmlOptions'=>array('data-dismiss'=>'modal'),
        )); ?>
    </div>


    <?php $this->endWidget(); ?>

</div>

<?php //echo CHtml::link('Link Text',array('ingreso/servicios','id'=>'<?php echo $model->ing_codigo ?>')); ?>

 
<?php $this->endWidget(); ?>



<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Agregar Servicios',
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    ),
)); ?>
