<?php
        $base = floatval($_POST['base']);
        $altura = floatval($_POST['altura']);

        $area = $base * $altura;

        echo "a area do retangulo é ".number_format($area, 2, '.', '');
?>