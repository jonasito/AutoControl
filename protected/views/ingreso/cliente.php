<h1>Información a cliente</h1>
<div class="well", style='background-color: #FEEBC1'>
<?php

$this->breadcrumbs=array(
    //'Info Cliente',
);

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'patente-form',
       // 'htmlOptions'=>array('class'=>'well'),
        'enableAjaxValidation'=>true,
    )); ?>


<?php $patentes=Ingreso::model()->ocupados(); ?>

    <label>Patente</label>
    
    <input name="numero" type="text" placeholder="Ej: AA1111">
   

    <div class="radio">
      <label>
        <input type="radio" name="opciones" id="opciones" value="1" checked>
        cliente normal
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="opciones" id="opciones" value="2">
        cliente premium
      </label>
    </div>


<div class="form-actions", style='background-color: #FEEBC1'>
    <?php $this->widget('bootstrap.widgets.TbButton', array('id'=>'myModal', 'buttonType'=>'submit', 'type'=>'', 'label'=>'Consultar'));?>
</div>


<!--MODAAAAAAAAAL MODAAAAAAAAAL MODAAAAAAAAAAAAL-->
    

<!--FIN MODAAAAAAAAAL FIN MODAAAAAAAAAAAL FIN MODAAAAAAAAAAAL-->

<?php $this->endWidget(); ?>


<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
            'alerts'=>array( // configurations per alert type
            'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
        ),
        )
    ); ?>

</div>