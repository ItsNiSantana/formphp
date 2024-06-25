<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $pasta = $_POST["pasta"];
      $n_imagens = $_POST["num_imagens"];

      echo "<table>";
      echo "<tr>";

      for($i = 1; $i <= $n_imagens; $i++) {
        echo "<td>";
        echo "<img src='http://localhost/$pasta/$i.jpg' width='150' height='100'>";
        echo "</td>";
      }

      echo "</tr>";
      echo "</table>";
    }
