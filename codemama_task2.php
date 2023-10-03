<?php
$textA=fgets(STDIN);
$textB=fgets(STDIN);

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

function checkAnargam($textA,$textB){
    $textA=str_split($textA);
    $textB=str_split($textB);
    sort($textA);
    sort($textB);

    if($textA===$textB){
        return true;
    }
    else{
        return false;
    }
}
if(checkAnargam($textA,$textB)){
    echo "YES\n";
}
else{
    echo "NO\n";
}

?>