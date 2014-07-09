<?php

$this->breadcrumbs=array(
   // 'Disponibilidad',
);

?>

<h1>Disponibilidad</h1>

<?php 
$libre=Ingreso::model()->disponibilidad();

if(!is_null($libre)){ ?>

<div class="well span8" style='background-color: #FEEBC1'>
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
    }else echo '<label>Sin estacionamientos</label>';
?>






