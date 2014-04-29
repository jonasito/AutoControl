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
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Administrador', 'url'=>array('/administrador/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Cliente Premium', 'url'=>array('/clientePremium/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Vehiculos', 'url'=>array('/vehiculoAutorizado/index'),'visible'=>!Yii::app()->user->isGuest),
                //array('label'=>'Ingreso', 'url'=>array('/ingreso/index')),
                array('label'=>'Ingresos', 'url'=>array('/ingreso/index'),'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Registrar ingreso', 'url'=>array('/ingreso/create')),
                    array('label'=>'Listar ingresos', 'url'=>array('/ingreso/index')),
                    array('label'=>'Administrar', 'url'=>array('/ingreso/admin')),
                    '-------',
                    array('label'=>'Emitir boleta', 'url'=>'#'),
                    array('label'=>'prueba ('.Yii::app()->getSession()->get('est').')', 'url'=>array('/ingreso/prueba')),
                )),


                array('label'=>'Servicios', 'url'=>array('/servicios/index'),'visible'=>!Yii::app()->user->isGuest),
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
