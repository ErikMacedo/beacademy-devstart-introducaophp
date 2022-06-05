<?php $frutas = [
    "Laranja",
    "Banana",
    "Abacaxi",
    "Maça",
    "Morango",
    "Melancia",
    "Tangerina",
    
    
    ]    
    ?>
<ul>
<?php
    $n = 0;

    for (;$n<=6;$n++) {
        echo "<li>{$frutas[$n]}</li>";

    }
    ?>

</ul>