<?php

function numero_primo($num) {
    $cont = 1;

    if ($num == 1) {
        echo"O numero: $num é primo";
    } else {
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $cont++;
            }
        }
        if ($cont == 2) {
            echo "O número: $num  é primo";
        } else {
            echo "O número: $num  nao é primo";
        }
    }
}

