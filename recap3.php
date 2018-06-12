<?php
function display_hello($num){

for($i=0;$i<$num;$i++){

print ($i+1).'回目のこんにちは'. PHP_EOL;
}
}

display_hello(8)

?>