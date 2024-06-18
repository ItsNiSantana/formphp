<?php

$taboada = $_POST['taboada'];

$i=1;

echo "Tabuada do $taboada<br><br>";

while($i<11){

    $r = ($taboada*$i);

    echo "$taboada X $i = $r <br>";
    $i++;
}

?>