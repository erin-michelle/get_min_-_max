<?php


function get_max_and_min($sample) {

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 

$max = $sample[0];
$min = $sample[0];


for($i = 0; $i < count($sample); $i++) {

        if($max < $sample[$i]) 
        {
            $max = $sample[$i];
        }

        if ($min > $sample[$i]) 
        {
            $min = $sample[$i];
        }

	}

}

        get_max_and_min($sample) = $output;  
        var_dump($output); 
        //$output should be equal to array('max' => 332, 'min' => 1.02);

?>