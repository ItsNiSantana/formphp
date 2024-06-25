<?php
        $nome = $_POST['nome'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $frequencia = $_POST['frequencia'];

        $media = ($n1 + $n2) / 2;

        echo "Nome: ".$nome."<br>";
        echo "Media: ".$media."<br>";
        echo "Frequencia: ".$frequencia."<br>";

        if($media < 5) {
            echo "Reprova por nota";
        } else if($frequencia < 75) {
            echo "Reprova por frequencia";
        } else {
            echo "Aprovado";
        }

?>