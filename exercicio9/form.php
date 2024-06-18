<?php

$nome = $_POST['nome'];
$horario = $_POST['horario'];

if(date("$horario")<12){
    echo "Bom dia $nome";
}
elseif(date($horario)>12 && date("$horario")<18){
    echo "Bom tarde $nome";
}
else{
    echo "Bom noite $nome";
}

?>