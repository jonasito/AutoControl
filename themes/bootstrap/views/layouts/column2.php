<br>
<?php $this->beginContent('//layouts/main'); ?>
	<div class= 'well'>
      <div class="row-fluid">
        <div class="span3" >

        	<br>
         <?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Opciones: ',
			));
			?>
			<br>
			<?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'sidebar'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar span3 -->

	<div class="span9">
		<div class="main">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
</div>
<?php $this->endContent(); ?>
