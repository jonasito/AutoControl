<!DOCTYPE html>
<html lang="en">

    <h1>Consulta Usuario</h1>

    <form id="patente"  name="patente" method="post" class="form-horizontal" role="form" style="padding-top:100px; padding-bottom:100px; padding-left:200px; text-align:left">

        <div class="form-group">
            <label class="col-md-2 control-label"> </label>
            <label class="col-md-2 control-label"> Ingrese patente</label>
            <div class="col-md-8">
                <div class="radio">
                    
                        <input id ="patente" type="text" class="form-control" placeholder="Ej: AA1111">
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label"> </label>
            <label class="col-md-2 control-label"></label>
            <div class="col-md-8">
                <div class="radio">
                    <label>
                    <input type="radio" name="optionsRadios" id="1" value="option1" checked>
                    Cliente Normal
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label"> </label>
            <label for="inputPassword" class="col-md-2 control-label"></label>
            <div class="col-md-8">
                <div class="radio">
                    <label>
                    <input type="radio" name="optionsRadios" id="2" value="option2">
                    Cliente Premium
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label"> </label>
            <label for="inputPassword" class="col-md-2 control-label"></label>
            <div class="col-md-8">
                <div class="radio">
                    <label>
                    <button type="submit" class="btn btn-primary">Consultar</button>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
</div>
    </form>
</html>

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
        ),
        )
    ); ?>