<?php

?>

<h1>Lista Servicios</h1>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>
 
<fieldset>
 
    <legend>Legend</legend>
 
    <?php echo $form->checkBoxListRow($model, 'checkboxes', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can also be checked and included in form results',
        'Option three can—yes, you guessed it—also be checked and included in form results',
    ), array('hint'=>'<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
    

 
</fieldset>
 
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
 
<?php $this->endWidget(); ?>
