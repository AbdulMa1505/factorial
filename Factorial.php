<?php
function factorialLoop($number){
    $factorial=1;
    for($i=1;$i<=$number;$i++){
        $factorial *= $i;
    }
    return $factorial;
}
echo factorialLoop(5);

?>