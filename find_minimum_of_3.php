<?php
function returnMax($a,$b) {
  if($a>$b){
    return true;
  }
  return false;
}
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
if(returnMax($a,$b)){
  if(returnMax($a,$c)){
    echo $a."\n";
  }else{
    echo $c."\n";
  }
}
else if(returnMax($b,$a)){
    if(returnMax($b,$c)){
      echo $b."\n";
    }else{
        echo $c."\n";
    }
}

?>
