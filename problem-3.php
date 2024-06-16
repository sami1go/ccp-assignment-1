<?php
	
	$input = explode(' ', readline());
		
	$reversed = [];
	
    function reverse($string){
        $string = str_split($string);
        $length = count($string);

        for($i=0;$i<$length/2;$i++){
            $swap = $string[$i];
            $string[$i] = $string[$length-1-$i];
            $string[$length-1-$i]=$swap;
        }

        $string = implode('',$string);
        return $string;
    }

	foreach($input as $input){
	  array_push($reversed, reverse($input));
	}

    $reversed = implode(' ',$reversed);

    echo $reversed;