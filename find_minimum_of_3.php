<?php
function returnMin($a,$b) {
  if($a<$b){
    return true;
  }
  return false;
}
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
if(returnMin($a,$b)){
  if(returnMin($a,$c)){
    echo $a."\n";
  }else{
    echo $c."\n";
  }
}
else if(returnMin($b,$a)){
    if(returnMin($b,$c)){
      echo $b."\n";
    }else{
        echo $c."\n";
    }
}

?>
