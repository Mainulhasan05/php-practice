<!-- https://atcoder.jp/contests/abc322/tasks/abc322_a -->
<?php
$n=fgets(STDIN);
$text=fgets(STDIN);
// find first index of ABC in text
$pos=strpos($text,"ABC");
if($pos===false){
    echo "-1\n";
}else{
    echo ($pos+1)."\n";
}
?>