<?php
$velocidade = $_POST["velocidade"];
$distancia = $_POST["distancia"];
$consumomedio = $_POST["consumomedio"];

$thoras = $distancia/$velocidade;
$tcombustivel = $distancia/$consumomedio;

echo "Total horas: ", number_format(round($thoras, 2 ,PHP_ROUND_HALF_UP), 2, ".", ""), "\n";
echo "Total combustivel: ", number_format(round($tcombustivel, 2 ,PHP_ROUND_HALF_UP), 2, ".", ""), "\n";
?>