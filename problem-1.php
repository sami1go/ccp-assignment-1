<?php
$input = explode(' ', readline());

$minimum = null;

foreach ($input as $input) {
    if ($input >= 0) {
        $input = $input;
    } else {
        $input = $input * (-1);
    }

    if (isset($minimum)) {
        if ($input < $minimum) {
            $minimum = $input;
        }
    } else {
        $minimum = $input;
    }

}

echo $minimum;