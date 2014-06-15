<label>disponibilidad</label>

<?php 
$libre=Ingreso::model()->disponibilidad();

if(!is_null($libre)){ ?>

<div class="well span8">
    <table class="table">
        <thead>
            <tr>
                <th>Libre</th>
                <th>Numero</th>
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






