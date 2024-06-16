<?php

$input = intval(readline());

for ($i = 0; $i <= $input; $i++) {
    for($k=($input*2/2)-$i;$k>0;$k--){
        print(' ');
    }
    for ($j = 0; $j < $i*2-1; $j++) {
        print ('*');
    }
    print ("\n");
}