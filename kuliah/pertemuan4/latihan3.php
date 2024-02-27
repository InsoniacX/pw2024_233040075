<?php


    function cetakAngka($angka) {
        for ( $i = 1; $i <= 5; $i++ ){
            for ( $j = 1; $j <= $i; $j++ ){
                echo "$angka";
            }
            echo "<br>";
        }
    }
    return cetakAngka(7);