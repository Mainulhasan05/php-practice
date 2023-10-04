<?php
fgets(STDIN);
fgets(STDIN);
$text1=trim(fgets(STDIN));
$text2=trim(fgets(STDIN));

function isPrefix($text1,$text2){
    $split2=str_split($text2);
    $slice=array_slice($split2,0,strlen($text1));
    $prefix=implode($slice);
    if(strpos($text1,$prefix)!=''){
        return true;
    }else{
        return false;
    }
}

function isSuffix($text1,$text2){
    $split2=str_split($text2);
    $slice=array_slice($split2,-strlen($text1));
    $suffix=implode($slice);
    if(strpos($text1,$suffix)!=''){
        return true;
    }else{
        return false;
    }
}

if(isPrefix($text1,$text2) && isSuffix($text1,$text2)){
    echo "0\n";
}
else if(isPrefix($text1,$text2)){
    echo "1\n";
}
else if(isSuffix($text1,$text2)){
    echo "2\n";
}
else{
    echo "3\n";
}

?>