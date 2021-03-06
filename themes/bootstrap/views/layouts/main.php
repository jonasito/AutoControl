<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php Yii::app()->bootstrap->register(); ?>
</head>

<body>



<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Disponibilidad</h4>
</div>
 
<div class="modal-body">
    <?php 
    $libre=Ingreso::model()->disponibilidad();
    if(!is_null($libre)){ ?>
    <div class=""  style="color:#F43249" >
        <table class="table">
            <thead>
                <tr>
                    <th>Libre</th>
                    <th>Número</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i=0; $i < count($libre); $i++) {
                    echo '<tr>'; 
                        echo '<td>Libre</td>';
                        echo '<td>'; echo $libre[$i]; echo '</td>';  
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
        }else echo '<label>sin estacionamientos</label>';
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





<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Inicio', 'url'=>array('/site/index')),
                //array('label'=>'Nosotros', 'url'=>array('/site/page', 'view'=>'about'),'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Contacto', 'url'=>array('/site/contact'),'visible'=>Yii::app()->user->isGuest),
                //array('label'=>'Disponibilidad', 'url'=>array('/ingreso/disponibilidad')),
                
                //array('label'=>'Info cliente', 'url'=>array('/ingreso/cliente')),
                array('label'=>'Info cliente', 'url'=>array('/ingreso/consulta_cliente')),


                //array('label'=>'Administrador', 'url'=>array('/administrador/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Administrador', 'url'=>array('/administrador/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Registrar administrador', 'url'=>array('/administrador/create')),
                    array('label'=>'Administrar administrador ', 'url'=>array('/administrador/admin')),
                   // array('label'=>'Informe de ventas','url'=>array('/administrador/ventas')),
                )),

                //array('label'=>'Cliente Premium', 'url'=>array('/clientePremium/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Cliente Premium', 'url'=>array('/clientePremium/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Registrar cliente', 'url'=>array('/clientePremium/create')),
                   // array('label'=>'Listar cliente', 'url'=>array('/clientePremium/index')),
                    array('label'=>'Administrar clientes ', 'url'=>array('/clientePremium/admin')),
                )),

                array('label'=>'Vehículos', 'url'=>array('/vehiculoAutorizado/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Ingresar Vehiculo Autorizado', 'url'=>array('/vehiculoAutorizado/create')),
                    array('label'=>'Listar Vehiculos', 'url'=>array('/vehiculoAutorizado/index')),
                )),
                //array('label'=>'Ingreso', 'url'=>array('/ingreso/index')),
                array('label'=>'Ingresos', 'url'=>array('/ingreso/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Registrar ingreso', 'url'=>array('/ingreso/create')),
                    //array('label'=>'Listar ingresos', 'url'=>array('/ingreso/index')),
                    array('label'=>'Administrar', 'url'=>array('/ingreso/admin')),
                    array('label'=>'Generar Boleta', 'url'=>array('/ingreso/boleta')), 
                    /*
                    '-------',
                    array('label'=>'Emitir boleta', 'url'=>'#'),
                    array('label'=>'disponibilidad', 'url'=>array('/ingreso/disponibilidad')),*/
                )),


                array('label'=>'Servicios', 'url'=>array('/servicios/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Registrar servicio', 'url'=>array('/servicios/create')),
                    array('label'=>'Administrar servicios ', 'url'=>array('/servicios/admin')),
                )),
                //array('label'=>'Servicios', 'url'=>array('/servicios/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=> Yii::app()->user->name , 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Tarifa ', 'url'=>array('/servicios/fijar_tarifas')),
                    array('label'=>'Actualizar', 'url'=>array('/administrador/updateme')),    
                    array('label'=>'Salir', 'url'=>array('/site/logout')),
                )),
            ),
        ),
    ),
)); ?>

<div class="container" id="page">
    <?php /*$this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Ver disponibilidad',
        'type'=>'danger',
        'htmlOptions'=>array(
            'data-toggle'=>'modal',
            'data-target'=>'#myModal',
        ),
    )); */?>

    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>


    <?php echo $content; ?>

    <!--div class="clear"></div-->

    <div id="footer">
        Creado en &copy; <?php echo date('Y'); ?> por Grupo 8.<br/>
        Sprint #1.<br/>
        <?php echo Yii::powered(); ?>
    </div><!-- footer -->

</div><!-- page -->

</body>
</html>




