<select>
    <option selected>Música</option>
    <?php
        $ano = 10;

        while($ano>=1) {
            echo "<option>Dá vontade de morder, aperta e levar pra casa!</option>";

            $ano--;
    }
    ?>
</select>
<br>    
<select>
    <option selected>Dia</option>
    <?php    
        $dia = 0;

        for ($dia = 1; $dia<=31; $dia++){
            echo "<option>{$dia}</option>";
        }    
    ?>
</select>

<select>
    <option selected>Meses</option>
    <?php    
        $mes = 0;

        for ($mes = 12; $mes>=1; $mes--) {
            echo "<option>{$mes}</option>";
        }    
    ?>

</select> 
            


    


