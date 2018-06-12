<?php

$result='';

for ($i=0; $i<5; $i++){

print $i. '回目のさようなら'. PHP_EOL;;
}

?>

<?php

$msg = "";

for($i=0; $i<5; $i++){
    $msg = ($i + 1). '回目のこんにちは!'. PHP_EOL;
print $msg;
}
?>