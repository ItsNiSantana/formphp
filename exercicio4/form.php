<?php
         $data = $_POST['data'];
         if($data%4 ==0 && $data%100 !=0){
             echo $data." é um ano bissexto";
         }else if($data%400 ==0){
             echo $data." é um ano bissexto";
         }else{
             echo $data." não é um ano bissexto";
         }
?>