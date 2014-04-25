<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>




<div class="well span 8">
	<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'http://placehold.it/770x400&text=First+thumbnail', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/770x400&text=Second+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/770x400&text=Third+thumbnail', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); ?>
		
</div>

<?php /*$this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); */?>

<!--p>Congratulations! You have successfully created your Yii application.</p-->

<?php //$this->endWidget();?>

<!--p>You may change the content of this page by modifying the following two files:</p-->

<!--ul>
    <li>View file: <code><?php// echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php// echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p-->
