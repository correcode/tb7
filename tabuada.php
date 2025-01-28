<?php

echo "Digite um numero de 1 a 10: \n";

$valor = trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++){
    echo "$valor x $i = " . ($valor * $i) . "\n";
}
