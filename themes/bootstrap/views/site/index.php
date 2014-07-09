<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>




<div class="well span 8">
	<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'http://www.caranddriverthef1.com/sites/default/files/aparcamiento.jpg', 'label'=>'Servicios', 'caption'=>'Nuevos y mejores servicios'),
        array('image'=>'http://downtownlapaz.com/img/renders/ESTACIONAMIENTO1.jpg', 'label'=>'Seguridad', 'caption'=>'Vigilancia 24 horas'),
        array('image'=>'http://downtownlapaz.com/img/renders/ESTACIONAMIENTO2.jpg', 'label'=>'Cercania', 'caption'=>'Cerca del centro de la ciudad'),
    ),
)); ?>
<div class='well', style='background-color: #FEEBC1'>
	</div>
		
</div>


