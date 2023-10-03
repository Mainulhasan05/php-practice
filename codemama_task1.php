<?php
$text=fgets(STDIN);
function removeDuplicates($text){
    $output_text="";
    for($i=0; $i<strlen($text);$i++){
        $output_chars=str_split($output_text);
        if(in_array($text[$i],$output_chars)){
            continue;
        }
        else{
            $output_text=$output_text.$text[$i];
        }
    }
    return $output_text;
    
}

echo removeDuplicates($text);