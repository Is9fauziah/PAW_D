<h1>Contoh Function</h1>
<?php

     function tes($start, $finish, $nama){
        for ($i = $start; $i <= $finish; $i++){
            echo("<br> $i selamat datang  $nama");
        }
    }
    tes(1, 4, "isnain") ;
    echo("<br>");
    tes(2,7, "yasmin");
    echo("<br>");
    tes(4,10, "user255285");