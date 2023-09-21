<?php
function say_hi($name) {
  echo "Hello, ".$name."! Nice to meet you.\n";
}
$celsius = trim(fgets(STDIN));

say_hi($celsius);
?>
