<?php

$file_contents = file_get_contents('test.txt');

$number_of_words = count(explode(' ', $file_contents));

echo $number_of_words;