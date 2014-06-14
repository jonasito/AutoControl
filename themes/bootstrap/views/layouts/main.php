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

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Inicio', 'url'=>array('/site/index')),
                array('label'=>'Nosotros', 'url'=>array('/site/page', 'view'=>'about'),'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Contacto', 'url'=>array('/site/contact'),'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Disponibilidad', 'url'=>array('/ingreso/disponibilidad')),
                //array('label'=>'Administrador', 'url'=>array('/administrador/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Administrador', 'url'=>array('/administrador/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Registrar administrador', 'url'=>array('/administrador/create')),
                    array('label'=>'Administrar administrador ', 'url'=>array('/administrador/admin')),
                )),

                //array('label'=>'Cliente Premium', 'url'=>array('/clientePremium/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Cliente Premium', 'url'=>array('/clientePremium/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Registrar cliente', 'url'=>array('/clientePremium/create')),
                    array('label'=>'Administrar clientes ', 'url'=>array('/clientePremium/admin')),
                )),

                array('label'=>'Vehiculos', 'url'=>array('/vehiculoAutorizado/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Ingresar Vehiculo Autorizado', 'url'=>array('/vehiculoAutorizado/create')),
                    array('label'=>'Listar Vehiculos', 'url'=>array('/vehiculoAutorizado/index')),
                )),
                //array('label'=>'Ingreso', 'url'=>array('/ingreso/index')),
                array('label'=>'Ingresos', 'url'=>array('/ingreso/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Registrar ingreso', 'url'=>array('/ingreso/create')),
                    //array('label'=>'Listar ingresos', 'url'=>array('/ingreso/index')),
                    array('label'=>'Administrar', 'url'=>array('/ingreso/admin')),/*
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
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Creado en &copy; <?php echo date('Y'); ?> por Grupo 8.<br/>
		Sprint #1.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
