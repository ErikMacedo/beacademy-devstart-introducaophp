<?php 
   $bandas = [
        ["Dream Theater", 1],
        ["Neo Ni Neo", 4],
        ["Iron Maiden", 2],
   ];

   echo "<table>";
   
   foreach($bandas as $n1) {
    echo "<tr>";
    echo "<td>{$n1[0]}</td>";
    echo "<td>{$n1[1]}</td>";
    echo "</tr>";



   }
   echo "</table>";