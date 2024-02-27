<?php

    function rumusKubus(){
        $i = 9;
        $j = 4;
        
        $volumeA = $i * $i * $i;
        $volumeB = $j * $j * $j;

        $total = $volumeA + $volumeB;
        echo $total;
    }
    
    return rumusKubus();