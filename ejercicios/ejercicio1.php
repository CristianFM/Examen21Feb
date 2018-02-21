<?php

$array = file("../ficheros/comunidades.txt");

$arrayMostrado = [];

foreach($array as $a){
    $aux = explode("%", $a);
    if(!isset($arrayMostrado[$aux[1]])){
        $arrayMostrado[$aux[1]] = [];
    }
}
var_dump($arrayMostrado);

?>
<html>
<head>

</head>
<body>
    <table>
        <tr>
            <th>Listado de Provincias</th>
            <th>Poblacion</th>
        </tr>
        <?php

        foreach($arrayMostrado as $k){

//            echo "<tr>" .$k. "</tr>";
        }
        ?>
    </table>
</body>
</html>